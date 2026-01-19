@extends('layout.layout')
@section('title', $program->name)
@include('components.navbar')

@section('body')
    <div class="px-60 pt-44 pb-32">

        {{-- header --}}
        <div class="grid grid-cols-2 gap-20 items-center">
            <div>
                <span class="inline-block mb-4 px-4 py-2 rounded-full bg-green-100 text-green-700 text-sm font-semibold">
                    {{ $program->department->name }}
                </span>

                <h1 class="text-5xl font-bold leading-tight" data-aos="fade-up">
                    {{ $program->name }}
                </h1>

                <div class="mt-6 flex gap-6 text-gray-600 text-sm">
                    <div class="flex items-center gap-2">
                        📍 <span>{!! $program->location !!}</span>
                    </div>
                    <div class="flex items-center gap-2">
                        📅 <span>{{ $program->date }}</span>
                    </div>
                </div>
            </div>

            <div class="rounded-2xl overflow-hidden shadow-lg" data-aos="fade-up">
                <img src="{{ asset('storage/' . $program->photo) }}" alt="{{ $program->name }}"
                    class="w-full h-96 object-cover hover:scale-105 transition duration-500">
            </div>
        </div>

        {{-- divider --}}
        <div class="mt-20 border-t"></div>

        {{-- content --}}
        <div class="grid grid-cols-3 gap-16 mt-20">

            {{-- description --}}
            <div class="col-span-2">
                <h2 class="text-3xl font-bold mb-6">
                    Tentang Program
                </h2>

                <div class="prose max-w-none text-gray-700 leading-relaxed">
                    {!! $program->description !!}
                </div>
            </div>

            {{-- info box --}}
            <div class="bg-green-700 text-white rounded-2xl p-10 shadow-xl h-fit">
                <h3 class="text-2xl font-bold mb-6">
                    Informasi Program
                </h3>

                <ul class="space-y-4 text-sm">
                    <li class="flex justify-between">
                        <span>Departemen</span>
                        <span class="font-semibold">
                            {{ $program->department->name }}
                        </span>
                    </li>

                    <li class="flex justify-between">
                        <span>Lokasi</span>
                        <span class="font-semibold text-right">
                            {!! $program->location !!}
                        </span>
                    </li>

                    <li class="flex justify-between">
                        <span>Tanggal</span>
                        <span class="font-semibold">
                            {{ $program->date }}
                        </span>
                    </li>
                </ul>
            </div>

        </div>

    </div>

    @include('components.footer')
@endsection