<!DOCTYPE html>
<html lang="en">
<head>
    <title>BTS</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Travelix Project">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ mix('/css/common_css/user/user_home.css') }}">
</head>
<body>
    <div class="super_container">
        @include('user.common.header')
        @include('user.common.navigation')
        @include('user.common.slider')
        <div class="content">
            @yield('content')
        </div>
        @include('user.common.footer')
        @include('user.common.copyright')
    </div>
    <script src="{{ mix('/js/common_js/user/user_home.js') }}"></script>
</body>
</html>
