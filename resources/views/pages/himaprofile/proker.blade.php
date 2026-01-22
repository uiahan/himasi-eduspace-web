@extends('layout.layout')
@section('title', 'Program Kerja')
@include('components.navbar')

@section('body')

    <div class="min-h-screen xl:px-60 lg:px-24 px-6 pt-44 pb-32 bg-white">

        <div class="max-w-4xl mx-auto text-center space-y-6 mb-20">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 border border-green-100 text-green-700 text-xs font-bold uppercase tracking-widest" data-aos="fade-down">
                Timeline & Activity
            </div>
            <h1 class="text-5xl lg:text-7xl font-black text-gray-900 tracking-tighter" data-aos="fade-up" data-aos-duration="1000">
                Program <span class="text-green-700">Kami</span>
            </h1>
            <p class="text-gray-500 text-lg lg:text-xl max-w-2xl mx-auto font-light" data-aos="fade-up" data-aos-duration="1200">
                Eksplorasi seluruh inisiatif dan kontribusi nyata setiap departemen HIMASI untuk kemajuan mahasiswa.
            </p>
        </div>

        <div class="flex justify-center mb-16" data-aos="fade-up" data-aos-duration="1400">
            <div class="inline-flex flex-wrap p-2 bg-gray-50 rounded-[2rem] border border-gray-100 justify-center gap-2">
                
                <a href="{{ route('program') }}"
                    class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300
                    {{ request('department') == null
                        ? 'bg-green-700 text-white shadow-xl shadow-green-200'
                        : 'text-gray-500 hover:text-green-700' }}">
                    Semua Program
                </a>

                @foreach ($departmentList as $dept)
                    <a href="{{ route('program', ['department' => $dept->id]) }}"
                        class="px-8 py-3 rounded-full text-sm font-bold transition-all duration-300
                        {{ request('department') == $dept->id
                            ? 'bg-green-700 text-white shadow-xl shadow-green-200'
                            : 'text-gray-500 hover:text-green-700' }}">
                        {{ $dept->name }}
                    </a>
                @endforeach
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 lg:gap-12">
            @foreach ($program as $item)
                <div class="group" data-aos="fade-up" data-aos-duration="{{ 1000 + ($loop->index * 100) }}">
                    <a href="{{ route('program.show', $item->id) }}" class="block h-full">
                        <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 h-full flex flex-col">
                            
                            {{-- Image --}}
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110" />
                                
                                {{-- Floating Badge --}}
                                <div class="absolute top-6 left-6">
                                    <span class="px-4 py-2 bg-white/90 backdrop-blur-md text-green-800 text-[10px] font-black uppercase tracking-widest rounded-xl shadow-lg">
                                        {{ $item->department->name }}
                                    </span>
                                </div>
                            </div>

                            {{-- Card Body --}}
                            <div class="p-8 flex flex-col flex-grow space-y-4">
                                <h2 class="text-2xl font-black text-gray-800 group-hover:text-green-700 transition-colors line-clamp-2 leading-tight">
                                    {{ $item->name }}
                                </h2>

                                <div class="text-gray-500 text-sm leading-relaxed line-clamp-3 font-light">
                                    {!! $item->description !!}
                                </div>

                                {{-- Footer Info --}}
                                <div class="mt-auto pt-6 border-t border-gray-50 flex justify-between items-center text-[11px] font-bold uppercase tracking-wider text-gray-400">
                                    <div class="flex items-center gap-2">
                                        <span class="text-green-600 text-base">📍</span>
                                        <span class="line-clamp-1">{!! $item->location !!}</span>
                                    </div>
                                    <div class="flex items-center gap-2 whitespace-nowrap">
                                        <span class="text-green-600 text-base">📅</span>
                                        {{ $item->date }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>

        @if($program->isEmpty())
            <div class="text-center py-40 bg-gray-50 rounded-[3rem] border-2 border-dashed border-gray-200">
                <p class="text-gray-400 text-xl font-medium">Tidak ada program kerja untuk kategori ini.</p>
            </div>
        @endif

        <div class="mt-24 flex justify-center" data-aos="fade-up">
            <div class="bg-white px-6 py-4 rounded-full shadow-lg border border-gray-50">
                {{ $program->links('pagination::tailwind') }}
            </div>
        </div>

    </div>

    @include('components.footer')
@endsection