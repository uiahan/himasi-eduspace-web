@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="min-h-screen bg-white overflow-hidden">
        <section class="relative pt-36 pb-16">
            <div class="absolute -top-24 -left-16 w-72 h-72 bg-green-200/50 rounded-full blur-3xl"></div>
            <div class="absolute top-24 -right-20 w-96 h-96 bg-emerald-200/40 rounded-full blur-3xl"></div>

            <div class="max-w-7xl mx-auto px-6 relative z-10">
                <div class="max-w-4xl mx-auto md:text-center text-justify space-y-6 mb-14">
                    <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/70 border border-green-200 text-green-700 text-xs font-black uppercase tracking-[0.2em] backdrop-blur-sm shadow-sm"
                        data-aos="fade-down">
                        <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                        Ayo belajar sekarang
                    </div>
                    <h1 class="text-5xl md:text-7xl font-black text-gray-900 tracking-tighter leading-tight" data-aos="fade-up"
                        data-aos-duration="1000">
                        Kursus <span class="text-transparent bg-clip-text bg-linear-to-r from-green-700 to-emerald-500">HIMASI</span>
                    </h1>
                    <p class="text-gray-600 md:text-lg leading-relaxed" data-aos="fade-up" data-aos-duration="1200">
                        Pilih jalur belajar yang sesuai, kuasai materi langkah demi langkah, dan tingkatkan skill digitalmu bersama HIMASI.
                    </p>
                </div>

                <section class="bg-white rounded-4xl border border-green-100 shadow-[0_20px_60px_-30px_rgba(22,101,52,0.45)] p-6 md:p-8">
                    <div class="mb-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div>
                            <h2 class="text-2xl md:text-3xl font-black text-gray-900 tracking-tight">Kursus Unggulan</h2>
                            <p class="text-gray-500 text-sm md:text-base">Jalur pembelajaran paling populer saat ini.</p>
                        </div>

                        <form action="" method="GET" class="flex flex-col sm:flex-row gap-2 w-full md:w-auto">
                            <div class="relative w-full md:w-72">
                                <input type="text" name="search" value="{{ request('search') }}"
                                    placeholder="Cari kursus..."
                                    class="w-full pl-10 pr-4 py-3 border border-green-200 bg-green-50/40 rounded-xl focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition">
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    class="h-5 w-5 text-green-500 absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                </svg>
                            </div>
                            <button type="submit"
                                class="inline-flex items-center justify-center bg-green-700 hover:bg-green-800 text-white font-bold py-3 px-6 rounded-xl transition-all hover:shadow-lg hover:shadow-green-200">
                                Cari
                            </button>
                        </form>
                    </div>

                    <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6">
                        @forelse ($courses as $course)
                            <div
                                class="group bg-white rounded-3xl border border-green-100 hover:border-green-200 shadow-md hover:shadow-2xl hover:shadow-green-100/80 transition-all duration-300 overflow-hidden flex flex-col">

                                <img src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f' }}"
                                    alt="{{ $course->title }}" class="h-52 w-full object-cover opacity-95 group-hover:scale-[1.02] transition-transform duration-500">

                                <div class="p-5 flex flex-col h-full">
                                    <p class="inline-flex items-center w-fit gap-1.5 text-green-700 text-xs mb-3 font-semibold bg-green-50 border border-green-100 px-2.5 py-1 rounded-full">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                        {{ $course->lessons_count }} Materi
                                    </p>

                                    <h3 class="font-bold text-gray-900 text-xl mb-2 leading-snug">
                                        {{ $course->title }}
                                    </h3>

                                    <div class="text-gray-500 text-sm mb-5 leading-relaxed">
                                        {!! Str::limit($course->description, 80) !!}
                                    </div>

                                    <a href="{{ route('courses.show', $course->id) }}"
                                        class="mt-auto group/btn inline-flex items-center justify-center gap-2 w-full bg-green-700 hover:bg-green-800 text-white text-center font-bold py-3 rounded-xl transition-all hover:shadow-lg hover:shadow-green-200">
                                        Masuk Kursus
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-4 w-4 transition-transform group-hover/btn:translate-x-1" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M17 8l4 4m0 0l-4 4m4-4H3" />
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        @empty
                            <div class="col-span-full">
                                <div class="text-center py-14 border border-dashed border-green-200 rounded-3xl bg-green-50/40">
                                    <p class="text-gray-600 font-medium">Tidak ada kursus yang ditemukan.</p>
                                </div>
                            </div>
                        @endforelse
                    </div>

                    <div class="mt-10 flex justify-center">
                        {!! $courses->links() !!}
                    </div>
                </section>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection
