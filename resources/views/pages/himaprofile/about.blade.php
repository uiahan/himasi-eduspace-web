@extends('layout.layout')
@section('title', 'Tentang')
@include('components.navbar')
@section('body')

    {{-- about --}}
    <div class="px-60 pt-44 pb-32 flex gap-20 items-center justify-between">
        <div>
            <div>
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="text-6xl font-bold mt-5">
                <h1 data-aos="fade-up" data-aos-duration="2000">Kabinet</h1>
                <h1 data-aos="fade-up" data-aos-duration="2500">{{ $organization->name }}</h1>
            </div>
            <div class="mt-5" data-aos="fade-up" data-aos-duration="3000">
                <div>{!! $organization->about !!}</div>
            </div>
        </div>
        <img src="{{ asset('storage/' . $organization->logo) }}" class="w-full h-96 rounded-xl object-cover" data-aos="fade-up"
            data-aos-duration="1000" alt="{{ $organization->name }}">
    </div>

    <div class="px-60" data-aos="fade-up" data-aos-duration="3000">
        <div class="bg-gray-300 h-0.5 w-full"></div>
    </div>

    {{-- visi & misi --}}
    <div class="px-60 pt-32 pb-32 bg-white">
        <div class="text-center mb-20">
            <h1 class="text-sm font-semibold tracking-widest text-gray-500" data-aos="fade-up" data-aos-duration="1000">
                VISI & MISI
            </h1>
            <h2 class="text-5xl font-bold mt-4" data-aos="fade-up" data-aos-duration="1500">
                Arah & Tujuan Kami
            </h2>
        </div>

        <div class="grid grid-cols-2 gap-16 items-start">
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
