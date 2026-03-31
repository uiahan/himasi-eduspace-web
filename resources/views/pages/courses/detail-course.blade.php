@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="relative min-h-screen bg-white overflow-hidden">
        <div class="absolute top-28 -left-20 w-80 h-80 bg-green-200/50 rounded-full blur-3xl"></div>
        <div class="absolute bottom-16 -right-20 w-96 h-96 bg-emerald-200/40 rounded-full blur-3xl"></div>

        <section class="max-w-7xl mx-auto px-4 md:px-6 pt-32 pb-14 relative z-10">
            <div class="mb-8 md:mb-10">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 border border-green-200 text-green-700 text-xs font-black uppercase tracking-[0.2em] backdrop-blur-sm shadow-sm"
                    data-aos="fade-down">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Detail Kursus
                </div>
                <h1 class="mt-4 text-3xl md:text-5xl font-black text-gray-900 tracking-tight leading-tight" data-aos="fade-up"
                    data-aos-duration="900">
                    {{ $course->title }}
                </h1>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
                <section class="lg:col-span-2 space-y-6">
                    <div class="rounded-3xl overflow-hidden border border-green-100 bg-black shadow-xl shadow-green-100/70">
                        <img src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f' }}"
                            class="w-full h-70 md:h-105 object-cover" alt="Course Thumbnail">
                    </div>

                    <div class="bg-white rounded-3xl border border-green-100 shadow-[0_20px_60px_-35px_rgba(22,101,52,0.5)] p-6 md:p-8">
                        <div class="border-b border-green-100 flex gap-6 text-sm font-semibold mb-6">
                            <button class="pb-3 border-b-2 border-green-700 text-green-700">
                                Deskripsi Kursus
                            </button>
                        </div>

                        <div class="prose prose-lg prose-slate max-w-none text-gray-700">
                            {!! $course->description !!}
                        </div>
                    </div>
                </section>

                <aside class="space-y-5">
                    <div class="bg-white rounded-3xl border border-green-100 p-6 sticky top-24 shadow-[0_20px_60px_-35px_rgba(22,101,52,0.5)]">
                        <h3 class="font-black text-gray-900 text-xl mb-4 tracking-tight">
                            Materi Kursus
                        </h3>

                        <div class="space-y-3">
                            @forelse ($course->lessons as $item)
                                <a href="{{ route('courses.lesson', ['course' => $course->id, 'lesson' => $item->id]) }}"
                                    class="group block">
                                    <div
                                        class="flex items-center gap-3 p-3 border border-green-100 rounded-2xl hover:border-green-300 hover:bg-green-50/80 transition-all duration-300">
                                        <span
                                            class="w-8 h-8 flex items-center justify-center rounded-full bg-green-100 text-green-800 font-bold text-sm group-hover:bg-green-700 group-hover:text-white transition">
                                            {{ $loop->iteration }}
                                        </span>

                                        <span class="flex-1 text-sm font-semibold text-gray-700 group-hover:text-gray-900">
                                            {{ $item->title }}
                                        </span>
                                    </div>
                                </a>
                            @empty
                                <p class="text-gray-500 text-sm">Tidak ada materi kursus.</p>
                            @endforelse
                        </div>
                    </div>
                </aside>
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection
