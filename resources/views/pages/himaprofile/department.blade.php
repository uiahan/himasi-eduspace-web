@extends('layout.layout')
@section('title', 'Departemen {{ $department->name }}')
@include('components.navbar')

@section('body')

    {{-- Hero Section Departemen --}}
    <section class="relative xl:px-60 px-6 pb-32 pt-44 bg-white overflow-hidden">
        {{-- Background Glow --}}
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-green-50 rounded-full blur-[120px] -z-10 opacity-60"></div>
        
        <div class="flex flex-col-reverse lg:flex-row gap-16 lg:gap-24 items-center justify-between">
            <div class="w-full lg:w-3/5 space-y-8">
                <div class="space-y-4">
                    <div class="flex items-center gap-3" data-aos="fade-right">
                        <div class="w-12 h-[2px] bg-green-700"></div>
                        <h2 class="text-green-700 font-bold tracking-[0.2em] text-xs uppercase">Struktur Organisasi</h2>
                    </div>
                    
                    <h1 class="text-4xl lg:text-7xl font-black text-gray-900 leading-tight tracking-tighter" data-aos="fade-right" data-aos-duration="1000">
                        Departemen <br>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-500">
                            {{ $department->name }}
                        </span>
                    </h1>
                </div>

                <div class="prose prose-lg text-gray-600 leading-relaxed text-justify max-w-none" data-aos="fade-up" data-aos-duration="1200">
                    {!! $department->about !!}
                </div>
            </div>

            <div class="w-full lg:w-2/5 flex justify-center lg:justify-end" data-aos="zoom-in" data-aos-duration="1000">
                <div class="relative group">
                    <div class="absolute -inset-6 bg-green-100 rounded-[3rem] rotate-6 scale-95 group-hover:rotate-3 transition-transform duration-500 -z-10 opacity-50"></div>
                    <div class="bg-white p-10 rounded-[2.5rem] shadow-2xl border border-gray-50 transition-all duration-500 group-hover:-translate-y-2">
                        <img src="{{ asset('storage/' . $department->logo) }}" 
                             alt="{{ $department->name }}"
                             class="w-48 lg:w-64 h-auto object-contain drop-shadow-2xl">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Section: Visi & Misi --}}
    <section class="xl:px-60 px-6 pb-32 bg-gray-50/50 relative">
        <div class="text-center mb-20 space-y-4">
            <h2 class="text-green-700 font-bold tracking-[0.3em] text-xs uppercase" data-aos="fade-up">Arah Gerak</h2>
            <h1 class="xl:text-6xl text-4xl font-black text-gray-900 tracking-tighter" data-aos="fade-up" data-aos-duration="1000">
                Visi & Misi Departemen
            </h1>
        </div>

        <div class="grid xl:grid-cols-2 grid-cols-1 gap-10">
            {{-- Visi --}}
            <div class="group p-12 rounded-[3rem] bg-green-800 text-white shadow-2xl transition-all duration-500 hover:-translate-y-3"
                data-aos="fade-up" data-aos-duration="1200">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 bg-white/20 rounded-xl flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor font-bold">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black tracking-tight">Visi</h3>
                </div>
                <div class="text-green-50/80 leading-relaxed text-lg prose prose-invert">
                    {!! $department->vision !!}
                </div>
            </div>

            {{-- Misi --}}
            <div class="group p-12 rounded-[3rem] bg-white text-gray-800 border border-gray-100 shadow-xl transition-all duration-500 hover:-translate-y-3 hover:shadow-green-900/5"
                data-aos="fade-up" data-aos-duration="1500">
                <div class="flex items-center gap-4 mb-8">
                    <div class="w-12 h-12 bg-green-700 rounded-xl flex items-center justify-center shadow-lg shadow-green-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-3xl font-black tracking-tight text-gray-900">Misi</h3>
                </div>
                <div class="text-gray-500 leading-relaxed text-lg prose">
                    {!! $department->mission !!}
                </div>
            </div>
        </div>
    </section>

    {{-- Staff Section --}}
    <section class="xl:px-60 px-6 pb-32 bg-white">
        <div class="text-center mb-10 space-y-4">
            <h2 class="text-green-700 font-bold tracking-[0.3em] text-xs uppercase" data-aos="fade-up">Professional Team</h2>
            <h1 class="xl:text-6xl text-4xl font-black text-gray-900 tracking-tighter" data-aos="fade-up" data-aos-duration="1000">
                Staff Departemen
            </h1>
        </div>

        @if ($department->staff->count())
            <div class="grid xl:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-10">
                @foreach ($department->staff as $staff)
                    <div class="group relative" data-aos="fade-up" data-aos-duration="{{ 1000 + ($loop->index * 100) }}">
                        <div class="relative bg-white rounded-[2.5rem] overflow-hidden shadow-sm border border-gray-100 transition-all duration-500 group-hover:shadow-2xl group-hover:-translate-y-3">
                            {{-- Photo Container --}}
                            <div class="h-80 overflow-hidden relative">
                                <img src="{{ asset('storage/' . $staff->photo) }}" 
                                     alt="{{ $staff->name }}"
                                     class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                {{-- Overlay Gradient --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-green-900/40 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            </div>

                            {{-- Info --}}
                            <div class="p-8 text-center bg-white relative z-10">
                                <h3 class="text-xl font-bold text-gray-900 transition-colors duration-300 group-hover:text-green-700">
                                    {{ $staff->name }}
                                </h3>
                                <div class="mt-2 inline-block px-4 py-1 rounded-full bg-green-50 text-green-700 text-xs font-bold uppercase tracking-wider">
                                    {{ $staff->position }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center py-20 bg-gray-50 rounded-[3rem] border-2 border-dashed border-gray-200" data-aos="zoom-in">
                <p class="text-gray-400 text-lg italic">Belum ada staff terdaftar di departemen ini.</p>
            </div>
        @endif
    </section>

    @include('components.footer')
@endsection