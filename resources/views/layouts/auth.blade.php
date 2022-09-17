<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/login.css">
</head>
<body>

    <div class="main">

       
        <!-- Sing in  Form -->
        <section class="sign-in">
            <div class="container">

            @yield('content')
     
            </div>
        </section>

    </div>

    <!-- JS -->
    @yield('scripts')
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>