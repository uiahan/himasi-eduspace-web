@extends('layout.layout')
@section('title', $program->name)
@include('components.navbar')

@section('body')
    <div class="xl:px-60 lg:px-12 px-4 pt-20 lg:pt-32 pb-16 lg:pb-32 bg-white">

        {{-- Hero Header --}}
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-20 items-center">
            <div class="space-y-4 lg:space-y-6">
                <div data-aos="fade-right">
                    <span
                        class="inline-block mt-6 px-3 py-1.5 lg:px-4 lg:py-2 rounded-lg lg:rounded-xl bg-green-50 text-green-700 text-[10px] lg:text-xs font-black uppercase tracking-[0.15em] lg:tracking-[0.2em]">
                        {{ $program->department->name }}
                    </span>
                </div>

                <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-black leading-[1.1] text-gray-900 tracking-tighter"
                    data-aos="fade-up" data-aos-delay="100">
                    {{ $program->name }}
                </h1>

                <div class="flex flex-wrap gap-3 lg:gap-6 text-gray-500 font-medium" data-aos="fade-up" data-aos-delay="200">
                    <div
                        class="flex items-center gap-2 bg-gray-50 px-3 py-1.5 lg:px-4 lg:py-2 rounded-full border border-gray-100">
                        <span class="text-green-600 text-sm lg:text-base">📍</span>
                        <span class="text-xs lg:text-sm">{!! trim(strip_tags($program->location)) !== '' ? $program->location : '-' !!}</span>
                    </div>
                    <div
                        class="flex items-center gap-2 bg-gray-50 px-3 py-1.5 lg:px-4 lg:py-2 rounded-full border border-gray-100">
                        <span class="text-green-600 text-sm lg:text-base">📅</span>
                        <span class="text-xs lg:text-sm">{{ $program->date ?? '-' }}</span>
                    </div>
                </div>
            </div>

            {{-- Main Image Showcase --}}
            <div class="relative group" data-aos="zoom-in" data-aos-duration="1000">
                <div
                    class="absolute -inset-2 lg:-inset-4 bg-green-100 rounded-2xl lg:rounded-[3rem] rotate-3 opacity-50 -z-10 transition-transform group-hover:rotate-1">
                </div>
                <div
                    class="rounded-2xl lg:rounded-[2.5rem] overflow-hidden shadow-xl lg:shadow-2xl border-4 lg:border-8 border-white">
                    <img src="{{ $program->photo ? asset('storage/' . $program->photo) : 'https://placehold.co/200x200/?text=' . urlencode($program->name) }}"
                        alt="{{ $program->name }}"
                        class="w-full h-[250px] sm:h-[300px] lg:h-[450px] object-cover transition-transform duration-700 group-hover:scale-110">
                </div>
            </div>
        </div>

        {{-- Divider Gradasi --}}
        <div
            class="mt-12 mb-12 lg:mt-24 lg:mb-24 h-px w-full bg-gradient-to-r from-transparent via-gray-200 to-transparent">
        </div>

        {{-- Content Area --}}
        <div class="grid lg:grid-cols-3 gap-8 lg:gap-16 xl:gap-24">

            {{-- Article Body --}}
            <div class="lg:col-span-2 space-y-6 lg:space-y-8" data-aos="fade-up">
                <div class="inline-flex items-center gap-3 lg:gap-4 mb-4">
                    <div class="w-8 lg:w-12 h-1 lg:h-1.5 bg-green-700 rounded-full"></div>
                    <h2 class="text-2xl lg:text-3xl font-black text-gray-900 tracking-tight">
                        Tentang Program
                    </h2>
                </div>

                <article
                    class="prose prose-sm sm:prose-base lg:prose-lg prose-green max-w-none text-gray-600 leading-relaxed text-left lg:text-justify lg:first-letter:text-5xl lg:first-letter:font-black lg:first-letter:text-green-700 lg:first-letter:mr-3 lg:first-letter:float-left">
                    {!! trim(strip_tags($program->description)) !== ''
                        ? $program->description
                        : 'Tidak ada deskripsi untuk program ini.' !!}
                </article>

                {{-- Back Button --}}
                <div class="pt-6 lg:pt-10">
                    <a href="{{ route('program') }}"
                        class="inline-flex items-center gap-2 lg:gap-3 text-gray-400 hover:text-green-700 font-bold transition-colors group text-sm lg:text-base">
                        <span class="text-lg lg:text-xl group-hover:-translate-x-2 transition-transform">←</span>
                        Kembali ke Daftar Proker
                    </a>
                </div>
            </div>

            {{-- Sidebar Info Box --}}
            <div class="lg:col-span-1">
                <div class="lg:sticky lg:top-32 space-y-6" data-aos="fade-left">
                    <div
                        class="bg-green-800 rounded-2xl lg:rounded-[2.5rem] p-6 lg:p-10 shadow-xl lg:shadow-2xl shadow-green-900/20 text-white relative overflow-hidden group">
                        {{-- Decorative Pattern --}}
                        <div
                            class="absolute top-0 right-0 w-24 h-24 lg:w-32 lg:h-32 bg-white/5 rounded-full -mr-12 -mt-12 lg:-mr-16 lg:-mt-16 blur-2xl">
                        </div>

                        <h3 class="text-xl lg:text-2xl font-black mb-6 lg:mb-8 relative z-10">Ringkasan <br>Kegiatan</h3>

                        <div class="space-y-4 lg:space-y-6 relative z-10">
                            <div class="pb-3 lg:pb-4 border-b border-green-700/50">
                                <p class="text-green-300 text-[10px] font-black uppercase tracking-widest mb-1">
                                    Penyelenggara</p>
                                <p class="font-bold text-base lg:text-lg">{{ $program->department->name }}</p>
                            </div>

                            <div class="pb-3 lg:pb-4 border-b border-green-700/50">
                                <p class="text-green-300 text-[10px] font-black uppercase tracking-widest mb-1">Tempat
                                    Pelaksanaan</p>
                                <p class="font-bold text-base lg:text-lg leading-snug">{!! trim(strip_tags($program->location)) !== '' ? $program->location : '-' !!}</p>
                            </div>

                            <div>
                                <p class="text-green-300 text-[10px] font-black uppercase tracking-widest mb-1">Waktu</p>
                                <p class="font-bold text-base lg:text-lg">{{ $program->date ?? '-' }}</p>
                            </div>
                        </div>

                        <div class="mt-6 lg:mt-10 pt-4 lg:pt-6 border-t border-green-700/50">
                            <div class="flex items-center gap-3 lg:gap-4">
                                <div
                                    class="w-10 h-10 lg:w-12 lg:h-12 bg-white/10 rounded-lg lg:rounded-xl flex items-center justify-center text-xl lg:text-2xl flex-shrink-0">
                                    ✨
                                </div>
                                <p class="text-xs text-green-100/70 leading-relaxed italic">
                                    Program kerja ini merupakan bagian dari dedikasi departemen
                                    {{ $program->department->name }}
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
