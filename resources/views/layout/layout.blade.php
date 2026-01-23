<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Himasi UBSI | @yield('title')</title>
    <meta name="title" content="HIMASI UBSI - Himpunan Mahasiswa Sistem Informasi">
    <meta name="description"
        content="Wadah aspirasi dan kreativitas mahasiswa Sistem Informasi UBSI Sukabumi. Mari berkontribusi dan berkembang bersama kami.">

    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="HIMASI UBSI | @yield('title')">
    <meta property="og:description" content="Wadah aspirasi dan kreativitas mahasiswa Sistem Informasi UBSI Sukabumi.">
    {{-- Gunakan foto formal organisasi, disarankan ukuran 1200x630px atau persegi --}}
    <meta property="og:image" content="{{ asset('favicon.png') }}">

    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="HIMASI UBSI | @yield('title')">
    <meta property="twitter:description"
        content="Wadah aspirasi dan kreativitas mahasiswa Sistem Informasi UBSI Sukabumi.">
    <meta property="twitter:image" content="{{ asset('favicon.png') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite('resources/css/app.css')
</head>

<body>
    <div class="min-h-screen bg-white">
        @yield('body')
    </div>
    @if (session('success'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil',
                    text: @json(session('success')),
                    confirmButtonText: 'Oke',
                    confirmButtonColor: '#16a34a',
                    timer: 3000,
                    timerProgressBar: true
                })
            })
        </script>
    @endif
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true
            });
        });
    </script>
</body>

</html>
