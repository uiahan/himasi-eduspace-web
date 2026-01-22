@extends('layout.layout')
@section('title', 'Tentang Kami')
@include('components.navbar')

@section('body')

    {{-- Header Section: About --}}
    <section class="relative min-h-[70vh] flex items-center xl:px-60 px-6 pt-32 bg-white overflow-hidden">
        {{-- Aksen Dekoratif --}}
        <div class="absolute top-0 right-0 w-96 h-96 bg-green-50 rounded-full blur-[100px] -z-10 opacity-60"></div>
        
        <div class="xl:flex gap-24 items-center w-full">
            {{-- Bagian Kiri: Visual (Logo/Image) --}}
            <div class="relative xl:w-1/2 group mb-12 xl:mb-0" data-aos="fade-right">
                <div class="absolute -inset-4 bg-green-100/50 rounded-[3rem] scale-95 group-hover:scale-100 transition-all duration-500 -z-10"></div>
                <img src="{{ asset('storage/' . $organization->logo) }}"
                    class="w-full xl:h-[500px] h-80 rounded-[2.5rem] object-cover shadow-2xl transition-transform duration-500 group-hover:rotate-2" 
                    alt="Logo {{ $organization->name }}">
                
                {{-- Floating Badge --}}
                <div class="absolute -bottom-6 -left-6 bg-white p-6 rounded-3xl shadow-xl hidden xl:block border border-gray-100">
                    <p class="text-green-700 font-black text-4xl">100%</p>
                    <p class="text-gray-400 text-xs font-bold uppercase tracking-widest">Dedikasi Mahasiswa</p>
                </div>
            </div>

            {{-- Bagian Kanan: Teks --}}
            <div class="xl:w-1/2 space-y-8">
                <div class="space-y-4">
                    <div class="flex items-center gap-3" data-aos="fade-up">
                        <div class="w-12 h-[2px] bg-green-700"></div>
                        <h2 class="text-green-700 font-bold tracking-[0.2em] text-xs uppercase">Profil Organisasi</h2>
                    </div>
                    
                    <h1 class="xl:text-7xl text-4xl font-black text-gray-900 leading-tight tracking-tighter" data-aos="fade-up" data-aos-duration="1000">
                        Kabinet <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-500">
                            {{ $organization->name }}
                        </span>
                    </h1>
                </div>

                <div class="prose prose-lg text-gray-600 leading-relaxed text-justify" data-aos="fade-up" data-aos-duration="1500">
                    {!! $organization->about !!}
                </div>
            </div>
        </div>
    </section>

    {{-- Divider --}}
    <div class="xl:px-60 px-6 py-10" data-aos="fade-up">
        <div class="bg-gradient-to-r from-transparent via-gray-200 to-transparent h-px w-full"></div>
    </div>

    {{-- Section: Visi & Misi --}}
    <section class="xl:px-60 px-6 pb-32 bg-white relative">
        <div class="text-center mb-10 space-y-4">
            <h2 class="text-green-700 font-bold tracking-[0.3em] text-xs uppercase" data-aos="fade-up">Foundational Goals</h2>
            <h1 class="xl:text-6xl text-4xl font-black text-gray-900 tracking-tighter" data-aos="fade-up" data-aos-duration="1000">
                Arah & Tujuan Kami
            </h1>
            <div class="w-20 h-1.5 bg-green-700 mx-auto rounded-full" data-aos="zoom-in"></div>
        </div>

        <div class="grid xl:grid-cols-2 grid-cols-1 gap-10">
            {{-- Card Visi --}}
            <div class="group relative p-12 rounded-[3rem] bg-green-800 text-white shadow-2xl overflow-hidden transition-all duration-500 hover:-translate-y-4"
                data-aos="fade-up" data-aos-duration="1500">
                {{-- Dekorasi Card --}}
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-white/10 rounded-full blur-3xl group-hover:bg-white/20 transition-colors"></div>
                
                <div class="relative z-10">
                    <div class="w-16 h-16 bg-white/20 backdrop-blur-md rounded-2xl flex items-center justify-center mb-8 shadow-inner">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-4xl font-black mb-6 tracking-tight">Visi</h3>
                    <div class="text-green-50/90 leading-relaxed text-lg prose prose-invert">
                        {!! $organization->vision !!}
                    </div>
                </div>
            </div>

            {{-- Card Misi --}}
            <div class="group relative p-12 rounded-[3rem] bg-white text-gray-800 border border-gray-100 shadow-2xl hover:shadow-green-900/10 overflow-hidden transition-all duration-500 hover:-translate-y-4"
                data-aos="fade-up" data-aos-duration="2000">
                {{-- Dekorasi Card --}}
                <div class="absolute -top-10 -right-10 w-40 h-40 bg-green-50 rounded-full blur-3xl"></div>

                <div class="relative z-10">
                    <div class="w-16 h-16 bg-green-700 rounded-2xl flex items-center justify-center mb-8 shadow-lg shadow-green-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-4xl font-black mb-6 tracking-tight text-gray-900">Misi</h3>
                    <div class="text-gray-500 leading-relaxed text-lg prose">
                        {!! $organization->mission !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')
@endsection