<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('Regist/fonts/material-icon/css/material-design-iconic-font.min.css')}}">

    <!-- Vendor CSS Files -->
    <link href="{{asset('Selecao/assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/aos/aos.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/remixicon/remixicon.css')}}" rel="stylesheet">
    <link href="{{asset('Selecao/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('Regist/css/style.css')}}">
</head>

<body>
    <div class="main">
        <div class="container">
            <form action="{{route('postlogin')}}" method="POST" class="appointment-form" id="appointment-form">
                <!-- {{csrf_field()}} -->
                @csrf
                <h2>Login Pengurus HMSI 2021/2022</h2>
                <div class="form-group-1">
                <div class="mb-3">
                        <label for="email" class="form-label" style="color: black;">Email</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control input-default " style="font-size: unset;margin-bottom:unset" required />

                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label" style="color: black;">Password</label>
                        <input type="password" name="password" id="password" class="form-control input-default " style="font-size: unset;margin-bottom:unset" placeholder="Password" required />
                        
                       

                    </div>

                   
                   
                </div>
                <div class="form-submit">
                    <input type="submit" name="submit" class="btn btn-warning btn-rounded m-b-10 m-l-5" style="background-color: #3a518d;color:white;font-size:unset;"  value="Login" />
                    <a href="{{route('home')}}" class="btn btn-warning btn-rounded m-b-10 m-l-5" style="font-size:unset;color:white;background-color: #fc7c1f;" >Back to Home</a>
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="{{asset('Regist/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('Regist/js/main.js')}}"></script>
    @include('sweetalert::alert')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>