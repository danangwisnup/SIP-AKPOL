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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <script defer="defer" src="https://plausible.io/js/script.outbound-links.js"></script>
</head>

<body>

    @yield('content')

    <footer class="bg-white fixed-bottom">
        <div class="container">
            <small class="row align-items-center g-0 border-top py-2 text-center">
                <small>© 2023 AKPOL. All rights reserved.</small>
            </small>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="{{ url('js/main.js') }}"></script>

    @yield('script')

    <script>
        // Mendisable button submit ketika form di submit
        $('form').submit(function() {
            $(this).find('button[type=submit]').html(
                `<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
            Loading...`
            );
            $('button').attr('disabled', 'disabled');
        });

        // Menghapus fixed-bottom class pada footer ketike scroll ke bawah
        $(window).scroll(function() {
            if ($(this).scrollTop() > 0) {
                $('footer').removeClass('fixed-bottom');
            } else {
                $('footer').addClass('fixed-bottom');
            }
        });

        // semua form batasi maxlength="255" kecuali input type number dan file
        $('form').find('input:not([type=number]):not([type=file]), textarea').attr('maxlength', '255');
    </script>

</body>

</html>
