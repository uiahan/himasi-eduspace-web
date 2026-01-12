@extends('layout.layout')
@section('title', 'Beranda')
@include('components.navbar')
@section('body')
    {{-- header --}}
    <div class="flex flex-col items-center justify-center min-h-[90vh] pt-20 bg-green-700 px-60">
        <div class="text-6xl font-bold text-white text-center">
            <h1 data-aos="fade-up" data-aos-duration="1000">HIMPUNAN MAHASISWA</h1>
            <h1 data-aos="fade-up" data-aos-duration="1500" class="mt-3">SISTEM INFORMASI</h1>
        </div>
        <div class="text-center text-white mt-5 px-32">
            <p data-aos="fade-up" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                molestias deleniti numquam, illo inventore consequatur ullam, ab minus adipisci veritatis ipsa possimus,
                voluptates magnam aliquid delectus pariatur commodi minima nihil.</p>
        </div>
    </div>

    {{-- about --}}
    <div class="px-60 pt-44 flex gap-20 items-center">
        <img src="/assets/img/logo.png" class="w-96 h-96 rounded-xl object-cover" data-aos="fade-up"
            data-aos-duration="1000" alt="">
        <div>
            <div>
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="text-6xl font-bold mt-5">
                <h1 data-aos="fade-up" data-aos-duration="2000">Kabinet</h1>
                <h1 data-aos="fade-up" data-aos-duration="2500">Sibernetika</h1>
            </div>
            <div class="mt-5">
                <p data-aos="fade-up" data-aos-duration="3000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                    itaque quo labore. Quas sed, similique amet sunt adipisci rem ipsum id aperiam fugiat qui minus
                    necessitatibus voluptas aut distinctio ratione?Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Consequuntur, maxime!</p>
            </div>
            <div class="mt-5">
                <a href="" class="btn bg-green-700 text-white" data-aos="fade-up"
                    data-aos-duration="3000">Selengkapnya</a>
            </div>
        </div>
    </div>

    {{-- department --}}
    <img src="/assets/svg/wave-bottom.svg" alt="">
    <div class="flex flex-col pb-32 bg-green-700 px-60">
        <div class="text-6xl font-bold text-white text-center">
            <h1 data-aos="fade-up" data-aos-duration="1000">Departemen</h1>
            <h1 data-aos="fade-up" data-aos-duration="1500" class="mt-3">HIMASI</h1>
        </div>
        <div class="grid grid-cols-3 gap-10 mt-10">
            <div class="bg-white flex justify-center p-7 rounded-xl items-center" data-aos="fade-up"
                data-aos-duration="2000">
                <img src="/assets/img/pendidikan.png" class="w-32" alt="">
            </div>
            <div class="bg-white flex justify-center p-7 rounded-xl items-center" data-aos="fade-up"
                data-aos-duration="2000">
                <img src="/assets/img/hukesma.png" class="w-52" alt="">
            </div>
            <div class="bg-white flex justify-center p-7 rounded-xl items-center" data-aos="fade-up"
                data-aos-duration="2000">
                <img src="/assets/img/kominfo.png" class="w-32" alt="">
            </div>
            <div class="bg-white flex justify-center p-7 rounded-xl items-center" data-aos="fade-up"
                data-aos-duration="2000">
                <img src="/assets/img/pm.jpg" class="w-52" alt="">
            </div>
            <div class="bg-white flex justify-center p-7 rounded-xl items-center" data-aos="fade-up"
                data-aos-duration="2000">
                <img src="/assets/img/psdm.png" class="w-48" alt="">
            </div>
        </div>
    </div>

    {{-- program --}}
    <div class="min-h-screen px-60 py-32">
        <div class="flex justify-center">
            <div class="text-6xl font-bold text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000">Program Kami</h1>
                <p class="mt-5 text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500">
                    Melalui program kerja, HIMASI hadir mendampingi mahasiswa Sistem Informasi
                    dalam bertumbuh, belajar, dan berkontribusi secara nyata.
                </p>
            </div>
        </div>
        <div class="grid grid-cols-3 gap-10 mt-16">
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp" alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
            <div class="card bg-base-100 w-96 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
                <figure>
                    <img src="https://img.daisyui.com/images/stock/photo-1606107557195-0e29a4b5b4aa.webp"
                        alt="Shoes" />
                </figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Card Title
                        <div class="badge badge-secondary">NEW</div>
                    </h2>
                    <p>A card component has a figure, a body part, and inside body there are title and actions parts</p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Fashion</div>
                        <div class="badge badge-outline">Products</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- galeri --}}
    <div class="min-h-screen px-60 py-32 bg-gray-100">
        <div class="flex justify-center">
            <div class="text-6xl font-bold text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000">Galeri HIMASI</h1>
                <p class="mt-5 text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500">
                    Melalui program kerja, HIMASI hadir mendampingi mahasiswa Sistem Informasi
                    dalam bertumbuh, belajar, dan berkontribusi secara nyata.
                </p>
            </div>
        </div>
        <div class="mt-16 grid grid-cols-2 gap-10">
            <img src="/assets/img/logo.png" class="h-80 w-full object-cover rounded-xl" alt="">
            <img src="/assets/img/logo.png" class="h-80 w-full object-cover rounded-xl" alt="">
        </div>
        <div class="mt-10 grid grid-cols-3 gap-10">
            <img src="/assets/img/logo.png" class="h-80 w-full object-cover rounded-xl" alt="">
            <img src="/assets/img/logo.png" class="h-80 w-full object-cover rounded-xl" alt="">
            <img src="/assets/img/logo.png" class="h-80 w-full object-cover rounded-xl" alt="">
        </div>
    </div>

    {{-- kotak aspirasi --}}
    <div class="min-h-screen px-60 pt-32 bg-white flex items-center justify-center">
        <div class="w-full max-w-3xl">
            <div class="text-center mb-16">
                <h1 class="text-6xl font-bold" data-aos="fade-up" data-aos-duration="1000">
                    Kotak Aspirasi
                </h1>
                <p class="mt-5 text-gray-600 text-lg" data-aos="fade-up" data-aos-duration="1500">
                    Suaramu berarti. Kirimkan kritik, saran, atau pesan dengan tenang dan jujur.
                    Kamu boleh anonim
                </p>
            </div>
            <form action="" method="POST" class="space-y-12" data-aos="fade-up" data-aos-duration="2000">
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Nama <span class="text-gray-400">(opsional)</span>
                    </label>
                    <input type="text" placeholder="Tulis namamu atau biarkan kosong"
                        class="w-full bg-transparent border-2 rounded-xl px-3 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg placeholder-gray-400" />
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Kategori Aspirasi
                    </label>
                    <select
                        class="w-full bg-transparent border-2 rounded-xl px-3 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg">
                        <option disabled selected>Pilih kategori</option>
                        <option>Kritik</option>
                        <option>Saran</option>
                        <option>Apresiasi</option>
                        <option>Lainnya</option>
                    </select>
                </div>
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-2">
                        Pesan
                    </label>
                    <textarea placeholder="Tulis pesanmu di sini..."
                        class="w-full bg-transparent border-2 rounded-xl px-3 border-gray-300 focus:border-green-700 focus:outline-none py-3 text-lg min-h-30 resize-none placeholder-gray-400"></textarea>
                </div>
                <div class="flex items-center gap-3">
                    <input type="checkbox" class="checkbox checkbox-success" />
                    <span class="text-gray-600 text-sm">
                        Kirim sebagai anonim
                    </span>
                </div>
                <div class="pt-6">
                    <button type="submit"
                        class="group text-green-700 font-semibold text-lg flex items-center gap-3 hover:gap-5 transition-all">
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
