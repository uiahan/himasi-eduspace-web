@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8 mt-20">

        <!-- LEFT CONTENT -->
        <section class="lg:col-span-2 space-y-6">

            <!-- Thumbnail -->
            <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black">
                <img src="{{ asset('storage/' . $course->thumbnail) }}" class="w-full h-[360px] object-cover"
                    alt="Course Thumbnail">
            </div>

            <!-- Title -->
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                    {{ $course->title }}
                </h1>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200 flex gap-6 text-sm font-medium">
                <button class="pb-3 border-b-2 border-green-600 text-green-600">
                    Deskripsi Kursus
                </button>
            </div>

            <!-- Deskripsi -->
            <div class="prose prose-lg prose-slate max-w-none">
                {!! $course->description !!}

            </div>

        </section>

        <!-- RIGHT SIDEBAR -->
        <aside class="space-y-5">

            <div class="bg-white rounded-xl shadow-sm border border-gray-200 p-6 sticky top-24">

                <h3 class="font-semibold text-gray-800 text-lg mb-4">
                    Materi Kursus
                </h3>

                <!-- List Materi -->
                <div class="space-y-3">
                    @forelse ($course->lessons as $item)
                        <a href="{{ route('courses.lesson', ['course' => $course->id, 'lesson' => $item->id]) }}"
                            class="block flex items-center gap-3 p-3 border border-gray-200 rounded-lg 
                                              hover:border-green-500 hover:bg-green-50 transition">

                            <span
                                class="w-7 h-7 flex items-center justify-center rounded-full bg-gray-100 font-semibold text-sm text-gray-700">
                                {{ $loop->iteration }}
                            </span>

                            <span class="flex-1 text-sm font-medium text-gray-700">
                                {{ $item->title }}
                            </span>

                        </a>
                    @empty
                        <p class="text-gray-500 text-sm">Tidak ada materi kursus.</p>
                    @endforelse
                </div>
            </div>
        </aside>
    </main>

    @include('components.footer')
@endsection
