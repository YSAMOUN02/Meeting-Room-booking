window.onload = function() {
    // Hide the loading graphic and show the content once the page is fully loaded

    document.querySelector("#loading").style.display = 'none';

};


const token = localStorage.getItem("token");

async function validation_data(){

    let start_date = document.querySelector("#from_date");
    let end_date = document.querySelector("#to_date");
    let start_time = document.querySelector("#start_time");
    let end_time = document.querySelector("#end_time");

    let start_date_val = "NA";
    let end_date_val= "NA";
    let start_time_val= "NA";
    let end_time_val= "NA";
    let room_val = document.querySelector('#room').value;
    if(start_date){
        if(start_date.value != ''){
            start_date_val = start_date.value;
        }
    }
    if(end_date){
        if(end_date.value != ''){
            end_date_val = end_date.value;
        }
    }
    if(start_time){
        if(start_time.value != ''){
            start_time_val = start_time.value;
        }
    }
    if(end_time){
        if(end_time.value != ''){
            end_time_val = end_time.value;
        }
    }
    let tost = document.getElementById('toast');
    let label = document.querySelector("#hs-toast-warning-example-label");
    let btn_submit = document.querySelector("#btn_submit_booking");

    let total_time = 0;
    if (end_time_val !== 'NA' && start_time_val !== 'NA') {
        // Create Date objects with the same date but different times
        let startTime = new Date(`1970-01-01T${start_time_val}`);
        let endTime = new Date(`1970-01-01T${end_time_val}`);


            // Calculate the difference in milliseconds
            let diffInMs = endTime - startTime;

            // Convert milliseconds to hours
            total_time = diffInMs / (1000 * 60 * 60);

            // Limit total_time to two decimal places
            total_time = parseFloat(total_time.toFixed(2));

            if (start_time.classList.contains('fail_attemp')) {
                start_time.classList.remove('fail_attemp');
            }
            if (end_time.classList.contains('fail_attemp')) {
                end_time.classList.remove('fail_attemp');
            }


    }



    let message = '';
    daysSelected = -1;

    if (end_date_val != 'NA' && start_date_val != 'NA') {
        // Convert the date values to Date objects
        let startDate = new Date(start_date_val);
        let endDate = new Date(end_date_val);

        // Calculate the difference in time (milliseconds)
        let diffInMs = endDate - startDate;

        // Convert milliseconds to days
        daysSelected = diffInMs / (1000 * 60 * 60 * 24); // Converts to days


    }


    // Null Start Date Prevention
    if(start_date_val == 'NA'){
            message += '- Start Date is Invalid.<br>';

            if (!start_date.classList.contains('fail_attemp')) {
                start_date.classList.add('fail_attemp');
            }
    }else{
        if (!start_date.classList.contains('fail_attemp')) {
            start_date.classList.remove('fail_attemp');
        }
    }
    // Null End  Date Prevention
    if(end_date_val == 'NA'){
            message +=  '- End Date is Invalid.<br>';
            if (!end_date.classList.contains('fail_attemp')) {
                end_date.classList.add('fail_attemp');
            }
   }else{
    if (!end_date.classList.contains('fail_attemp')) {
        end_date.classList.remove('fail_attemp');
    }
   }
      // Null Start Time Prevention
   if(start_time_val == 'NA'){
            message +=  '- Start Time is Invalid.<br>';
            if (!start_time.classList.contains('fail_attemp')) {
                start_time.classList.add('fail_attemp');
            }
    }else{
        if (!start_time.classList.contains('fail_attemp')) {
            start_time.classList.remove('fail_attemp');
        }
    }
           // Null End Date Prevention
   if(end_time_val == 'NA'){
            message += '- End Time is Invalid.<br>';

            if (!end_time.classList.contains('fail_attemp')) {
                end_time.classList.add('fail_attemp');
            }
    }else{

        if (!end_time.classList.contains('fail_attemp')) {
            end_time.classList.remove('fail_attemp');
        }

    }


    // 0 Min Prevention

    if (total_time <= 0) {
        message += '- Time Invalid. 0 min Booking is not allowed.<br>';
        if (!start_time.classList.contains('fail_attemp')) {
            start_time.classList.add('fail_attemp');
        }
        if (!end_time.classList.contains('fail_attemp')) {
            end_time.classList.add('fail_attemp');
        }
    } else {

        if (start_time.classList.contains('fail_attemp')) {
            start_time.classList.remove('fail_attemp');
        }
        if (end_time.classList.contains('fail_attemp')) {
            end_time.classList.remove('fail_attemp');
        }
    }

    if(daysSelected < 0){
        message += '- Date selected is Invalid. Please select From Date to Date Properly.';
        if (start_date.classList.contains('fail_attemp')) {
            start_date.classList.add('fail_attemp');
        }
        if (end_date.classList.contains('fail_attemp')) {
            end_date.classList.add('fail_attemp');
        }
    }else{
        if (start_date.classList.contains('fail_attemp')) {
            start_date.classList.remove('fail_attemp');
        }
        if (end_date.classList.contains('fail_attemp')) {
            end_date.classList.remove('fail_attemp');
        }
    }

    label.innerHTML = message;
    tost.style.display = 'block';
    btn_submit.style.backgroundColor = 'red';


    if(start_date_val != 'NA' && end_date_val != 'NA' && start_time_val != 'NA'  && end_time_val != 'NA' && total_time > 0  && daysSelected >= 0){







        let url = `/api/validation`;

        let data = await fetch(url, {
            method: "POST",
            headers: {
                Authorization: `Bearer ${token}`,
                "Content-Type": "application/json",
            },
            body: JSON.stringify({
                start_date:start_date_val,
                end_date:end_date_val,
                start_time :start_time_val,
                end_time:end_time_val,
                room:room_val
            }),
        })
        .then((res) => res.json())
        .catch((error) => {
            alert(error);
        });
        if(data){
                if(data.bookable == 1){
                    tost.style.display = 'none';
                    btn_submit.style.backgroundColor = 'blue';
                    btn_submit.setAttribute('type','submit');
                }else{
                    console.log(data.message);
                    message +=  data.message;
                    label.innerHTML = ``;
                    label.innerHTML += message;
                    label.style.whiteSpace = 'wrap';
                    tost.style.display = 'block';
                    btn_submit.setAttribute('type','button');
                }
        }



    }



}

function delete_id(id){
    let input = document.querySelector("#value_delete");
    if(input){
        input.value = id;
    }

}

function edit_user(index){
    let fname = document.querySelector("#first_name");

    let company = document.querySelector("#company");
    let department = document.querySelector("#department");
    let role = document.querySelector("#role");
    let phone = document.querySelector("#phone");
    let id_card = document.querySelector("#id_card");
    let email = document.querySelector("#email");
    let user_login = document.querySelector("#user_login");
    let id = document.querySelector("#id");

    if(id){
        id.value = users[index].id;
    }

    if(fname){
        fname.value = users[index].name;
    }
    if(company){
        company.value = users[index].company;
    }
    if(department ){
        department.value = users[index].department;
    }
    if(role){
        role.value = users[index].role;
    }
    if(phone){
        phone.value = users[index].phone;
    }
    if(id_card){
        id_card.value = users[index].id_card;
    }
    if(email){
        email.value = users[index].email;
    }
    if(user_login){
        user_login.value = users[index].user_login;
    }



}
var state_password_show = 0;
function show_password() {
    if (state_password_show == 0) {
        document.querySelector("#password").setAttribute("type", "text");
        state_password_show++;
    } else {
        document.querySelector("#password").setAttribute("type", "password");
        state_password_show = 0;
    }
}
