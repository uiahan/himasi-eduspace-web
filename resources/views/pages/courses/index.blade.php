@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="min-h-screen">
        <section class="container mx-auto py-10">
            <section class="max-w-7xl mx-auto px-6 py-12">

                {{-- Header with Search --}}
                <div class="my-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Kursus Unggulan</h2>
                        <p class="text-gray-500 text-sm">Jalur pembelajaran paling populer saat ini.</p>
                    </div>

                    {{-- Search --}}
                    <form action="" method="GET" class="flex gap-2">
                        <div class="relative">
                            <input type="text" name="search" value="{{ request('search') }}"
                                placeholder="Cari kursus..."
                                class="w-full md:w-64 pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:ring-2 focus:ring-green-500 focus:border-green-500 outline-none transition">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 text-gray-400 absolute left-3 top-1/2 -translate-y-1/2" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                            </svg>
                        </div>
                        <button type="submit"
                            class="bg-green-600 hover:bg-green-700 text-white font-medium py-2.5 px-6 rounded-lg transition">
                            Cari
                        </button>
                    </form>
                </div>



                {{-- Course Cards --}}
                <div class="grid md:grid-cols-3 gap-6">
                    @forelse ($courses as $course)
                        <div
                            class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden flex flex-col">

                            <img src="{{ asset('storage/' . $course->thumbnail) ?? 'https://images.unsplash.com/photo-1517433456452-f9633a875f6f' }}"
                                alt="{{ $course->title }}" class="h-50 w-full object-cover opacity-90">

                            <div class="p-5 flex flex-col h-full">
                                <p class="text-gray-600 text-xs mb-2 font-medium"> <svg xmlns="http://www.w3.org/2000/svg"
                                        class="h-4 w-4 inline-block mr-1" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg> {{ $course->lessons_count }} Materi </p>

                                <h3 class="font-medium text-gray-800 text-lg mb-2">
                                    {{ $course->title }}
                                </h3>

                                <div class="text-gray-500 text-sm mb-4">
                                    {!! Str::limit($course->description, 50) !!}
                                </div>

                                <!-- BUTTON pinned to bottom -->
                                <a href="{{ route('courses.show', $course->id) }}"
                                    class="mt-auto block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2.5 rounded-lg transition">
                                    Masuk Kursus
                                </a>
                            </div>
                        </div>
                    @empty
                        <div class="col-span-full text-center py-10">
                            <p class="text-gray-500">Tidak ada kursus yang ditemukan.</p>
                        </div>
                    @endforelse

                </div>

                {{-- Pagination --}}
                <div class="mt-8 flex justify-center">
                    {!! $courses->links() !!}
                </div>
            </section>
        </section>
    </main>

    @include('components.footer')
@endsection
