@extends('layout.layout')
@section('title', 'Perekrutan')
@include('components.navbar')

@section('body')
    <div class="min-h-screen 
            px-4 sm:px-8 md:px-16 lg:px-32 xl:px-60 
            pt-32 md:pt-44">

        <div class="flex justify-center">
            <div class="text-center max-w-3xl">
                <h1 class="text-4xl md:text-6xl font-bold" data-aos="fade-up">
                    Perekrutan
                </h1>
            </div>
        </div>

        <div
            class="grid 
                grid-cols-1 
                sm:grid-cols-2 
                lg:grid-cols-3 
                gap-8 md:gap-10 
                mt-12 md:mt-16">

            @foreach ($recruitmentList as $item)
                <a href="{{ route('recruitment.show', $item->id) }}" class="flex justify-center">
                    <div
                        class="bg-white w-full max-w-sm rounded-2xl overflow-hidden shadow-md
                       hover:shadow-2xl transition-all duration-300 group">

                        <div class="overflow-hidden">
                            <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                class="h-56 w-full object-cover transition-transform duration-500 group-hover:scale-105">
                        </div>

                        <div class="p-6 space-y-3">
                            <h2 class="text-lg font-bold text-gray-800">
                                {{ $item->name }}
                            </h2>

                            <div class="text-sm text-gray-600 line-clamp-3">
                                {!! $item->description !!}
                            </div>

                            <div class="text-xs text-gray-500 flex items-center gap-1 pt-2">
                                📅 Batas pendaftaran: {{ $item->deadline }}
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach

        </div>
    </div>

    @include('components.footer')
@endsection
