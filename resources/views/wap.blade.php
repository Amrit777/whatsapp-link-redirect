<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset=utf-8>
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta name=keywords content="">
    <meta name=description content="Whatsapp Uprint.id, customer service kami siap untuk membantu Anda">
    <title>Uprint.id - Kontak Whatsapp</title>
    <!-- Latest compiled and minified CSS -->
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="icon" type=image/x-icon
        href="{{ asset('media/favicon/stores/1/Uprint_id-Percetakan-Online-Indonesia.png') }}">
    <script async src=http://www.googletagmanager.com/gtag/js?id=UA-76630295-1></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'UA-76630295-1');
    </script>
    <style>
        .page_speed_168804105 {
            background-size: 100%
        }

        .page_speed_94614087 {
            border-radius: 50%
        }

        .page_speed_1298542476 {
            font-weight: bold
        }

        .page_speed_867482474 {
            color: #ffc211
        }

    </style>
</head>
<style>
    html {
        background-color: #64656a;
    }

</style>

<body class="text-gray-100 text-sm font-sans page_speed_168804105">
    <div class="flex justify-center">
        <div class="mt-6 mb-3">
            <img src="{{ asset('images/logouprint.jpg') }}"
                alt="Uprint.id - Kontak Whatsapp Percetakan Online Indonesia" width="96" height="96"
                class="page_speed_94614087" />
        </div>
    </div>
    <div class="flex justify-center">
        <div class="border-white border-opacity-100 mb-3 font-bold"> Whatsapp Channel @uprint.id </div>
    </div>
    <div class="flex justify-center">
        <div class="w-4/5 md:w-1/2 lg:w-1/2 py-2 my-2 text-center"> Halo Kak.. agar cs kami dapat melayani
            <span class="page_speed_1298542476">whatsapp</span> kakak dengan cepat, kakak bisa isi <span
                class="page_speed_1298542476">nama dan kebutuhan</span> lalu klik tombol dibawah ya kak
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
        integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('error'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('error') }}");
        </script>
    @endif
    @if (Session::has('success'))
        <script>
            toastr.options = {
                "closeButton": true,
                "progressBar": true
            }
            toastr.error("{{ session('success') }}");
        </script>
    @endif
</body>

</html>
