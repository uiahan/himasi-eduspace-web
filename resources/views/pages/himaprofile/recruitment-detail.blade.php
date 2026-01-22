@extends('layout.layout')
@section('title', 'Form Perekrutan')
@include('components.navbar')

@section('body')
    <div
        class="min-h-screen bg-white 
            px-4 sm:px-8 md:px-16 lg:px-32 xl:px-60 
            pt-32 md:pt-44 pb-32">

        {{-- Header --}}
        <div class="mb-20">
            <h1 class="text-4xl md:text-5xl font-extrabold mb-6" data-aos="fade-up">
                Form Pendaftaran
            </h1>

            <div class="rounded-3xl overflow-hidden shadow-lg">
                <img src="{{ asset('storage/' . $recruitment->photo) }}" alt="{{ $recruitment->name }}"
                    class="w-full h-64 md:h-[420px] object-cover">
            </div>
        </div>

        {{-- Content --}}
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-10 mb-32">

            {{-- Left --}}
            <div class="lg:col-span-2 space-y-10">
                <div>
                    <h2 class="text-2xl md:text-3xl font-bold mb-4">
                        Perekrutan {{ $recruitment->name }}
                    </h2>
                    <div class="prose max-w-none text-gray-700">
                        {!! $recruitment->description !!}
                    </div>
                </div>

                <div>
                    <h3 class="text-xl md:text-2xl font-semibold mb-4">
                        Persyaratan
                    </h3>
                    <div class="prose max-w-none text-gray-700">
                        {!! $recruitment->term !!}
                    </div>
                </div>
            </div>

            {{-- Sidebar --}}
            <div class="bg-green-700 rounded-3xl p-8 h-fit 
                    lg:sticky lg:top-40">
                <h4 class="text-xl text-white font-semibold mb-4">
                    Siap Bergabung?
                </h4>
                <p class="text-white leading-relaxed">
                    Tunjukkan potensimu dan jadilah bagian dari
                    <span class="font-semibold">{{ $recruitment->name }}</span>.
                </p>
            </div>
        </div>

        {{-- Form --}}
        <div class="flex justify-center">
            <div class="w-full max-w-2xl rounded-3xl p-6 sm:p-10 md:p-14">

                <h2 class="text-3xl md:text-4xl font-bold xl:text-center mb-14">
                    Isi Data Diri
                </h2>

                <form action="{{ route('recruitment.store', $recruitment) }}" method="POST" enctype="multipart/form-data"
                    class="space-y-8">

                    @csrf

                    @foreach ([['Nama Lengkap', 'full_name', 'text', 'Masukkan nama lengkap'], ['NIM', 'nim', 'text', 'Masukkan NIM'], ['Kelas', 'class', 'text', 'Contoh: TI-3A'], ['Program Studi', 'prodi', 'text', 'Contoh: Teknik Informatika'], ['Email', 'email', 'email', 'nama@email.com'], ['Nomor WhatsApp', 'phone', 'text', '08xxxxxxxxxx'], ['Portofolio (opsional)', 'portofolio', 'text', '']] as [$label, $name, $type, $placeholder])
                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                {{ $label }}
                            </label>
                            <input type="{{ $type }}" name="{{ $name }}" required
                                placeholder="{{ $placeholder }}"
                                class="w-full rounded-xl border border-gray-300
                               px-4 sm:px-5 py-3 text-base sm:text-lg
                               focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none">
                        </div>
                    @endforeach

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Pilihan Departemen Utama
                        </label>
                        <select name="department" required class="w-full rounded-xl border px-4 py-3 text-base sm:text-lg">
                            <option disabled selected>Pilih departemen</option>
                            <option>Pendidikan</option>
                            <option>Kominfo</option>
                            <option>PSDM</option>
                            <option>Hukesma</option>
                            <option>PM</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Alasan Mendaftar
                        </label>
                        <textarea name="reason" required class="w-full rounded-xl border px-4 py-3 text-base sm:text-lg min-h-[140px]"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Portofolio
                        </label>
                        <textarea name="portofolio" required class="w-full rounded-xl border px-4 py-3 text-base sm:text-lg min-h-[140px]"></textarea>
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Upload Foto
                        </label>
                        <input type="file" name="photo" accept="image/*">
                    </div>

                    <div class="pt-10 flex justify-center">
                        <button type="submit"
                            class="bg-green-700 text-white
                               px-8 sm:px-12 py-3 sm:py-4
                               rounded-full text-base sm:text-lg font-semibold
                               hover:bg-green-800 transition shadow-lg">
                            Daftar Sekarang →
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>

    @include('components.footer')
@endsection
