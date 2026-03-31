@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="relative min-h-screen bg-white overflow-hidden">
        <div class="absolute top-24 -left-20 w-80 h-80 bg-green-200/50 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 -right-20 w-96 h-96 bg-emerald-200/40 rounded-full blur-3xl"></div>

        <section class="max-w-5xl mx-auto px-4 md:px-6 pt-32 pb-14 relative z-10 space-y-6 md:space-y-8">
            <div class="text-center space-y-3">
                <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/80 border border-green-200 text-green-700 text-xs font-black uppercase tracking-[0.2em] backdrop-blur-sm shadow-sm"
                    data-aos="fade-down">
                    <span class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></span>
                    Sesi Pembelajaran
                </div>

                <h1 class="text-2xl md:text-4xl font-black text-gray-900 tracking-tight">
                    {{ $lesson->course->title }}
                </h1>
                <p class="text-sm md:text-base text-gray-500">
                    Materi Ke-{{ $currentLessonNumber }} dari {{ $totalLessons }} materi
                </p>
            </div>

            <div class="rounded-3xl overflow-hidden border border-green-100 bg-black shadow-xl shadow-green-100/70">
                <img src="{{ $lesson->course->thumbnail ? asset('storage/' . $lesson->course->thumbnail) : 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f' }}"
                    class="w-full h-65 md:h-110 object-cover" alt="Lesson Thumbnail">
            </div>

            <div class="text-center space-y-2">
                <h2 class="text-2xl md:text-3xl font-black text-gray-900 tracking-tight leading-snug">
                    {{ $lesson->title }}
                </h2>
            </div>

            @if (!empty($lesson->url_video))
                <div class="rounded-3xl overflow-hidden border border-green-100 bg-black shadow-xl shadow-green-100/70">
                    <iframe class="w-full h-65 md:h-110" src="{{ $lesson->url_video }}" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                    </iframe>
                </div>
            @endif

            <div
                class="bg-white border border-green-100 rounded-3xl p-6 md:p-8 shadow-[0_20px_60px_-35px_rgba(22,101,52,0.5)] text-gray-700 leading-relaxed space-y-4">
                <div class="prose prose-lg prose-slate max-w-none">
                    {!! $lesson->content !!}
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-2">
                @if ($prevLesson)
                    <a href="{{ route('courses.lesson', [$course->id, $prevLesson->id]) }}"
                        class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-green-200 bg-white hover:bg-green-700 hover:text-white hover:border-green-700 text-gray-800 font-bold transition-all duration-300">
                        ← Sebelumnya
                    </a>
                @else
                    <button disabled
                        class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-gray-200 text-gray-400 bg-gray-50 cursor-not-allowed font-semibold">
                        ← Sebelumnya
                    </button>
                @endif

                @if ($nextLesson)
                    <a href="{{ route('courses.lesson', [$course->id, $nextLesson->id]) }}"
                        class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-green-200 bg-white hover:bg-green-700 hover:text-white hover:border-green-700 text-gray-800 font-bold transition-all duration-300">
                        Selanjutnya →
                    </a>
                @else
                    <button disabled
                        class="inline-flex items-center justify-center px-5 py-3 rounded-xl border border-gray-200 text-gray-400 bg-gray-50 cursor-not-allowed font-semibold">
                        Selanjutnya →
                    </button>
                @endif
            </div>
        </section>
    </main>

    @include('components.footer')
@endsection
