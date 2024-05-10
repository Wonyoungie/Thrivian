<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">

    <title>@yield('title')</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            background: white;
        }
        ::placeholder {
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="container d-flex justify-content-center align-items-center min-vh-100" style="background-color: white;">
        <header>
            <nav class="navbar navbar-light bg-light fixed-top">
                <div class="container d-flex justify-content-center"> <!-- Menggunakan flexbox untuk pengaturan posisi -->
                    <a class="navbar-brand" href="#">
                        <img src="assets2/img/Thrivian.org.png" alt="" width="180" height="40" style="display: block; margin: 0 auto;">
                    </a>
                </div>
            </nav>
        </header>

        <div class="container d-flex justify-content-center align-items-center min-vh-100" style="background-color: white; margin-top: 70px;">
            <div class="col-md-6 mx-auto" id="loginForm">

                <div class="row align-items-center">

                    <div class="header-text mb-4 text-center">
                        <h2>@yield('title')</h2>
                        
                        @if($errors->any())
                            <div class="col-md-8 mx-auto">
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif

                        @if(session('alert'))
                            <div class="col-md-8 mx-auto">
                                <div class="alert alert-success" role="alert">
                                    {{ session('alert') }}
                                </div>
                            </div>
                        @endif
                            
                    </div>

						@yield('content')

						<div class="my-4 ms-1" style="padding-left: 75px;">
                    -----------------  or continue with  -----------------
                    </div>
                    <div class="input-group mb-3 mx-auto" style="width: 400px">
                        <a class="btn btn-lg btn-light w-100 fs-6 border-dark" href="{{route('google.redirect')}}" style="border-radius: 30px;"><img src="assets2/img/logo-google.png" style="width:20px" class="me-2"><small>Log In with Google</small></a>
                    </div>
                    <footer>
                        <div class="d-flex justify-content-center text-align-center ">
                            <span class= "small fs-9" style="text-align: center; text-decoration: none;">
                                <a href="about_us.html" class="text-black">About Us</a> • 
                                <a href="privacy_terms.html" class="text-black">Privacy & Policy</a> • 
                                <a href="more.html" class="text-black">More</a>
                                <p class=" fs-9">Thrivian.org © 2024</p>
                            </span>
                      </footer>
                </div>
            </div>
        </div>
        </div>
    </div>
      </div>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('showSignUp').addEventListener('click', function () {
                document.getElementById('loginForm').style.display = 'none';
                document.getElementById('signUpForm').style.display = 'block';
            });

            document.getElementById('showLogin').addEventListener('click', function () {
                document.getElementById('loginForm').style.display = 'block';
                document.getElementById('signUpForm').style.display = 'none';
            });

            const passwordInput = document.getElementById('passwordInput');
            const togglePassword = document.getElementById('togglePassword');

            togglePassword.addEventListener('click', function () {
                const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
                passwordInput.setAttribute('type', type);
                // Toggle eye icon
                togglePassword.innerHTML = type === 'password' ? '<i class="bi bi-eye"></i>' : '<i class="bi bi-eye-slash"></i>';
            });
        });
    </script>
</body>
</html>