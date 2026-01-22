@extends('layout.layout')
@section('title', 'Departemen {{ $department->name }}')
@include('components.navbar')
@section('body')

    <div
        class="xl:px-60 lg:px-24 px-5
           pt-32 lg:pt-44 pb-24 lg:pb-32
           flex flex-col-reverse lg:flex-row
           gap-10 lg:gap-20
           items-center justify-between">

        <!-- Text -->
        <div class="w-full lg:w-1/2">
            <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">
                Department Kami
            </h1>

            <div class="text-4xl lg:text-6xl font-bold mt-5">
                <h1 data-aos="fade-up" data-aos-duration="2000">
                    Departemen
                </h1>
                <h1 data-aos="fade-up" data-aos-duration="2500">
                    {{ $department->name }}
                </h1>
            </div>

            <div class="mt-5 text-base lg:text-lg" data-aos="fade-up" data-aos-duration="3000">
                {!! $department->about !!}
            </div>
        </div>

        <!-- Image -->
        <img src="{{ asset('storage/' . $department->logo) }}" alt="{{ $department->name }}"
            class="w-full lg:w-1/2
               h-64 lg:h-96
               rounded-xl object-cover" data-aos="fade-up"
            data-aos-duration="1000">
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
                    {!! $department->vision !!}
                </div>
            </div>

            <div class="p-10 rounded-xl bg-green-700 text-white shadow-lg hover:shadow-2xl transition duration-300"
                data-aos="fade-up" data-aos-duration="2000">
                <h3 class="text-3xl font-bold mb-6">Misi</h3>
                <div class="leading-relaxed">
                    {!! $department->mission !!}
                </div>
            </div>
        </div>
    </div>

    <div class="xl:px-60 px-5" data-aos="fade-up" data-aos-duration="3000">
        <div class="bg-gray-300 h-0.5 w-full"></div>
    </div>

    {{-- staff department --}}
    <div class="xl:px-60 px-5 py-32 bg-white">
        <div class="text-center mb-20">
            <h1 class="text-sm font-semibold tracking-widest text-gray-500" data-aos="fade-up" data-aos-duration="1000">
                STAFF DEPARTEMEN
            </h1>
            <h2 class="text-5xl font-bold mt-4" data-aos="fade-up" data-aos-duration="1500">
                Tim Kami
            </h2>
        </div>

        @if ($department->staff->count())
            <div class="grid xl:grid-cols-4 grid-cols-1 gap-10">
                @foreach ($department->staff as $staff)
                    <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden"
                        data-aos="fade-up" data-aos-duration="2000">
                        <div class="h-72 overflow-hidden">
                            <img src="{{ asset('storage/' . $staff->photo) }}" alt="{{ $staff->name }}"
                                class="w-full h-full object-cover hover:scale-105 transition duration-500">
                        </div>

                        <div class="p-6 text-center">
                            <h3 class="text-xl font-semibold">
                                {{ $staff->name }}
                            </h3>
                            <p class="mt-2 text-gray-500 text-sm">
                                {{ $staff->position }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="text-center text-gray-500 text-lg">
                Belum ada staff terdaftar di departemen ini.
            </div>
        @endif
    </div>


    @include('components.footer')
@endsection
