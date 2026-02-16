@extends('layout.layout')
@section('title', 'Galeri')
@include('components.navbar')
@section('body')

    {{-- Header Section --}}
    <div
        class="relative min-h-[60vh] w-full flex items-center justify-center overflow-hidden bg-gradient-to-br from-green-700 via-green-800 to-emerald-900">

        {{-- Decorative Background Elements --}}
        <div class="absolute top-20 -left-10 w-72 h-72 bg-green-500/20 rounded-full blur-3xl"></div>
        <div class="absolute bottom-20 -right-10 w-96 h-96 bg-emerald-500/10 rounded-full blur-3xl"></div>

        <div class="relative z-10 w-full xl:px-60 px-6 text-center">

            {{-- Badge --}}
            <div class="my-10 inline-flex items-center gap-2 px-4 py-2 rounded-full bg-white/10 border border-white/20 backdrop-blur-md text-white text-xs tracking-widest uppercase font-medium shadow-sm"
                data-aos="fade-down" data-aos-duration="1000">
                <span class="w-2 h-2 rounded-full bg-green-400 animate-pulse"></span>
                Moments & Memories
            </div>

            {{-- Main Title --}}
            <h1 data-aos="zoom-out-up" data-aos-duration="1200"
                class="text-5xl md:text-7xl font-black tracking-tighter text-white drop-shadow-2xl mb-6">
                Galeri HIMASI
            </h1>

            {{-- Description --}}
            <p class="text-white/90 text-lg md:text-xl font-light leading-relaxed max-w-3xl mx-auto" data-aos="fade-up"
                data-aos-duration="1500">
                Dokumentasi perjalanan dan momen berharga dalam setiap kegiatan
                <span class="font-semibold text-white">Himpunan Mahasiswa Sistem Informasi</span>
            </p>

        </div>

        {{-- Scroll Indicator --}}
        <div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce text-white/50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
        </div>
    </div>

    {{-- Gallery Section --}}
    <section class="min-h-screen xl:px-60 px-6 py-24 bg-gray-50">

        {{-- Stats or Info Bar (Optional) --}}
        <div class="mb-16 text-center" data-aos="fade-up">
            <div class="inline-flex items-center gap-3 px-6 py-3 bg-white rounded-full shadow-sm border border-gray-100">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-700" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="text-gray-700 font-semibold">
                    {{ $galleries->count() }} Foto Tersimpan
                </span>
            </div>
        </div>

        @if ($galleries->count() > 0)
            {{-- Masonry Gallery Grid - Bento Style --}}
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                @foreach ($galleries as $item)
                    <div class="relative group overflow-hidden rounded-[2rem] break-inside-avoid shadow-sm hover:shadow-2xl transition-all duration-500"
                        data-aos="fade-up" data-aos-duration="{{ 1000 + ($loop->index % 3) * 200 }}">

                        {{-- Image --}}
                        <img src="{{ asset('storage/' . $item->photo) }}"
                            class="w-full h-auto object-cover transition-transform duration-700 group-hover:scale-110"
                            alt="{{ $item->desc ?? 'Gallery Image' }}">

                        {{-- Hover Overlay dengan Info --}}
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-green-900/90 via-green-800/40 to-transparent opacity-0 group-hover:opacity-100 transition-all duration-500 flex items-end p-8">
                            <div class="translate-y-4 group-hover:translate-y-0 transition-transform duration-500 w-full">

                                {{-- Icon --}}
                                <div
                                    class="w-10 h-10 rounded-full bg-white/20 backdrop-blur-md flex items-center justify-center text-white mb-3">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>

                                {{-- Description --}}
                                @if ($item->desc)
                                    <p class="text-white font-medium text-sm leading-relaxed mb-2">
                                        {{ $item->desc }}
                                    </p>
                                @endif

                                {{-- Date --}}
                                <p class="text-white/70 text-xs uppercase tracking-widest font-bold">
                                    {{ $item->created_at->format('d M Y') }}
                                </p>
                            </div>
                        </div>

                        {{-- Quick View Button (Optional) --}}
                        <button
                            onclick="openImageModal('{{ asset('storage/' . $item->photo) }}', '{{ $item->desc ?? '' }}')"
                            class="absolute top-4 right-4 w-10 h-10 rounded-full bg-white/90 backdrop-blur-md flex items-center justify-center text-green-700 opacity-0 group-hover:opacity-100 transition-all duration-300 hover:scale-110 hover:bg-white shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
                            </svg>
                        </button>
                    </div>
                @endforeach
            </div>
        @else
            {{-- Empty State --}}
            <div class="flex flex-col items-center justify-center py-20 text-center" data-aos="fade-up">
                <div class="w-32 h-32 rounded-full bg-gray-100 flex items-center justify-center mb-6">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-16 w-16 text-gray-400" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Belum Ada Galeri</h3>
                <p class="text-gray-500 max-w-md">
                    Galeri dokumentasi kegiatan HIMASI akan segera hadir di sini.
                </p>
            </div>
        @endif

    </section>

    {{-- Image Modal for Full View --}}
    <div id="imageModal" class="fixed inset-0 bg-black/95 backdrop-blur-sm z-50 hidden items-center justify-center p-4"
        onclick="closeImageModal()">
        <div class="relative max-w-7xl w-full" onclick="event.stopPropagation()">

            {{-- Close Button --}}
            <button onclick="closeImageModal()"
                class="absolute -top-12 right-0 w-10 h-10 rounded-full bg-white/10 backdrop-blur-md flex items-center justify-center text-white hover:bg-white/20 transition-all">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            {{-- Image --}}
            <img id="modalImage" src="" alt=""
                class="w-full h-auto max-h-[85vh] object-contain rounded-2xl shadow-2xl">

            {{-- Description --}}
            <div id="modalDesc" class="mt-4 text-center text-white/80 text-sm"></div>
        </div>
    </div>

    {{-- Back to Top Button --}}
    <button id="backToTop"
        class="fixed bottom-8 right-8 w-14 h-14 rounded-full bg-green-700 text-white shadow-2xl shadow-green-900/30 flex items-center justify-center opacity-0 invisible transition-all duration-300 hover:bg-green-800 hover:scale-110 z-40"
        onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18" />
        </svg>
    </button>

    @include('components.footer')

    {{-- JavaScript for Modal and Back to Top --}}
    <script>
        // Image Modal Functions
        function openImageModal(imageSrc, description) {
            const modal = document.getElementById('imageModal');
            const modalImage = document.getElementById('modalImage');
            const modalDesc = document.getElementById('modalDesc');

            modalImage.src = imageSrc;
            modalDesc.textContent = description || '';
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden';
        }

        function closeImageModal() {
            const modal = document.getElementById('imageModal');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto';
        }

        // Close modal with Escape key
        document.addEventListener('keydown', function(event) {
            if (event.key === 'Escape') {
                closeImageModal();
            }
        });

        // Back to Top Button
        window.addEventListener('scroll', function() {
            const backToTop = document.getElementById('backToTop');
            if (window.pageYOffset > 300) {
                backToTop.classList.remove('opacity-0', 'invisible');
                backToTop.classList.add('opacity-100', 'visible');
            } else {
                backToTop.classList.add('opacity-0', 'invisible');
                backToTop.classList.remove('opacity-100', 'visible');
            }
        });
    </script>

@endsection
