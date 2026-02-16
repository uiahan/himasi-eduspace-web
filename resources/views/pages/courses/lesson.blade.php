@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="max-w-4xl mx-auto px-4 py-10 mt-20 space-y-6">

        <!-- Lesson Title -->
        <div class="text-center space-y-2">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                {{ $lesson->course->title }}
            </h1>
        </div>

        <!--  Thumbnail -->
        <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black">
            <img src="{{ asset('storage/' . $lesson->course->thumbnail) }}" class="w-full h-[420px] object-cover"
                alt="Lesson Thumbnail">
        </div>

        <!-- Lesson Title -->
        <div class="text-center space-y-2">
            <p class="text-sm text-gray-500">Materi Ke-{{ $currentLessonNumber }} dari {{ $totalLessons }} materi</p>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                {{ $lesson->title }}
            </h1>
        </div>
        @if (!empty($lesson->url_video))
            <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black">
                <iframe class="w-full h-[420px]" src="{{ $lesson->url_video }}" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
            </div>
        @endif

        <!-- Lesson Content -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm text-gray-700 leading-relaxed space-y-4">

            <div class="prose prose-lg prose-slate max-w-none">
                {!! $lesson->content !!}

            </div>

        </div>

        <div class="flex flex-col md:flex-row justify-between items-center pt-4 space-y-4 md:space-y-0">

            {{-- Prev --}}
            @if ($prevLesson)
                <a href="{{ route('courses.lesson', [$course->slug, $prevLesson->slug]) }}"
                    class="px-5 py-2 rounded-lg border border-gray-300 hover:bg-green-700 hover:text-white font-semibold transition w-full md:w-auto">
                    ← Sebelumnya
                </a>
            @else
                <button disabled class="px-5 py-2 rounded-lg border border-gray-200 text-gray-400 w-full md:w-auto">
                    ← Sebelumnya
                </button>
            @endif

            {{-- Next --}}
            @if ($nextLesson)
                <a href="{{ route('courses.lesson', [$course->slug, $nextLesson->slug]) }}"
                    class="px-5 py-2 rounded-lg border border-gray-300 hover:bg-green-700 hover:text-white font-semibold transition w-full md:w-auto">
                    Selanjutnya →
                </a>
            @else
                <button disabled class="px-5 py-2 rounded-lg border border-gray-200 text-gray-400 w-full md:w-auto">
                    Selanjutnya →
                </button>
            @endif

        </div>

    </main>

    @include('components.footer')
@endsection
