@extends('layout.layout')

@section('title', 'Beranda')

@include('components.navbar')

@section('body')
    <main class="min-h-screen">
        <section class="container mx-auto py-10">
            <section class="max-w-7xl mx-auto px-6 py-12">
                {{-- Welcome Message
                @auth
                    <div class="bg-green-50 border border-green-200 rounded-lg p-4 my-6 flex justify-between items-center">
                        <p class="text-green-800">
                            👋 Selamat datang, <span class="font-semibold">{{ Auth::user()->name }}</span>!
                        </p>
                        <a href="{{ route('logout') }}"
                            class="bg-red-600 hover:bg-red-700 text-white font-medium py-2 px-4 rounded-lg transition inline-flex items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Logout
                        </a>
                    </div>
                @endauth
                @guest
                    <div
                        class="bg-amber-50 border border-amber-200 rounded-xl p-6 my-6 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                        <div class="flex items-start gap-3">
                            <div class="bg-amber-100 p-2 rounded-full">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-amber-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </div>
                            <div>
                                <h4 class="font-semibold text-amber-800">Akses Terbatas</h4>
                                <p class="text-amber-700 text-sm">Login untuk mengakses kursus dan fitur pembelajaran lainnya.
                                </p>
                            </div>
                        </div>
                        <a href="{{ route('login') }}"
                            class="inline-flex items-center justify-center gap-2 bg-green-600 hover:bg-green-700 text-white font-medium py-2.5 px-6 rounded-lg transition shrink-0">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                            </svg>
                            Login Sekarang
                        </a>
                    </div>
                @endguest --}}

                {{-- Header with Search --}}
                <div class="my-8 flex flex-col md:flex-row md:items-center md:justify-between gap-4">
                    <div>
                        <h2 class="text-2xl font-bold text-gray-900">Kursus Unggulan</h2>
                        <p class="text-gray-500 text-sm">Jalur pembelajaran paling populer saat ini.</p>
                    </div>

                    {{-- Search --}}
                    <form action="" method="GET" class="flex gap-2">
                        <div class="relative">
                            <input type="text" name="search" value="" placeholder="Cari kursus..."
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
                    {{-- Card 1 --}}
                    <div
                        class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f" alt="Web Development"
                            class="h-40 w-full object-cover opacity-90">

                        <div class="p-5">
                            <p class="text-gray-600 text-xs mb-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                12 Materi
                            </p>

                            <h3 class="font-medium text-gray-800 text-lg mb-2">Web Development Boot Camp</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                Master React, Node, and MongoDB with hands-on projects.
                            </p>

                            <a href="#"
                                class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-lg transition">
                                Masuk Kursus
                            </a>
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div
                        class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f" alt="Web Development"
                            class="h-40 w-full object-cover opacity-90">

                        <div class="p-5">
                            <p class="text-gray-600 text-xs mb-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                12 Materi
                            </p>

                            <h3 class="font-medium text-gray-800 text-lg mb-2">Web Development Boot Camp</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                Master React, Node, and MongoDB with hands-on projects.
                            </p>

                            <a href="#"
                                class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-lg transition">
                                Masuk Kursus
                            </a>
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div
                        class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f" alt="Web Development"
                            class="h-40 w-full object-cover opacity-90">

                        <div class="p-5">
                            <p class="text-gray-600 text-xs mb-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                12 Materi
                            </p>

                            <h3 class="font-medium text-gray-800 text-lg mb-2">Web Development Boot Camp</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                Master React, Node, and MongoDB with hands-on projects.
                            </p>

                            <a href="#"
                                class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-lg transition">
                                Masuk Kursus
                            </a>
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div
                        class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f" alt="Web Development"
                            class="h-40 w-full object-cover opacity-90">

                        <div class="p-5">
                            <p class="text-gray-600 text-xs mb-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                12 Materi
                            </p>

                            <h3 class="font-medium text-gray-800 text-lg mb-2">Web Development Boot Camp</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                Master React, Node, and MongoDB with hands-on projects.
                            </p>

                            <a href="#"
                                class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-lg transition">
                                Masuk Kursus
                            </a>
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div
                        class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f" alt="Web Development"
                            class="h-40 w-full object-cover opacity-90">

                        <div class="p-5">
                            <p class="text-gray-600 text-xs mb-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                12 Materi
                            </p>

                            <h3 class="font-medium text-gray-800 text-lg mb-2">Web Development Boot Camp</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                Master React, Node, and MongoDB with hands-on projects.
                            </p>

                            <a href="#"
                                class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-lg transition">
                                Masuk Kursus
                            </a>
                        </div>
                    </div>
                    {{-- Card 1 --}}
                    <div
                        class="bg-gray-50 rounded-xl border border-gray-200 hover:border-gray-300 shadow-md hover:shadow-lg transition overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517433456452-f9633a875f6f" alt="Web Development"
                            class="h-40 w-full object-cover opacity-90">

                        <div class="p-5">
                            <p class="text-gray-600 text-xs mb-2 font-medium">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                12 Materi
                            </p>

                            <h3 class="font-medium text-gray-800 text-lg mb-2">Web Development Boot Camp</h3>
                            <p class="text-gray-500 text-sm mb-4">
                                Master React, Node, and MongoDB with hands-on projects.
                            </p>

                            <a href="#"
                                class="block w-full bg-green-600 hover:bg-green-700 text-white text-center font-medium py-2 px-4 rounded-lg transition">
                                Masuk Kursus
                            </a>
                        </div>
                    </div>

                </div>

                {{-- Pagination --}}
                <div class="mt-8 flex justify-center">
                    <nav class="flex items-center gap-1">
                        <a href="#"
                            class="px-3 py-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 19l-7-7 7-7" />
                            </svg>
                        </a>
                        <a href="#" class="px-4 py-2 bg-green-600 text-white font-medium rounded-lg">1</a>
                        <a href="#" class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">2</a>
                        <a href="#" class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">3</a>
                        <span class="px-2 text-gray-500">...</span>
                        <a href="#" class="px-4 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition">10</a>
                        <a href="#"
                            class="px-3 py-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                            </svg>
                        </a>
                    </nav>
                </div>
            </section>
        </section>
    </main>

    @include('components.footer')
@endsection
