@extends('layout.layout')
@section('title', 'Tentang')
@include('components.navbar')
@section('body')

    {{-- about --}}
    <div class="xl:px-60 px-5 xl:pt-44 pt-32 xl:pb-0 pb-24 xl:flex gap-20 items-center">
        <div class="xl:text-6xl text-3xl font-bold xl:hidden">
            <h1 data-aos="fade-up" data-aos-duration="1000">Kabinet {{ $organization->name }}</h1>
        </div>
        <div class="xl:w-96 xl:h-96 xl:hidden flex justify-center mt-3">
            <img src="{{ asset('storage/' . $organization->logo) }}"
                class="xl:w-96 xl:h-96 w-full h-60 rounded-xl object-cover" data-aos="fade-up" data-aos-duration="1500"
                alt="">
        </div>
        <img src="{{ asset('storage/' . $organization->logo) }}"
            class="xl:w-full hidden xl:block xl:h-96 w-60 h-60 rounded-xl object-cover" data-aos="fade-up"
            data-aos-duration="1000" alt="">
        <div>
            <div class="hidden xl:block">
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="xl:text-6xl text-3xl font-bold mt-5 hidden xl:block">
                <h1 data-aos="fade-up" data-aos-duration="2000">Kabinet</h1>
                <h1 data-aos="fade-up" data-aos-duration="2500">{{ $organization->name }}</h1>
            </div>
            <div class="xl:hidden mt-5">
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="xl:mt-5 mt-3">
                <div data-aos="fade-up" data-aos-duration="3000" class="text-justify xl:line-clamp-4 line-clamp-17">
                    {!! $organization->about !!}</div>
            </div>
        </div>
    </div>

    <div class="xl:px-60 px-5" data-aos="fade-up" data-aos-duration="3000">
        <div class="bg-gray-300 h-0.5 w-full"></div>
    </div>

    {{-- visi & misi --}}
    <div class="xl:px-60 px-5 pt-32 pb-32 bg-white">
        <div class="text-center mb-20">
            <h1 class="text-sm font-semibold tracking-widest text-gray-500" data-aos="fade-up" data-aos-duration="1000">
                VISI & MISI
            </h1>
            <h2 class="text-5xl font-bold mt-4" data-aos="fade-up" data-aos-duration="1500">
                Arah & Tujuan Kami
            </h2>
        </div>

        <div class="grid xl:grid-cols-2 grid-cols-1 gap-16 items-start">
            <div class="p-10 rounded-xl bg-green-700 text-white shadow-lg hover:shadow-2xl transition duration-300"
                data-aos="fade-up" data-aos-duration="2000">
                <h3 class="text-3xl font-bold mb-6">Visi</h3>
                <div class="leading-relaxed">
                    {!! $organization->vision !!}
                </div>
            </div>

            <div class="p-10 rounded-xl bg-green-700 text-white shadow-lg hover:shadow-2xl transition duration-300"
                data-aos="fade-up" data-aos-duration="2000">
                <h3 class="text-3xl font-bold mb-6">Misi</h3>
                <div class="leading-relaxed">
                    {!! $organization->mission !!}
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
