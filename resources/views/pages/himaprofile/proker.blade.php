@extends('layout.layout')
@section('title', 'Proker')
@include('components.navbar')
@section('body')

    {{-- program --}}
    <div class="min-h-screen px-60 pt-44">
        <div class="flex justify-center">
            <div class="text-6xl font-bold text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000">Program Kami</h1>
                <p class="mt-5 text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500">
                    Melalui program kerja, HIMASI hadir mendampingi mahasiswa Sistem Informasi
                    dalam bertumbuh, belajar, dan berkontribusi secara nyata.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 mt-16">
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
