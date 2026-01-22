@extends('layout.layout')
@section('title', 'Kotak Aspirasi')
@include('components.navbar')

@section('body')
    {{-- Kotak Aspirasi Section --}}
    <div class="min-h-screen xl:px-60 px-6 pb-32 pt-44 bg-white relative overflow-hidden">
        
        {{-- Background Decoration --}}
        <div class="absolute top-0 left-1/2 -translate-x-1/2 w-full h-full -z-10">
            <div class="absolute top-20 left-10 w-64 h-64 bg-green-50 rounded-full blur-3xl opacity-60"></div>
            <div class="absolute bottom-20 right-10 w-96 h-96 bg-emerald-50 rounded-full blur-3xl opacity-60"></div>
        </div>

        <div class="max-w-4xl mx-auto">
            {{-- Header --}}
            <div class="text-center mb-20 space-y-6">
                <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-green-50 border border-green-100 text-green-700 text-xs font-black uppercase tracking-widest" data-aos="fade-down">
                    Voices of HIMASI
                </div>
                <h1 class="text-5xl lg:text-7xl font-black text-gray-900 tracking-tighter leading-tight" data-aos="fade-up" data-aos-duration="1000">
                    Kotak <span class="text-transparent bg-clip-text bg-gradient-to-r from-green-700 to-emerald-500">Aspirasi</span>
                </h1>
                <p class="text-gray-500 text-lg lg:text-xl max-w-2xl mx-auto font-light leading-relaxed" data-aos="fade-up" data-aos-duration="1200">
                    Suaramu adalah bahan bakar perubahan kami. Sampaikan kritik, saran, atau apresiasi secara jujur (dan anonim jika kamu mau).
                </p>
            </div>

            {{-- Form Card --}}
            <div class="bg-white rounded-[3rem] border border-gray-100 shadow-2xl shadow-gray-200/50 p-8 md:p-16 relative" data-aos="zoom-in-up" data-aos-duration="1000">
                <form action="{{ route('aspiration.store') }}" method="POST" class="space-y-10">
                    @csrf
                    
                    <div class="grid md:grid-cols-2 gap-10">
                        {{-- Nama --}}
                        <div class="space-y-3">
                            <label class="text-xs font-black uppercase tracking-[0.2em] text-gray-400 ml-2">
                                Identitas <span class="text-green-600/50">(Opsional)</span>
                            </label>
                            <input type="text" name="name" placeholder="Tulis namamu atau anonim" 
                                class="w-full bg-gray-50 border-none rounded-2xl px-6 py-4 text-gray-700 focus:ring-4 focus:ring-green-600/5 outline-none transition-all placeholder-gray-400 font-medium shadow-inner">
                        </div>

                        {{-- Kategori --}}
                        <div class="space-y-3">
                            <label class="text-xs font-black uppercase tracking-[0.2em] text-gray-400 ml-2">
                                Jenis Aspirasi
                            </label>
                            <div class="relative">
                                <select name="category" required 
                                    class="w-full bg-gray-50 border-none rounded-2xl px-6 py-4 text-gray-700 focus:ring-4 focus:ring-green-600/5 outline-none transition-all shadow-inner appearance-none cursor-pointer font-medium">
                                    <option disabled selected>Pilih kategori...</option>
                                    <option value="kritik">🔥 Kritik Membangun</option>
                                    <option value="saran">💡 Saran Ide</option>
                                    <option value="apresiasi">✨ Apresiasi</option>
                                    <option value="lainnya">❓ Lainnya</option>
                                </select>
                                <div class="absolute right-6 top-1/2 -translate-y-1/2 pointer-events-none text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Pesan --}}
                    <div class="space-y-3">
                        <label class="text-xs font-black uppercase tracking-[0.2em] text-gray-400 ml-2">
                            Pesan Aspirasi
                        </label>
                        <textarea name="message" required placeholder="Tumpahkan pemikiranmu di sini secara detail..." 
                            class="w-full bg-gray-50 border-none rounded-[2rem] px-8 py-6 text-gray-700 focus:ring-4 focus:ring-green-600/5 outline-none transition-all shadow-inner min-h-[200px] resize-none placeholder-gray-400 font-medium leading-relaxed"></textarea>
                    </div>

                    {{-- Submit Button --}}
                    <div class="flex justify-center pt-6">
                        <button type="submit" 
                            class="group relative bg-green-700 text-white px-12 py-5 rounded-2xl text-lg font-black transition-all shadow-xl shadow-green-900/20 hover:bg-green-800 hover:-translate-y-1 active:scale-95 overflow-hidden">
                            <span class="relative z-10 flex items-center gap-3">
                                Kirim Aspirasi Sekarang
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 transition-transform group-hover:translate-x-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </span>
                            <div class="absolute inset-0 bg-gradient-to-r from-transparent via-white/10 to-transparent -translate-x-full group-hover:translate-x-full transition-transform duration-1000"></div>
                        </button>
                    </div>
                </form>

                {{-- Privacy Note --}}
                <div class="mt-12 flex items-center justify-center gap-2 text-gray-400 text-[10px] font-bold uppercase tracking-[0.2em]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                    </svg>
                    Data Terenkripsi & Privasi Terjamin
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection