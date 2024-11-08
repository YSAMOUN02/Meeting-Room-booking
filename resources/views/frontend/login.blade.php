<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.bunny.net">

    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/5041c59df8.js" crossorigin="anonymous"></script>

    <link rel="shortcut icon" href="{{ URL('assets/image/office.ico') }}" type="image/x-icon">

    <style>
        .body {
            min-height: 100vh;

            background: url('assets/image/gradient-blue-background_23-2149.png');
            background-position: center;
            background-attachment: fixed;
            background-size: cover;
            position: relative;
        }

        #btn_login {
            background-color: green;
            padding: 5px 10px;
            border-radius: 5px;
            color: white;
        }

        .alert {
            position: fixed;
            top: 100px;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 999;
        }

        .alert_style {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgb(255, 255, 255);

            z-index: 9999 !important;
            padding: 5px 20px;
            border-radius: 10px;

            animation: fade 30s forwards;
        }

        .fail {
            color: rgb(255, 74, 74);
            border: 1px solid rgb(241, 62, 62);
        }

        .success {
            color: rgb(0, 113, 11);
            border: 1px solid rgb(2, 103, 0);
        }

        .alert_style i {
            margin-right: 5px;
        }

        .drop_slow1 {
            animation: drop_slow 1s forwards;
        }

        .drop_slow2 {
            animation: drop_slow 2s forwards;
        }

        #toast {
            position: absolute;
            top: 40px;
            left: 50%;
            transform: translate(-50%, -50%);
            animation: fade 10s forwards;
            z-index: 9999;
            display: none

        }

        @keyframes fade {
            0% {
                display: block;
                opacity: 1;
            }

            100% {
                opacity: 0;
                display: none;
            }
        }

        @keyframes drop_slow {
            0% {
                transform: translateY(-10px);
                opacity: 0;

            }

            100% {
                transform: translateY(0px);
                opacity: 1;
            }
        }
    </style>
    <title>Login</title>

</head>

<body>
    <div id="toast"
        class="max-w-xs bg-white border border-gray-200 rounded-xl shadow-lg dark:bg-neutral-800 dark:border-neutral-700"
        role="alert" tabindex="-1" aria-labelledby="hs-toast-warning-example-label">
        <div class="flex p-4">
            <div class="shrink-0">
                <svg class="shrink-0 size-4 fill-red-800 mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16"
                    height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path
                        d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z">
                    </path>
                </svg>
            </div>
            <div class="ms-3">
                <p id="hs-toast-warning-example-label" class="text-sm text-gray-700 dark:text-neutral-400">
                    ewr
                </p>
            </div>
        </div>
    </div>
    @if (session('fail'))
    <div class="drop_slow1 alert fail alert-success">
        <div class="alert_style">
            <i class="fa-solid fa-circle-exclamation" style="color: #ff0000;"></i>
            {{ Session::get('fail') }}
        </div>
    </div>
@endif
    @if (session('success'))
        <div class=" drop_slow1 alert success alert-success">
            <div class="alert_style">
                <i class="fa-solid fa-circle-exclamation" style="color: #34ad00;"></i>
                 {{ Session::get('success') }}

            </div>
        </div>
    @endif

    <section class="body bg-gray-50 dark:bg-gray-900">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">

            <div
                class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 dark:bg-gray-800 dark:border-gray-700">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1
                        class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
                        Sign in to your account
                    </h1>
                    <form class="space-y-4 md:space-y-6" id="form_login" action="/login/submit" method="POST">
                        @csrf
                        <div>
                            <label for="email"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                            <input type="text" name="name_email" id="name_email"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                class="bg-gray-50 border border-gray-300 text-gray-900 rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                required="">
                        </div>
                        <div class="flex items-center justify-between">
                            <div class="flex items-start">
                                <div class="flex items-center h-5">
                                    <input id="remember" aria-describedby="remember" type="checkbox"
                                        class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-primary-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-primary-600 dark:ring-offset-gray-800"
                                        required="">
                                </div>
                                <div class="ml-3 text-sm">
                                    <label for="remember" class="text-gray-500 dark:text-gray-300">Remember me</label>
                                </div>
                            </div>
                            {{-- <a href="/user/create"
                                class="text-sm font-medium text-primary-600 hover:underline dark:text-primary-500">Forgot
                                password?</a> --}}
                        </div>
                        <button type="button" id="btn_login" onclick="submit_with_api()">Login</button>

                    </form>
                </div>
            </div>
        </div>
    </section>
    <script>
        async function submit_with_api() {
            try {


                const response = await fetch('/api/login/submit', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json'
                    },
                    body: JSON.stringify({
                        name_email: document.getElementById('name_email').value,
                        password: document.getElementById('password').value,
                        remember: document.getElementById('remember').checked,
                    }),
                });

                const data = await response.json();
                let tost = document.getElementById('toast');
                let label = document.querySelector("#hs-toast-warning-example-label");

                if (response.ok) {
                    if (response.status ==200){
                        if (data.token) {

                                localStorage.setItem('token', data.token); // Store the token if present
                                    document.getElementById('form_login').submit();

                        } else {
                            alert('No token');
                        }
                    }else if(response.status == 401){
                        // alert('Invalid Credentail.');
                        label.innerHTML = `Invalid Credentail.`;
                        tost.style.display = 'block';
                    }else if(response.status == 404){
                        label.innerHTML = `Page Not found.`;
                        tost.style.display = 'block';

                    }else{
                        // alert('No Respond.');
                        label.innerHTML = `No Respond.`;
                        tost.style.display = 'block';

                    }


                }else{
                    label.innerHTML = `Invalid Credentail.`;
                    tost.style.display = 'block';
                }
            } catch (error) {
                alert(error);

            }
        }
    </script>
    <script src="{{ URL('assets/js/script.js') }}"></script>
</body>

</html>
