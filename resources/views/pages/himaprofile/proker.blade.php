@extends('layout.layout')
@section('title', 'Proker')
@include('components.navbar')
@section('body')

    <div class="min-h-screen px-60 pt-44">
        <div class="flex justify-center">
            <div class="text-6xl font-bold text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000">Proker Kami</h1>
            </div>
        </div>
        <hr class="mt-10" data-aos="fade-up" data-aos-duration="1500">
        <div class="flex justify-center mt-10" data-aos="fade-up" data-aos-duration="2000">
            <div class="flex flex-wrap gap-4 justify-center">

                <a href="{{ route('program') }}"
                    class="px-6 py-3 rounded-full text-sm font-semibold transition
            {{ request('department') == null
                ? 'bg-green-700 text-white shadow'
                : 'bg-white text-gray-600 hover:bg-green-50' }}">
                    Semua
                </a>

                @foreach ($departments as $dept)
                    <a href="{{ route('program', ['department' => $dept->id]) }}"
                        class="px-6 py-3 rounded-full  text-sm font-semibold transition
                {{ request('department') == $dept->id
                    ? 'bg-green-700 text-white shadow'
                    : 'bg-white text-gray-600 hover:bg-green-50' }}">
                        {{ $dept->name }}
                    </a>
                @endforeach

            </div>
        </div>

        <div class="grid grid-cols-3 gap-10 mt-16">
            @foreach ($program as $item)
                <div class="card bg-base-100 w-96 shadow-md hover:shadow-2xl transition-all duration-300 group rounded-2xl overflow-hidden"
                    data-aos="fade-up" data-aos-duration="2500">

                    <figure class="relative">
                        <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                            class="h-60 w-full object-cover transition-transform duration-500 group-hover:scale-105" />

                        <div class="absolute top-3 left-3">
                            <span class="badge bg-green-700 text-white font-semibold shadow">
                                {{ $item->department->name }}
                            </span>
                        </div>
                    </figure>

                    <div class="card-body space-y-3">
                        <h2 class="card-title text-lg font-bold text-gray-800">
                            {{ $item->name }}
                        </h2>

                        <div class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                            {!! $item->description !!}
                        </div>

                        <div class="pt-2 flex justify-between items-center text-sm text-gray-500">
                            <span class="flex items-center gap-1">
                                📍 <span class="line-clamp-1">{!! $item->location !!}</span>
                            </span>

                            <span class="flex items-center gap-1">
                                📅 {{ $item->date }}
                            </span>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
        <div class="mt-20 flex justify-center mb-20" data-aos="fade-up" data-aos-duration="1500">
            <div class="px-6 py-3 rounded-full">
                {{ $program->links('pagination::tailwind') }}
            </div>
        </div>

    </div>

    @include('components.footer')
@endsection
