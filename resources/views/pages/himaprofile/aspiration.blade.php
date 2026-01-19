@extends('layout.layout')
@section('title', 'Kotak Aspirasi')
@include('components.navbar')
@section('body')

    {{-- kotak aspirasi --}}
    <div class="min-h-screen xl:px-60 px-5 pb-32 xl:pb-24 pt-44 bg-white flex items-center justify-center">
        <div class="w-full max-w-3xl">
            <div class="text-center mb-16">
                <h1 class="xl:text-6xl text-3xl font-bold" data-aos="fade-up" data-aos-duration="1000">
                    Kotak Aspirasi
                </h1>
                <p class="mt-5 text-gray-600 xl:text-lg line-clamp-2" data-aos="fade-up" data-aos-duration="1500">
                    Suaramu berarti. Kirimkan kritik, saran, atau pesan dengan tenang dan jujur.
                    Kamu boleh anonim
                </p>
            </div>
            <form action="{{ route('aspiration.store') }}" method="POST" class="space-y-12" data-aos="fade-up"
                data-aos-duration="2000">
                @csrf
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama <span class="text-gray-400">(opsional)</span>
                    </label>
                    <input type="text" placeholder="Tulis namamu atau biarkan kosong" name="name"
                        class="w-full bg-transparent border-2 rounded-xl px-3 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg placeholder-gray-400" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Kategori Aspirasi
                    </label>
                    <select name="category"
                        class="w-full bg-transparent border-2 rounded-xl px-3 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg">
                        <option disabled selected>Pilih kategori</option>
                        <option value="kritik">Kritik</option>
                        <option value="saran">Saran</option>
                        <option value="apresiasi">Apresiasi</option>
                        <option value="lainnya">Lainnya</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Pesan
                    </label>
                    <textarea placeholder="Tulis pesanmu di sini..." name="message"
                        class="w-full bg-transparent border-2 rounded-xl px-3 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg min-h-30 resize-none placeholder-gray-400"></textarea>
                </div>
                {{-- <div class="flex items-center gap-3">
                    <input type="checkbox" class="checkbox checkbox-success" />
                    <span class="text-gray-600 text-sm">
                        Kirim sebagai anonim
                    </span>
                </div> --}}
                <div class="pt-6">
                    <button type="submit"
                        class="group text-green-700 cursor-pointer font-semibold text-lg flex items-center gap-3 hover:gap-5 transition-all">
                        Kirim Aspirasi
                        <span class="text-2xl group-hover:translate-x-1 transition-transform">
                            →
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>

    @include('components.footer')
@endsection
