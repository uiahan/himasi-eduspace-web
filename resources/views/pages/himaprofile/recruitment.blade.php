@extends('layout.layout')
@section('title', 'Perekrutan')
@include('components.navbar')

@section('body')
    <div class="min-h-screen bg-white px-6 sm:px-8 md:px-16 lg:px-32 xl:px-60 pt-44 pb-32">

        {{-- Section Header --}}
        <div class="max-w-4xl mx-auto text-center space-y-6 mb-20">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 border border-green-100 text-green-700 text-xs font-black uppercase tracking-widest" data-aos="fade-down">
                Grow With Us
            </div>
            <h1 class="text-5xl md:text-7xl font-black text-gray-900 tracking-tighter" data-aos="fade-up" data-aos-duration="1000">
                Perekrutan <span class="text-green-700">HIMASI</span>
            </h1>
            <p class="text-gray-500 text-lg lg:text-xl max-w-2xl mx-auto font-light" data-aos="fade-up" data-aos-duration="1200">
                Jadilah bagian dari agen perubahan. Temukan departemen yang sesuai dengan passion-mu dan mari berkontribusi bersama.
            </p>
        </div>

        {{-- Recruitment Cards Grid --}}
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10 md:gap-12">

            @foreach ($recruitmentList as $item)
                <div class="group" data-aos="fade-up" data-aos-duration="{{ 1000 + ($loop->index * 100) }}">
                    <a href="{{ route('recruitment.show', $item->id) }}" class="block h-full">
                        <div class="bg-white rounded-[2.5rem] overflow-hidden border border-gray-100 shadow-sm hover:shadow-2xl hover:-translate-y-4 transition-all duration-500 h-full flex flex-col relative">
                            
                            {{-- Image Container --}}
                            <div class="relative h-64 overflow-hidden">
                                <img src="{{ asset('storage/' . $item->photo) }}" alt="{{ $item->name }}"
                                    class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110">
                                
                                {{-- Status Overlay (Optional) --}}
                                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500 flex items-end p-8">
                                    <span class="text-white text-sm font-bold flex items-center gap-2">
                                        Lihat Detail <span class="group-hover:translate-x-2 transition-transform">→</span>
                                    </span>
                                </div>
                            </div>

                            {{-- Content Body --}}
                            <div class="p-8 space-y-4 flex flex-col flex-grow">
                                <h2 class="text-2xl font-black text-gray-900 group-hover:text-green-700 transition-colors leading-tight line-clamp-2">
                                    {{ $item->name }}
                                </h2>

                                <div class="text-gray-500 text-sm leading-relaxed line-clamp-3 font-light">
                                    {!! $item->description !!}
                                </div>

                                {{-- Deadline Footer --}}
                                <div class="mt-auto pt-6 border-t border-gray-50 flex items-center justify-between">
                                    <div class="flex items-center gap-2 text-[11px] font-bold uppercase tracking-widest text-gray-400">
                                        <span class="text-green-600 text-base">📅</span>
                                        <span>Deadline: {{ $item->deadline }}</span>
                                    </div>
                                    
                                    {{-- Alert icon if deadline is near (Dummy logic) --}}
                                    <div class="w-2 h-2 rounded-full bg-green-500 animate-pulse"></div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach

        </div>

        {{-- Empty State --}}
        @if($recruitmentList->isEmpty())
            <div class="text-center py-32 bg-gray-50 rounded-[3rem] border-2 border-dashed border-gray-200" data-aos="zoom-in">
                <div class="text-5xl mb-4">📢</div>
                <h3 class="text-xl font-bold text-gray-800">Pendaftaran Belum Dibuka</h3>
                <p class="text-gray-400 mt-2">Pantau terus sosial media kami untuk info perekrutan mendatang.</p>
            </div>
        @endif
    </div>

    @include('components.footer')
@endsection