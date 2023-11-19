<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SIP AKPOL {{ isset($title) ? '| ' . $title : '' }}</title>
    <link rel="icon" href="{{ url('img/logo-akpol.png') }}" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ url('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('css/utilities.css') }}">
    <link rel="stylesheet" href="{{ url('fonts/feather/feather.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://api.fontshare.com/v2/css?f=satoshi@900,700,500,300,401,400&display=swap">
    <script defer="defer" src="https://plausible.io/js/script.outbound-links.js"></script>
</head>

<body>

    @yield('content')

    <script src="js/main.js"></script>
</body>

</html>
