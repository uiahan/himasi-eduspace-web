@extends('layout.layout')
@section('title', 'Beranda')
@include('components.navbar')
@section('body')

    {{-- header --}}
    <div class="relative min-h-screen w-full flex items-center justify-center overflow-hidden bg-cover bg-fixed bg-center"
        style="background-image: url('/assets/img/himasi.png');">

        {{-- Overlay Gradasi Modern --}}
        <div class="absolute inset-0 bg-gradient-to-b from-green-900/80 via-green-800/60 to-green-700 backdrop-blur-sm">
        </div>

        {{-- Elemen Dekoratif Aksesoris (Opsional untuk kesan modern) --}}
        <div class="absolute top-20 -left-10 w-72 h-72 bg-green-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 -right-10 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 w-full px-6 xl:px-60 md:pt-20">
            <div class="flex flex-col items-start md:items-center justify-center md:text-center text-justify">

                {{-- Badge Kecil di Atas Judul --}}
                <div class="mb-6 inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-white text-xs tracking-widest uppercase font-medium shadow-sm"
                    data-aos="fade-down" data-aos-duration="1000">
                    <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                    Official Website
                </div>

                {{-- Judul Utama --}}
                <div class="text-white leading-tight">
                    {{-- Teks Himpunan Mahasiswa dibuat lebih kecil sedikit di mobile agar tidak makan tempat --}}
                    <p data-aos="zoom-out-up" data-aos-duration="1000"
                        class="text-lg md:text-2xl font-medium tracking-[0.2em] opacity-90 uppercase mb-2">
                        Himpunan Mahasiswa
                    </p>

                    <h1 data-aos="zoom-out-up" data-aos-duration="1200"
                        class="text-4xl md:text-6xl lg:text-7xl font-black tracking-tighter drop-shadow-2xl uppercase">
                        Sistem Informasi
                    </h1>

                    <h1 data-aos="zoom-out-up" data-aos-duration="1500"
                        class="text-4xl md:text-6xl lg:text-7xl font-black tracking-tighter mt-1 bg-gradient-to-r from-green-600 to-emerald-700 bg-clip-text text-transparent drop-shadow-sm uppercase">
                        UBSI Sukabumi
                    </h1>
                </div>

                {{-- Deskripsi --}}
                <div class="max-w-4xl text-white/90 mt-10 md:text-lg text-lg font-light leading-relaxed drop-shadow-md">
                    <p data-aos="fade-up" data-aos-duration="2000">
                        Wadah kolaborasi, inovasi, dan pengembangan diri bagi mahasiswa Sistem Informasi
                        untuk tumbuh sebagai insan akademis yang <span class="font-semibold text-white">kritis, kreatif, dan
                            berdaya saing</span>
                        di era transformasi digital.
                    </p>
                </div>

                {{-- Action Buttons --}}
                <div class="mt-12 flex flex-wrap md:justify-center gap-4" data-aos="fade-up" data-aos-duration="2500">
                    <a href="#about"
                        class="btn btn-lg bg-white text-green-800 hover:bg-green-50 border-none rounded-2xl px-8 shadow-xl transition-all hover:scale-105 active:scale-95">
                        Mulai Jelajah
                    </a>
                    <a href="{{ route('recruitment') }}"
                        class="btn btn-lg bg-transparent border-2 hidden md:flex md:items-center border-white/30 text-white hover:bg-white/10 backdrop-blur-sm rounded-2xl px-8 transition-all hover:border-white">
                        Gabung Sekarang
                    </a>
                </div>

            </div>
        </div>

        {{-- Indikator Scroll Down --}}
        <a href="#about" class="cursor-pointer">
            <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce text-white/50 block">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
                </svg>
            </div>
        </a>
    </div>

    {{-- about --}}
    <section id="about" class="xl:px-60 px-6 xl:pt-36 py-20 bg-white relative overflow-hidden">
        {{-- Aksen Dekoratif Latar Belakang --}}
        <div class="absolute top-0 right-0 w-64 h-64 bg-green-50 rounded-full blur-3xl -z-10 opacity-60"></div>

        <div class="xl:flex gap-24 items-center">
            {{-- Sisi Kiri: Gambar/Logo dengan Frame Modern --}}
            <div class="relative xl:w-1/2 group" data-aos="fade-right" data-aos-duration="1200">
                {{-- Background Shadow/Frame Dekoratif --}}
                <div
                    class="absolute -inset-4 bg-green-100/50 rounded-[2rem] scale-95 group-hover:scale-100 transition-transform duration-500 -z-10">
                </div>

                <img src="{{ asset('storage/' . $organization->logo) }}"
                    class="w-full xl:h-[500px] h-72 rounded-[1.5rem] object-cover shadow-2xl transition-all duration-500 group-hover:rotate-1"
                    alt="Logo {{ $organization->name }}">

                {{-- Badge Tahun/Angkatan (Opsional, contoh estetik) --}}
                <div class="absolute -bottom-6 -right-6 bg-green-700 text-white p-6 rounded-2xl shadow-xl hidden xl:block">
                    <p class="text-xs uppercase tracking-widest opacity-80">Est.</p>
                    <p class="text-2xl font-bold">2026</p>
                </div>
            </div>

            {{-- Sisi Kanan: Konten Teks --}}
            <div class="xl:w-1/2 mt-12 xl:mt-0">
                <div class="space-y-6">
                    {{-- Sub-heading --}}
                    <div class="flex items-center gap-3" data-aos="fade-up" data-aos-duration="1000">
                        <div class="w-12 h-[2px] bg-green-700"></div>
                        <h2 class="text-green-700 font-bold tracking-[0.2em] text-sm uppercase">Tentang Kami</h2>
                    </div>

                    {{-- Heading Utama --}}
                    <div class="xl:text-6xl text-4xl font-black text-gray-900 leading-tight" data-aos="fade-up"
                        data-aos-duration="1300">
                        <h1>Periode <br>
                            <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-500">
                                {{ $organization->name }}
                            </span>
                        </h1>
                    </div>

                    {{-- Deskripsi/About --}}
                    <div class="prose prose-lg text-gray-600 leading-relaxed text-justify" data-aos="fade-up"
                        data-aos-duration="1600">
                        <div class="xl:line-clamp-6 line-clamp-none">
                            {!! $organization->about !!}

                        </div>
                    </div>

                    {{-- Button dengan Efek Hover Modern --}}
                    <div class="pt-6" data-aos="fade-up" data-aos-duration="1900">
                        <a href="{{ route('about') }}"
                            class="group relative inline-flex items-center gap-3 px-8 py-4 bg-green-700 text-white font-bold rounded-xl overflow-hidden transition-all hover:bg-green-800 hover:shadow-green-200 hover:shadow-2xl">
                            <span>Selengkapnya</span>
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 transition-transform group-hover:translate-x-1" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- department --}}
    <img src="/assets/svg/wave-bottom.svg" alt="" class="w-full -mb-1 relative z-10">
    <section class="relative bg-gradient-to-b from-green-700 to-green-900 xl:px-60 px-6 pt-24 pb-40 overflow-hidden">
        {{-- Eleman Dekoratif Latar Belakang (Soft Glow) --}}
        <div class="absolute top-1/4 left-0 w-96 h-96 bg-white/5 rounded-full blur-[120px] -z-0"></div>
        <div class="absolute bottom-1/4 right-0 w-96 h-96 bg-emerald-400/10 rounded-full blur-[120px] -z-0"></div>

        <div class="relative z-10">
            <div class="xl:text-center mb-20">
                <h2 class="text-green-300 font-bold tracking-[0.3em] text-sm uppercase mb-4" data-aos="fade-up">Struktur
                    Organisasi</h2>
                <h1 class="xl:text-7xl text-4xl font-black text-white tracking-tighter" data-aos="fade-up"
                    data-aos-duration="1000">
                    Departemen Kami
                </h1>
                <p class="text-green-100/80 text-justify md:text-center mt-6 max-w-2xl mx-auto xl:text-lg font-light leading-relaxed"
                    data-aos="fade-up" data-aos-duration="1200">
                    Bersinergi membangun mahasiswa Sistem Informasi yang <span class="text-white font-medium">aktif,
                        kreatif, dan berdaya saing</span> melalui kolaborasi antar departemen.
                </p>
            </div>

            <div class="grid xl:grid-cols-3 grid-cols-1 gap-6 xl:gap-12">
                @foreach ($departmentList as $item)
                    <a href="{{ route('department', $item->id) }}" class="group relative block" data-aos="fade-up"
                        data-aos-duration="{{ 1000 + $loop->index * 200 }}">
                        {{-- Glow Effect --}}
                        <div
                            class="absolute -inset-1 bg-gradient-to-r from-green-400 to-emerald-400 rounded-3xl blur opacity-0 group-hover:opacity-30 transition duration-500">
                        </div>

                        {{-- Kartu Utama --}}
                        <div
                            class="relative bg-white/10 backdrop-blur-xl border border-white/20 rounded-3xl p-10 h-64 xl:h-72 flex flex-col items-center justify-center gap-6 hover:-translate-y-3 transition-all duration-500 shadow-2xl">

                            {{-- Logo Container --}}
                            <div class="relative">
                                <div
                                    class="absolute inset-0 bg-white/20 blur-2xl rounded-full scale-0 group-hover:scale-150 transition-transform duration-700">
                                </div>
                                <img src="{{ asset('storage/' . $item->logo) }}"
                                    class="w-24 xl:w-32 relative z-10 group-hover:scale-110 transition-transform duration-500 drop-shadow-2xl"
                                    alt="{{ $item->name }}">
                            </div>

                            <div class="text-center">
                                <span
                                    class="text-white font-bold text-sm xl:text-base tracking-wider uppercase opacity-80 group-hover:opacity-100 transition-opacity">
                                    {{ $item->name }}
                                </span>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- program --}}
    <div class="min-h-screen xl:px-60 px-6 py-32 bg-gray-50/50">
        <div class="flex justify-center mb-16">
            <div class="md:text-center max-w-3xl">
                {{-- Sub-heading --}}
                <div class="flex justify-center items-center gap-3 mb-4" data-aos="fade-up">
                    <div class="w-8 h-[2px] bg-green-700"></div>
                    <span class="text-green-700 font-bold tracking-widest text-xs uppercase">Aktivitas & Kerja Nyata</span>
                    <div class="w-8 h-[2px] bg-green-700"></div>
                </div>

                <h1 data-aos="fade-up" data-aos-duration="1000"
                    class="xl:text-7xl text-4xl font-black text-gray-900 tracking-tighter">
                    Program Kami
                </h1>
                <p class="mt-6 text-gray-500 xl:text-lg leading-relaxed" data-aos="fade-up" data-aos-duration="1200">
                    Melalui program kerja, HIMASI hadir mendampingi mahasiswa Sistem Informasi
                    dalam bertumbuh, belajar, dan berkontribusi secara nyata.
                </p>
            </div>
        </div>

        <div class="grid xl:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-8 xl:gap-12">
            @foreach ($program as $item)
                {{-- Ganti 'program.show' dengan nama route detail program kamu --}}
                <a href="{{ route('program.show', $item->id) }}" class="block h-full">
                    <div
                        class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 h-full flex flex-col">

                        {{-- Image --}}
                        <div class="relative h-64 overflow-hidden">
                            <img src="{{ $item->photo ? asset('storage/' . $item->photo) : 'https://placehold.co/200x400?text=' . urlencode($item->name) }}"
                                alt="{{ $item->name }}"
                                class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                            {{-- Floating Badge --}}
                            <div class="absolute top-6 left-6">
                                <span
                                    class="px-4 py-2 bg-white/90 backdrop-blur-md text-green-800 text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg">
                                    {{ Str::limit($item->department->name, 10, '...') }}
                                </span>
                            </div>
                        </div>

                        {{-- Card Body --}}
                        <div class="p-8 flex flex-col flex-grow space-y-4">
                            <h2
                                class="text-2xl font-black text-gray-800 group-hover:text-green-700 transition-colors line-clamp-2 leading-tight">
                                {{ $item->name }}
                            </h2>

                            <div class="text-gray-500 text-sm leading-relaxed line-clamp-3 font-light">
                                {!! trim(strip_tags($item->description)) !== ''
                                    ? Str::limit($item->description, 100, '...')
                                    : 'Tidak ada deskripsi untuk program ini.' !!}
                            </div>

                            {{-- Footer Info --}}
                            <div
                                class="mt-auto pt-6 border-t border-gray-50 flex justify-between items-center text-[11px] font-bold uppercase tracking-wider text-gray-400">
                                <div class="flex items-center gap-2">
                                    <span class="text-green-600 text-base">📍</span>
                                    <span class="line-clamp-1">
                                        {!! trim(strip_tags($item->location)) !== '' ? Str::limit($item->location, 30, '...') : '-' !!}
                                    </span>
                                </div>
                                <div class="flex items-center gap-2 whitespace-nowrap">
                                    <span class="text-green-600 text-base">📅</span>
                                    {{ $item->date ?? '-' }}
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>

        {{-- Footer Button --}}
        <div class="flex justify-center mt-20">
            <a href="{{ route('program') }}"
                class="group px-10 py-5 bg-green-700 text-white rounded-2xl font-bold shadow-xl shadow-green-200 hover:bg-green-800 transition-all hover:scale-105 active:scale-95 flex items-center gap-3"
                data-aos="zoom-in">
                <span>Lihat Semua Program</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:translate-x-1 transition-transform"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>

    {{-- galeri --}}
    <div class="min-h-screen xl:px-60 px-6 py-32 bg-gray-100">
        <div class="flex flex-col md:items-center items-start mb-20">
            {{-- Badge --}}
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 border border-green-100 text-green-700 text-xs font-bold uppercase tracking-widest mb-4"
                data-aos="fade-up">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-green-400 opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-green-500"></span>
                </span>
                Moments
            </div>

            <div class="md:text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000"
                    class="xl:text-7xl text-4xl font-black text-gray-900 tracking-tighter">
                    Galeri HIMASI
                </h1>
                <p class="mt-6 text-gray-500 xl:text-lg leading-relaxed" data-aos="fade-up" data-aos-duration="1200">
                    Abadikan setiap momen berharga dalam perjalanan kami bertumbuh dan berkontribusi bersama mahasiswa
                    Sistem Informasi.
                </p>
            </div>
        </div>

        {{-- Gallery Grid - Modern Bento Style --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 space-y-6" data-aos="fade-up"
            data-aos-duration="1000">
            @foreach ($gallery as $item)
                <div
                    class="relative group overflow-hidden rounded-[2rem] break-inside-avoid shadow-sm hover:shadow-2xl transition-all duration-500">
                    {{-- Image --}}
                    <img src="{{ asset('storage/' . $item->photo) }}"
                        class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110"
                        alt="Gallery Image">

                    {{-- Hover Overlay --}}
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-green-900/80 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-8">
                        <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500">
                            <div
                                class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white mb-3">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <p class="text-white/70 text-xs uppercase tracking-widest font-bold">{{ $item->desc }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    {{-- kotak aspirasi --}}
    <div class="min-h-screen xl:px-60 px-6 py-32 bg-white flex items-center justify-center relative overflow-hidden">

        {{-- Aksen Dekoratif Halus di Background Putih --}}
        <div class="absolute top-1/4 -left-20 w-96 h-96 bg-green-50 rounded-full blur-[100px] opacity-70"></div>
        <div class="absolute bottom-1/4 -right-20 w-96 h-96 bg-emerald-50 rounded-full blur-[100px] opacity-70"></div>

        <div class="w-full max-w-5xl relative z-10">
            <div class="grid xl:grid-cols-2 gap-12 xl:gap-20 items-center">

                {{-- Sisi Kiri: Teks Informasi --}}
                <div class="space-y-8  xl:text-left">
                    <div data-aos="fade-right">
                        <span
                            class="px-4 py-2 rounded-full bg-green-100 text-green-700 text-xs font-bold uppercase tracking-[0.2em]">
                            Suara Mahasiswa
                        </span>
                    </div>

                    <h1 class="xl:text-7xl text-4xl font-black text-gray-900 tracking-tighter leading-tight"
                        data-aos="fade-right" data-aos-duration="1000">
                        Punya Ide <br> <span
                            class="text-green-600 underline decoration-green-200 underline-offset-8">Menarik?</span>
                    </h1>

                    <p class="text-gray-500 xl:text-xl text-lg leading-relaxed font-light" data-aos="fade-right"
                        data-aos-duration="1200">
                        Jangan dipendam sendiri. Sampaikan aspirasimu untuk membangun <span
                            class="font-semibold text-gray-800 text-green-700">HIMASI</span> yang lebih baik. Kami sangat
                        menghargai setiap masukan.
                    </p>

                    <div class="flex flex-wrap justify-center xl:justify-start gap-6 pt-4" data-aos="fade-up"
                        data-aos-duration="1500">
                        <div class="flex items-center gap-3">
                            <div
                                class="w-10 h-10 rounded-full bg-green-50 flex items-center justify-center text-green-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <span class="text-sm font-medium text-gray-600">Anonimitas Terjamin</span>
                        </div>
                    </div>
                </div>

                {{-- Sisi Kanan: Form (Kartu Hijau) --}}
                <div class="relative" data-aos="zoom-in" data-aos-duration="1000">
                    {{-- Efek Bayangan Belakang --}}
                    <div class="absolute inset-0 bg-green-600 rounded-[3rem] rotate-3 scale-105 opacity-10 blur-2xl"></div>

                    {{-- Kartu Utama --}}
                    <div class="relative bg-green-800 rounded-[2.5rem] p-8 xl:p-12 shadow-2xl border border-green-700">
                        <form action="{{ route('aspiration.store') }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="space-y-2">
                                <label class="text-xs font-bold text-green-300 uppercase tracking-widest ml-1">Nama
                                    (Opsional)</label>
                                <input type="text" placeholder="Anonim" name="name"
                                    class="w-full bg-green-900/40 border border-green-700 rounded-2xl px-6 py-4 text-white focus:bg-green-900/60 focus:ring-2 focus:ring-green-400 outline-none transition-all placeholder:text-green-600" />
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold text-green-300 uppercase tracking-widest ml-1">Kategori</label>
                                <div class="relative">
                                    <select name="category"
                                        class="w-full bg-green-900/40 border border-green-700 rounded-2xl px-6 py-4 text-white focus:bg-green-900/60 focus:ring-2 focus:ring-green-400 outline-none appearance-none transition-all cursor-pointer">
                                        <option disabled selected class="text-gray-400">Pilih kategori...</option>
                                        <option value="kritik">Kritik</option>
                                        <option value="saran">Saran</option>
                                        <option value="apresiasi">Apresiasi</option>
                                    </select>
                                    <div
                                        class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-green-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 9l-7 7-7-7" />
                                        </svg>
                                    </div>
                                </div>
                            </div>

                            <div class="space-y-2">
                                <label
                                    class="text-xs font-bold text-green-300 uppercase tracking-widest ml-1">Pesan</label>
                                <textarea placeholder="Tulis pesanmu di sini..." name="message"
                                    class="w-full bg-green-900/40 border border-green-700 rounded-2xl px-6 py-4 text-white focus:bg-green-900/60 focus:ring-2 focus:ring-green-400 outline-none min-h-[140px] resize-none transition-all placeholder:text-green-600"></textarea>
                            </div>

                            <button type="submit"
                                class="w-full bg-white hover:bg-green-50 text-green-900 font-black py-5 rounded-2xl flex items-center justify-center gap-3 transition-all hover:scale-[1.02] active:scale-[0.98] shadow-lg">
                                Kirim Sekarang
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
