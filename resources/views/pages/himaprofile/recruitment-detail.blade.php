@extends('layout.layout')
@section('title', 'Form Perekrutan')
@include('components.navbar')

@section('body')
    <div class="min-h-screen bg-white px-60 pt-44 pb-32">
        <div class="">

            <div class="mb-20">
                <h1 class="text-5xl font-extrabold mb-6" data-aos="fade-up">
                    Form Pendaftaran
                </h1>

                <div class="rounded-3xl overflow-hidden shadow-lg mt-8">
                    <img src="{{ asset('storage/' . $recruitment->photo) }}" alt="{{ $recruitment->name }}"
                        class="w-full h-[420px] object-cover">
                </div>
            </div>

            <div class="grid md:grid-cols-3 gap-12 mb-32">

                <div class="md:col-span-2 space-y-10">
                    <div>
                        <h2 class="text-3xl font-bold mb-4" data-aos="fade-up">
                            Perekrutan {{ $recruitment->name }}
                        </h2>
                        <div class="prose max-w-none text-gray-700">
                            {!! $recruitment->description !!}
                        </div>
                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold mb-4" data-aos="fade-up">
                            Persyaratan
                        </h3>
                        <div class="prose max-w-none text-gray-700">
                            {!! $recruitment->term !!}
                        </div>
                    </div>
                </div>

                <div class="bg-green-700 rounded-3xl p-8 h-fit sticky top-40">
                    <h4 class="text-xl text-white font-semibold mb-4">
                        Siap Bergabung?
                    </h4>
                    <p class="leading-relaxed text-white">
                        Tunjukkan potensimu dan jadilah bagian dari
                        <span class="font-semibold">
                            {{ $recruitment->name }}
                        </span>.
                    </p>
                </div>
            </div>

            <div class="flex justify-center">
                <div class="w-full max-w-3xl rounded-3xl p-14">

                    <h2 class="text-4xl font-bold text-center mb-14" data-aos="fade-up">
                        Form Pendaftaran
                    </h2>

                    <form action="{{ route('recruitment.store', $recruitment) }}" method="POST"
                        enctype="multipart/form-data" class="space-y-10" data-aos="fade-up">

                        @csrf

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Nama Lengkap
                            </label>
                            <input type="text" name="full_name" required placeholder="Masukkan nama lengkap"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                NIM
                            </label>
                            <input type="text" name="nim" required placeholder="Masukkan NIM"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Kelas
                            </label>
                            <input type="text" name="class" required placeholder="Contoh: TI-3A"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Program Studi
                            </label>
                            <input type="text" name="prodi" required placeholder="Contoh: Teknik Informatika"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Email
                            </label>
                            <input type="email" name="email" required placeholder="nama@email.com"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Nomor WhatsApp
                            </label>
                            <input type="text" name="phone" required placeholder="08xxxxxxxxxx"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Pilihan Departemen Utama
                            </label>
                            <select name="department" required
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none">
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
                                Pilihan Departemen Kedua (Opsional)
                            </label>
                            <select name="department_second"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none">
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
                            <textarea name="reason" required placeholder="Ceritakan alasan kamu ingin bergabung"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg min-h-[140px]
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none resize-none"></textarea>
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Link Portofolio (Opsional)
                            </label>
                            <input type="url" name="portofolio" placeholder="https://github.com/username"
                                class="w-full rounded-xl border border-gray-300 px-5 py-3 text-lg
                   focus:border-green-600 focus:ring-2 focus:ring-green-200 outline-none" />
                        </div>

                        <div>
                            <label class="block text-sm font-semibold text-gray-700 mb-2">
                                Upload Foto
                            </label>
                            <input type="file" name="photo" accept="image/*" class="w-full text-gray-600" />
                        </div>

                        <div class="pt-10 flex justify-center">
                            <button type="submit"
                                class="bg-green-700 text-white px-12 py-4 rounded-full text-lg font-semibold
                   hover:bg-green-800 transition-all shadow-lg flex items-center gap-3">
                                Daftar Sekarang
                                <span class="text-2xl">→</span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>

    @include('components.footer')
@endsection
