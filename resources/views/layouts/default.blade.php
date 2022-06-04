<!DOCTYPE html>
<html>
<head>
    <title>@yield('title', '四阿姨') - 4ay.cn</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>

@include('layouts._header')

<div class="container">
    @yield('content')
    @include('layouts._footer')
</div>
</body>
</html>
