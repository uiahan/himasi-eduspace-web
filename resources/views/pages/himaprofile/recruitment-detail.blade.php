@extends('layout.layout')
@section('title', 'Pendaftaran ' . $recruitment->name)
@include('components.navbar')

@section('body')
    <div class="min-h-screen bg-white px-6 sm:px-8 md:px-16 lg:px-32 xl:px-60 pt-44 pb-32">

        {{-- Header & Hero --}}
        <div class="mb-24">
            <div class="flex flex-col lg:flex-row gap-12 items-end justify-between mb-12">
                <div class="max-w-2xl space-y-4">
                    <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 text-green-700 text-xs font-black uppercase tracking-widest" data-aos="fade-right">
                        Open Recruitment
                    </div>
                    <h1 class="text-4xl md:text-6xl font-black text-gray-900 tracking-tighter" data-aos="fade-up">
                        {{ $recruitment->name }}
                    </h1>
                </div>
                <div class="flex items-center gap-4 text-gray-400 font-bold uppercase text-xs tracking-widest" data-aos="fade-left">
                    <span>Deadline</span>
                    <span class="text-red-500 bg-red-50 px-4 py-2 rounded-full border border-red-100 italic">{{ $recruitment->deadline }}</span>
                </div>
            </div>

            <div class="relative group" data-aos="zoom-in" data-aos-duration="1000">
                <div class="absolute -inset-4 bg-green-50 rounded-[3rem] -rotate-1 opacity-50 -z-10"></div>
                <div class="rounded-[2.5rem] overflow-hidden shadow-2xl border-8 border-white">
                    <img src="{{ asset('storage/' . $recruitment->photo) }}" alt="{{ $recruitment->name }}"
                        class="w-full h-64 md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105">
                </div>
            </div>
        </div>

        {{-- Content Grid --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-16 lg:gap-24 mb-32">
            {{-- Left: Details --}}
            <div class="lg:col-span-2 space-y-16">
                <section data-aos="fade-up">
                    <div class="inline-flex items-center gap-4 mb-8">
                        <div class="w-12 h-1.5 bg-green-700 rounded-full"></div>
                        <h2 class="text-3xl font-black text-gray-900 tracking-tight">Deskripsi Peran</h2>
                    </div>
                    <div class="prose prose-lg prose-green max-w-none text-gray-600 leading-relaxed text-justify">
                        {!! $recruitment->description !!}
                    </div>
                </section>

                <section data-aos="fade-up">
                    <div class="inline-flex items-center gap-4 mb-8">
                        <div class="w-12 h-1.5 bg-green-700 rounded-full"></div>
                        <h2 class="text-3xl font-black text-gray-900 tracking-tight">Persyaratan Umum</h2>
                    </div>
                    <div class="prose prose-lg prose-green max-w-none text-gray-600 bg-gray-50 p-8 rounded-[2rem] border border-gray-100 shadow-inner">
                        {!! $recruitment->term !!}
                    </div>
                </section>
            </div>

            {{-- Sidebar Info --}}
            <div class="lg:col-span-1">
                <div class="sticky top-32 bg-green-800 rounded-[2.5rem] p-10 shadow-2xl shadow-green-900/20 text-white overflow-hidden group">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-white/5 rounded-full -mr-16 -mt-16 blur-2xl"></div>
                    
                    <h4 class="text-2xl font-black mb-6 relative z-10 leading-tight">Siap Bergabung Bersama Kami?</h4>
                    <p class="text-green-100/70 mb-8 relative z-10 font-light leading-relaxed text-sm">
                        Siapkan data diri terbaikmu dan pastikan semua berkas telah sesuai dengan persyaratan yang tertera.
                    </p>
                    
                    <div class="space-y-4 relative z-10">
                        <div class="flex items-center gap-4 bg-white/10 p-4 rounded-2xl backdrop-blur-sm border border-white/5">
                            <span class="text-2xl">🚀</span>
                            <div>
                                <p class="text-[10px] font-black uppercase text-green-300">Status</p>
                                <p class="text-sm font-bold text-white">Pendaftaran Dibuka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- Form Section --}}
        <div id="registration-form" class="bg-gray-50 rounded-[4rem] p-8 md:p-20 border border-gray-100" data-aos="fade-up">
            <div class="max-w-3xl mx-auto">
                <div class="text-center mb-16 space-y-4">
                    <h2 class="text-4xl md:text-5xl font-black text-gray-900 tracking-tighter italic">Formulir Pendaftaran</h2>
                    <p class="text-gray-500 font-medium tracking-wide">Lengkapi data berikut dengan informasi yang valid</p>
                    <div class="w-20 h-1.5 bg-green-700 mx-auto rounded-full"></div>
                </div>

                <form action="{{ route('recruitment.store', $recruitment) }}" method="POST" enctype="multipart/form-data" class="space-y-12">
                    @csrf

                    {{-- Data Personal Section --}}
                    <div class="grid md:grid-cols-2 gap-8">
                        @foreach ([
                            ['Nama Lengkap', 'full_name', 'text', 'Contoh: Ahmad HIMASI'],
                            ['NIM', 'nim', 'text', 'Masukkan NIM aktif'],
                            ['Kelas', 'class', 'text', 'Contoh: 12.3A.01'],
                            ['Program Studi', 'prodi', 'text', 'Sistem Informasi'],
                            ['Email', 'email', 'email', 'nama@email.com'],
                            ['Nomor WhatsApp', 'phone', 'text', '08xxxxxxxxxx']
                        ] as [$label, $name, $type, $placeholder])
                            <div class="space-y-2">
                                <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">
                                    {{ $label }}
                                </label>
                                <input type="{{ $type }}" name="{{ $name }}" required placeholder="{{ $placeholder }}"
                                    class="w-full rounded-2xl bg-white border border-gray-100 px-6 py-4 text-gray-700 focus:border-green-600 focus:ring-4 focus:ring-green-600/5 outline-none transition-all shadow-sm">
                            </div>
                        @endforeach
                    </div>

                    {{-- Selection Section --}}
                    <div class="space-y-8 pt-8 border-t border-gray-200">
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Pilihan Departemen Utama</label>
                            <select name="department" required class="w-full rounded-2xl bg-white border border-gray-100 px-6 py-4 text-gray-700 focus:border-green-600 outline-none appearance-none shadow-sm transition-all cursor-pointer">
                                <option disabled selected>Klik untuk memilih departemen...</option>
                                <option>Pendidikan</option>
                                <option>Kominfo</option>
                                <option>PSDM</option>
                                <option>Hukesma</option>
                                <option>PM</option>
                            </select>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Alasan Bergabung</label>
                            <textarea name="reason" required placeholder="Ceritakan motivasi singkat Anda..."
                                class="w-full rounded-2xl bg-white border border-gray-100 px-6 py-4 text-gray-700 focus:border-green-600 outline-none transition-all shadow-sm min-h-[150px]"></textarea>
                        </div>

                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Link Portofolio (G-Drive/Github)</label>
                            <input type="text" name="portofolio" placeholder="https://..."
                                class="w-full rounded-2xl bg-white border border-gray-100 px-6 py-4 text-gray-700 focus:border-green-600 outline-none transition-all shadow-sm">
                        </div>

                        {{-- File Upload Custom Style --}}
                        <div class="space-y-2">
                            <label class="text-xs font-black uppercase tracking-widest text-gray-400 ml-2">Foto Diri (Formal/Semi-Formal)</label>
                            <div class="flex items-center justify-center w-full">
                                <label class="flex flex-col items-center justify-center w-full h-40 border-2 border-gray-200 border-dashed rounded-[2rem] cursor-pointer bg-white hover:bg-gray-50 transition-colors">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                        <span class="text-3xl mb-2">📸</span>
                                        <p class="text-sm text-gray-500 font-bold">Klik untuk upload foto</p>
                                        <p class="text-xs text-gray-400">PNG atau JPG (Max. 2MB)</p>
                                    </div>
                                    <input type="file" name="photo" accept="image/*" class="hidden" required />
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="pt-10 text-center">
                        <button type="submit"
                            class="group bg-green-700 text-white px-16 py-5 rounded-[2rem] text-xl font-black transition-all shadow-2xl shadow-green-900/30 hover:bg-green-800 hover:-translate-y-2 active:scale-95">
                            Kirim Pendaftaran 
                            <span class="inline-block ml-2 transition-transform group-hover:translate-x-2">🚀</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection