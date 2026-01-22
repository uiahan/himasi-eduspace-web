@extends('layout.layout')
@section('title', 'Proker')
@include('components.navbar')
@section('body')

    <div class="min-h-screen xl:px-60 lg:px-24 px-5 pt-32 lg:pt-44">

        <!-- Title -->
        <div class="flex justify-center">
            <h1 class="text-4xl lg:text-6xl font-bold text-center" data-aos="fade-up" data-aos-duration="1000">
                Proker Kami
            </h1>
        </div>

        <hr class="mt-8 lg:mt-10" data-aos="fade-up" data-aos-duration="1500">

        <!-- Filter -->
        <div class="flex justify-center mt-8 lg:mt-10" data-aos="fade-up" data-aos-duration="2000">
            <div class="flex flex-wrap gap-3 justify-center">

                <a href="{{ route('program') }}"
                    class="px-5 py-2.5 rounded-full text-sm font-semibold transition
               {{ request('department') == null
                   ? 'bg-green-700 text-white shadow'
                   : 'bg-white text-gray-600 hover:bg-green-50' }}">
                    Semua
                </a>

                @foreach ($departmentList as $dept)
                    <a href="{{ route('program', ['department' => $dept->id]) }}"
                        class="px-5 py-2.5 rounded-full text-sm font-semibold transition
                   {{ request('department') == $dept->id
                       ? 'bg-green-700 text-white shadow'
                       : 'bg-white text-gray-600 hover:bg-green-50' }}">
                        {{ $dept->name }}
                    </a>
                @endforeach

            </div>
        </div>

        <!-- Cards -->
        <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-8 lg:gap-10 mt-14 lg:mt-16">
            @foreach ($program as $item)
                <a href="{{ route('program.show', $item->id) }}" data-aos="fade-up" data-aos-duration="2500">

                    <div
                        class="bg-base-100 shadow-md hover:shadow-2xl transition-all duration-300
                            rounded-2xl overflow-hidden group h-full">

                        <figure class="relative">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                class="h-56 sm:h-60 w-full object-cover
                                    transition-transform duration-500 group-hover:scale-105" />

                            <span
                                class="absolute top-3 left-3
                                     bg-green-700 text-white text-xs font-semibold
                                     px-3 py-1 rounded-full shadow">
                                {{ $item->department->name }}
                            </span>
                        </figure>

                        <div class="p-5 space-y-3">
                            <h2 class="text-lg font-bold text-gray-800 line-clamp-2">
                                {{ $item->name }}
                            </h2>

                            <div class="text-gray-600 text-sm leading-relaxed line-clamp-3">
                                {!! $item->description !!}
                            </div>

                            <div class="pt-2 flex justify-between items-center text-xs text-gray-500">
                                <span class="flex items-center gap-1 max-w-[60%]">
                                    📍 <span class="line-clamp-1">{!! $item->location !!}</span>
                                </span>

                                <span class="flex items-center gap-1 whitespace-nowrap">
                                    📅 {{ $item->date }}
                                </span>
                            </div>
                        </div>

                    </div>
                </a>
            @endforeach
        </div>

        <!-- Pagination -->
        <div class="mt-16 lg:mt-20 flex justify-center mb-20" data-aos="fade-up" data-aos-duration="1500">
            {{ $program->links('pagination::tailwind') }}
        </div>

    </div>

    @include('components.footer')
@endsection
