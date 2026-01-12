@extends('layout.layout')
@section('title', 'Requirement')
@include('components.navbar')
@section('body')

    {{-- requirement --}}
    <div class="min-h-screen px-60 pt-36 bg-white">

        <div class="flex justify-center">
            <div class="text-6xl font-bold text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000">Requirement HIMASI</h1>
                <p class="mt-5 text-gray-600 text-lg font-normal" data-aos="fade-up" data-aos-duration="1500">
                    Persyaratan ini disusun untuk memastikan setiap calon anggota
                    siap bertumbuh dan berkontribusi bersama HIMASI.
                </p>
            </div>
        </div>

        <div class="flex justify-center mt-24">
            <div class="w-full max-w-3xl rounded-3xl border border-gray-200 px-12 py-10" data-aos="fade-up"
                data-aos-duration="1800">
                <h2 class="text-3xl font-bold mb-8 text-center">
                    Persyaratan Pendaftaran
                </h2>

                <div class="grid grid-cols-1 gap-5 text-lg text-gray-700">
                    <div class="flex items-center gap-4">
                        <span class="w-2 h-2 bg-green-700 rounded-full"></span>
                        <span>Mahasiswa aktif Program Studi Sistem Informasi.</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="w-2 h-2 bg-green-700 rounded-full"></span>
                        <span>Memiliki komitmen, tanggung jawab, dan kemauan belajar.</span>
                    </div>
                    <div class="flex items-center gap-4">
                        <span class="w-2 h-2 bg-green-700 rounded-full"></span>
                        <span>Bersedia mengikuti seluruh proses dan kegiatan HIMASI.</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex justify-center mt-32">
            <div class="w-full max-w-3xl">
                <h2 class="text-4xl font-bold text-center mb-14" data-aos="fade-up" data-aos-duration="2000">
                    Form Pendaftaran
                </h2>

                <form action="" method="POST" class="space-y-12" data-aos="fade-up" data-aos-duration="2300">

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Nama Lengkap
                        </label>
                        <input type="text" placeholder="Masukkan nama lengkap"
                            class="w-full bg-transparent border-2 rounded-xl px-4 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg placeholder-gray-400" />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            NIM
                        </label>
                        <input type="text" placeholder="Masukkan NIM"
                            class="w-full bg-transparent border-2 rounded-xl px-4 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg placeholder-gray-400" />
                    </div>

                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">
                            Pilihan Departemen
                        </label>
                        <select
                            class="w-full bg-transparent border-2 rounded-xl px-4 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg">
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
                        <textarea placeholder="Ceritakan alasan kamu ingin bergabung"
                            class="w-full bg-transparent border-2 rounded-xl px-4 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg min-h-35 resize-none placeholder-gray-400"></textarea>
                    </div>

                    {{-- submit --}}
                    <div class="pt-6 flex justify-center">
                        <button type="submit"
                            class="group text-green-700 font-semibold text-lg flex items-center gap-3 hover:gap-5 transition-all">
                            Daftar Sekarang
                            <span class="text-2xl group-hover:translate-x-1 transition-transform">
                                →
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>

    </div>

    @include('components.footer')
@endsection
