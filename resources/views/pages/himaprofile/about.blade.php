@extends('layout.layout')
@section('title', 'Tentang')
@include('components.navbar')
@section('body')

    {{-- about --}}
    <div class="px-60 pt-44 pb-32 flex gap-20 items-center">
        <div>
            <div>
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="text-6xl font-bold mt-5">
                <h1 data-aos="fade-up" data-aos-duration="2000">Kabinet</h1>
                <h1 data-aos="fade-up" data-aos-duration="2500">Sibernetika</h1>
            </div>
            <div class="mt-5">
                <p data-aos="fade-up" data-aos-duration="3000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                    itaque quo labore. Quas sed, similique amet sunt adipisci rem ipsum id aperiam fugiat qui minus
                    necessitatibus voluptas aut distinctio ratione?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Consequuntur, maxime!</p>
            </div>
        </div>
        <img src="/assets/img/logo.png" class="w-96 h-96 rounded-xl object-cover" data-aos="fade-up"
            data-aos-duration="1000" alt="">
    </div>

    <div class="px-60">
        <div class="bg-green-700 h-0.5 w-full"></div>
    </div>

    {{-- visi & misi --}}
    <div class="px-60 pt-32 bg-white">
        <div class="text-center mb-20">
            <h1 class="text-sm font-semibold tracking-widest text-gray-500" data-aos="fade-up">
                VISI & MISI
            </h1>
            <h2 class="text-5xl font-bold mt-4" data-aos="fade-up" data-aos-duration="1200">
                Arah & Tujuan Kami
            </h2>
            <p class="mt-6 text-gray-600 max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="1600">
                Menjadi wadah pengembangan diri yang adaptif, progresif, dan berdampak nyata bagi mahasiswa.
            </p>
        </div>

        <div class="grid grid-cols-2 gap-16 items-start">
            <div class="p-10 rounded-xl bg-green-700 text-white shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up"
                data-aos-duration="1800">
                <h3 class="text-3xl font-bold mb-6">Visi</h3>
                <p class="leading-relaxed">
                    Mewujudkan Kabinet Sibernetika sebagai organisasi mahasiswa yang inovatif,
                    kolaboratif, dan berdaya saing tinggi dalam membangun generasi yang adaptif
                    terhadap perkembangan teknologi dan sosial.
                </p>
            </div>

            <div class="p-10 rounded-xl bg-green-700 text-white shadow-lg hover:shadow-2xl transition duration-300" data-aos="fade-up"
                data-aos-duration="2200">
                <h3 class="text-3xl font-bold mb-6">Misi</h3>
                <ul class="space-y-4>
                    <li class="flex gap-3">
                        <span class="text-xl font-bold">01</span>
                        <span>Meningkatkan kualitas sumber daya mahasiswa melalui program kerja yang berkelanjutan.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-xl font-bold">02</span>
                        <span>Mendorong inovasi, kreativitas, dan kolaborasi antar anggota.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-xl font-bold">03</span>
                        <span>Menjadi jembatan aspirasi mahasiswa dengan lingkungan kampus dan masyarakat.</span>
                    </li>
                    <li class="flex gap-3">
                        <span class="text-xl font-bold">04</span>
                        <span>Membangun budaya organisasi yang profesional, transparan, dan berintegritas.</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
