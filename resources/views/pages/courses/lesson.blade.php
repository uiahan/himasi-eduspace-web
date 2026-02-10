@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="max-w-4xl mx-auto px-4 py-10 mt-20 space-y-6">

        <!-- Lesson Title -->
        <div class="text-center space-y-2">
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                Web Development Boot Camp
            </h1>
        </div>

        <!--  Thumbnail -->
        <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black">
            <img src="https://images.unsplash.com/photo-1527430253228-e93688616381?q=80&w=1600"
                class="w-full h-[420px] object-cover" alt="Lesson Thumbnail">
        </div>

        <!-- Lesson Title -->
        <div class="text-center space-y-2">
            <p class="text-sm text-gray-500">Lesson 3 dari 12</p>
            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                Wireframing Fundamentals
            </h1>
        </div>
        <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black">
            <iframe class="w-full h-[420px]" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
        </div>

        <!-- Lesson Content -->
        <div class="bg-white border border-gray-200 rounded-xl p-6 shadow-sm text-gray-700 leading-relaxed space-y-4">

            <p>
                In this lesson, you will learn the basics of wireframing and how to structure
                layouts before moving to high-fidelity UI designs.
            </p>

            <ul class="list-disc ml-5 space-y-2">
                <li>Understanding wireframes</li>
                <li>Low-fidelity vs high-fidelity</li>
                <li>Best tools for wireframing</li>
            </ul>

        </div>

        <!-- Navigation Buttons -->
        <div class="flex flex-col md:flex-row justify-between items-center pt-4 space-y-4 md:space-y-0">

            <button
                class="px-5 py-2 rounded-lg border border-gray-300 hover:bg-green-700 hover:text-white font-semibold transition w-full md:w-auto">
                ← Sebelumnya
            </button>

            <button
                class="px-5 py-2 rounded-lg border bg-green-600 hover:bg-green-700 text-white font-semibold transition w-full md:w-auto">
                selesai bagian ini
            </button>

            <button
                class="px-5 py-2 rounded-lg border border-gray-300 hover:bg-green-700 hover:text-white font-semibold transition w-full md:w-auto">
                Selanjutnya →
            </button>

        </div>

    </main>

    @include('components.footer')
@endsection
