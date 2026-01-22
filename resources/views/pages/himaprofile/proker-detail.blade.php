@extends('layout.layout')
@section('title', $program->name)
@include('components.navbar')

@section('body')
    <div class="xl:px-60 px-6 pt-44 pb-32 bg-white">

        {{-- Hero Header --}}
        <div class="grid lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <div class="space-y-6">
                <div data-aos="fade-right">
                    <span class="px-4 py-2 rounded-xl bg-green-50 text-green-700 text-xs font-black uppercase tracking-[0.2em]">
                        {{ $program->department->name }}
                    </span>
                </div>

                <h1 class="text-4xl lg:text-6xl font-black leading-[1.1] text-gray-900 tracking-tighter" data-aos="fade-up" data-aos-delay="100">
                    {{ $program->name }}
                </h1>

                <div class="flex flex-wrap gap-6 text-gray-500 font-medium" data-aos="fade-up" data-aos-delay="200">
                    <div class="flex items-center gap-2 bg-gray-50 px-4 py-2 rounded-full border border-gray-100">
                        <span class="text-green-600">📍</span> 
                        <span class="text-sm">{!! $program->location !!}</span>
                    </div>
                    <div class="flex items-center gap-2 bg-gray-50 px-4 py-2 rounded-full border border-gray-100">
                        <span class="text-green-600">📅</span> 
                        <span class="text-sm">{{ $program->date }}</span>
                    </div>
                </div>
            </div>

            {{-- Main Image Showcase --}}
            <div class="relative group" data-aos="zoom-in" data-aos-duration="1000">
                <div class="absolute -inset-4 bg-green-100 rounded-[3rem] rotate-3 opacity-50 -z-10 transition-transform group-hover:rotate-1"></div>
                <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white">
                    <img src="{{ asset('storage/' . $program->photo) }}" alt="{{ $program->name }}"
                        class="w-full h-[450px] object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
            </div>
        </div>

        {{-- Divider Gradasi --}}
        <div class="mt-24 mb-24 h-px w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent"></div>

        {{-- Content Area --}}
        <div class="grid lg:grid-cols-3 gap-16 lg:gap-24">

            {{-- Article Body --}}
            <div class="lg:col-span-2 space-y-8" data-aos="fade-up">
                <div class="inline-flex items-center gap-4 mb-4">
                    <div class="w-12 h-1.5 bg-green-700 rounded-full"></div>
                    <h2 class="text-3xl font-black text-gray-900 tracking-tight">
                        Tentang Program
                    </h2>
                </div>

                <article class="prose prose-lg prose-green max-w-none text-gray-600 leading-relaxed text-justify first-letter:text-5xl first-letter:font-black first-letter:text-green-700 first-letter:mr-3 first-letter:float-left">
                    {!! $program->description !!}
                </article>
                
                {{-- Back Button --}}
                <div class="pt-10">
                    <a href="{{ route('program') }}" class="inline-flex items-center gap-3 text-gray-400 hover:text-green-700 font-bold transition-colors group">
                        <span class="text-xl group-hover:-translate-x-2 transition-transform">←</span>
                        Kembali ke Daftar Proker
                    </a>
                </div>
            </div>

            {{-- Sidebar Info Box (Sticky) --}}
            <div class="lg:col-span-1">
                <div class="sticky top-32 space-y-6" data-aos="fade-left">
                    <div class="bg-green-800 rounded-[2.5rem] p-10 shadow-2xl shadow-green-900/20 text-white relative overflow-hidden group">
                        {{-- Decorative Pattern --}}
                        <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                        
                        <h3 class="text-2xl font-black mb-8 relative z-10">Ringkasan <br>Kegiatan</h3>

                        <div class="space-y-6 relative z-10">
                            <div class="pb-4 border-b border-green-700/50">
                                <p class="text-green-300 text-[10px] font-black uppercase tracking-widest mb-1">Penyelenggara</p>
                                <p class="font-bold text-lg">{{ $program->department->name }}</p>
                            </div>

                            <div class="pb-4 border-b border-green-700/50">
                                <p class="text-green-300 text-[10px] font-black uppercase tracking-widest mb-1">Tempat Pelaksanaan</p>
                                <p class="font-bold text-lg leading-snug">{!! $program->location !!}</p>
                            </div>

                            <div>
                                <p class="text-green-300 text-[10px] font-black uppercase tracking-widest mb-1">Waktu</p>
                                <p class="font-bold text-lg">{{ $program->date }}</p>
                            </div>
                        </div>

                        <div class="mt-10 pt-6 border-t border-green-700/50">
                            <div class="flex items-center gap-4">
                                <div class="w-12 h-12 bg-white/10 rounded-xl flex items-center justify-center text-2xl">
                                    ✨
                                </div>
                                <p class="text-xs text-green-100/70 leading-relaxed italic">
                                    Program kerja ini merupakan bagian dari dedikasi departemen {{ $program->department->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    @include('components.footer')
@endsection