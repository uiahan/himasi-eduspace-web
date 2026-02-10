@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="max-w-7xl mx-auto px-4 py-10 grid grid-cols-1 lg:grid-cols-3 gap-8 mt-20">

        <!-- LEFT CONTENT -->
        <section class="lg:col-span-2 space-y-6">

            <!-- Thumbnail -->
            <div class="rounded-xl overflow-hidden shadow-sm border border-gray-200 bg-black">
                <img src="https://images.unsplash.com/photo-1527430253228-e93688616381?q=80&w=1600"
                    class="w-full h-[360px] object-cover" alt="Course Thumbnail">
            </div>

            <!-- Title -->
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-900">
                    Mastering UI/UX Design: From Zero to Professional Case Studies
                </h1>
            </div>

            <!-- Tabs -->
            <div class="border-b border-gray-200 flex gap-6 text-sm font-medium">
                <button class="pb-3 border-b-2 border-green-600 text-green-600">
                    Deskripsi Kursus
                </button>
            </div>

            <!-- Deskripsi -->
            <div class="text-gray-700 leading-relaxed space-y-4 bg-white border border-gray-200 rounded-xl p-6 shadow-sm">
                <p>
                    Learn the fundamentals of UI/UX design, wireframing, prototyping using Figma,
                    and building a professional portfolio with real-world projects.
                </p>

                <ul class="list-disc ml-5 space-y-2">
                    <li>Design thinking & UX fundamentals</li>
                    <li>Wireframing & prototyping with Figma</li>
                    <li>Usability testing & case studies</li>
                    <li>Build a real portfolio</li>
                </ul>
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

                    <a href="#"
                        class="block flex items-center gap-3 p-3 border border-gray-200 rounded-lg 
                      hover:border-green-500 hover:bg-green-50 transition">

                        <span
                            class="w-7 h-7 flex items-center justify-center rounded-full bg-gray-100 font-semibold text-sm text-gray-700">
                            2
                        </span>

                        <span class="flex-1 text-sm font-medium text-gray-700">
                            Design Fundamentals
                        </span>

                    </a>

                </div>

            </div>

        </aside>
    </main>

    @include('components.footer')
@endsection
