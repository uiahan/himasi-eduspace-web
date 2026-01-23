<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Himasi UBSI | @yield('title')</title>

    {{-- SEO & Open Graph --}}
    <meta name="title" content="HIMASI UBSI - Himpunan Mahasiswa Sistem Informasi">
    <meta name="description"
        content="Wadah aspirasi dan kreativitas mahasiswa Sistem Informasi UBSI Sukabumi. Mari berkontribusi dan berkembang bersama kami.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="HIMASI UBSI | @yield('title')">
    <meta property="og:description" content="Wadah aspirasi dan kreativitas mahasiswa Sistem Informasi UBSI Sukabumi.">
    <meta property="og:image" content="{{ asset('favicon.png') }}?v={{ time() }}">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="HIMASI UBSI | @yield('title')">
    <meta property="twitter:description"
        content="Wadah aspirasi dan kreativitas mahasiswa Sistem Informasi UBSI Sukabumi.">
    <meta property="twitter:image" content="{{ asset('favicon.png') }}">

    {{-- Fonts & Styles --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="{{ asset('favicon.png') }}?v=1">

    {{-- Vite: Taruh paling bawah di head agar CSS diprioritaskan --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        /* Mencegah scroll saat loading */
        body.loading {
            overflow: hidden;
        }

        #loader {
            transition: opacity 0.5s ease-out, visibility 0.5s;
        }
    </style>
</head>

<body class="loading">
    {{-- Pre-loader Screen --}}
    <div id="loader" class="fixed inset-0 z-[9999] flex flex-col items-center justify-center bg-white">
        <div class="relative flex flex-col items-center">
            {{-- Spinner --}}
            <div class="w-16 h-16 border-4 border-green-100 border-t-green-700 rounded-full animate-spin"></div>
            {{-- Logo Center (Opsional: timpa spinner dengan logo kecil jika mau) --}}
            <img src="{{ asset('assets/img/logo.png') }}" class="w-8 h-8 absolute top-4 animate-pulse" alt="">
            <p class="mt-4 text-green-700 font-black tracking-[0.3em] text-[10px] uppercase animate-pulse">
                HIMASI UBSI
            </p>
        </div>
    </div>

    <div class="min-h-screen bg-white">
        @yield('body')
    </div>

    {{-- Scripts --}}
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        // AOS Init
        document.addEventListener('DOMContentLoaded', function() {
            AOS.init({
                once: true,
                duration: 800,
                easing: 'ease-out-cubic',
                offset: 50, // Tidak perlu scroll terlalu dalam
                delay: 100, // Memberi sedikit jeda agar tidak kaget
            });
        });

        // Refresh AOS setelah loader hilang total
        window.addEventListener('load', function() {
            const loader = document.getElementById('loader');
            document.body.classList.remove('loading');
            loader.style.opacity = '0';

            setTimeout(() => {
                loader.style.visibility = 'hidden';
                AOS.refresh(); // Menghitung ulang posisi elemen
            }, 500);
        });
    </script>

    @if (session('success'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: @json(session('success')),
                confirmButtonColor: '#15803d',
                timer: 3000,
                timerProgressBar: true
            })
        </script>
    @endif
</body>

</html>
