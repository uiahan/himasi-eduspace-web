@extends('layout.layout')
@section('title', 'Beranda')
@include('components.navbar')
@section('body')

    {{-- header --}}
    <div class="relative xl:min-h-[90vh] pt-52 xl:pt-14 xl:px-60 pb-32 xl:pb-0 bg-cover bg-center"
        style="background-image: url('/assets/img/himasi.png');">
        <div class="absolute inset-0 bg-green-700/70 backdrop-blur-sm"></div>
        <div class="relative z-10 flex flex-col items-center justify-center xl:h-full">
            <div class="xl:text-6xl text-3xl font-bold text-white text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">
                    HIMPUNAN MAHASISWA
                </h1>
                <h1 data-aos="fade-up" data-aos-duration="1500" class="mt-3">
                    SISTEM INFORMASI
                </h1>
            </div>

            <div class="xl:text-center px-5 text-white mt-5 xl:px-32 text-justify">
                <p data-aos="fade-up" data-aos-duration="2000">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta
                    molestias deleniti numquam, illo inventore consequatur ullam,
                    ab minus adipisci veritatis ipsa possimus.
                </p>
            </div>
        </div>
    </div>

    {{-- about --}}
    <div class="xl:px-60 px-5 xl:pt-44 pt-32 xl:pb-0 pb-24 xl:flex gap-20 items-center">
        <div class="xl:text-6xl text-3xl font-bold xl:hidden">
            <h1 data-aos="fade-up" data-aos-duration="2000">Kabinet Sibernetika</h1>
        </div>
        <div class="xl:w-96 xl:h-96 xl:hidden flex justify-center mt-3">
            <img src="/assets/img/logo.png" class="xl:w-96 xl:h-96 w-full h-32 rounded-xl object-cover" data-aos="fade-up"
                data-aos-duration="1000" alt="">
        </div>
        <img src="/assets/img/logo.png" class="xl:w-96 hidden xl:block xl:h-96 w-60 h-60 rounded-xl object-cover"
            data-aos="fade-up" data-aos-duration="1000" alt="">
        <div>
            <div class="hidden xl:block">
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="xl:text-6xl text-3xl font-bold mt-5 hidden xl:block">
                <h1 data-aos="fade-up" data-aos-duration="2000">Kabinet</h1>
                <h1 data-aos="fade-up" data-aos-duration="2500">Sibernetika</h1>
            </div>
            <div class="xl:hidden mt-5">
                <h1 class="font-semibold" data-aos="fade-up" data-aos-duration="1500">TENTANG KAMI</h1>
            </div>
            <div class="xl:mt-5 mt-3">
                <p data-aos="fade-up" data-aos-duration="3000" class="text-justify">Lorem ipsum dolor sit amet consectetur
                    adipisicing elit. Qui
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
    <img src="/assets/svg/wave-bottom.svg" alt="" class="w-full -mb-1">
    <section class="relative bg-linear-to-b from-green-700 to-green-800 xl:px-60 px-5 pt-24 pb-32">
        <div class="text-center mb-14">
            <h1 class="xl:text-6xl text-3xl font-bold text-white" data-aos="fade-up" data-aos-duration="1000">
                Departemen
            </h1>
            <p class="text-green-100 mt-4 max-w-2xl mx-auto" data-aos="fade-up" data-aos-duration="1500">
                Bersinergi membangun mahasiswa Sistem Informasi yang aktif, kreatif, dan berdaya saing
            </p>
        </div>
        <div class="grid xl:grid-cols-3 grid-cols-2 gap-6 xl:gap-10">
            <div class="group bg-white backdrop-blur-lg border border-white
                   rounded-2xl p-8 flex items-center justify-center
                   hover:-translate-y-2 hover:shadow-2xl transition-all duration-300"
                data-aos="fade-up" data-aos-duration="1800">
                <img src="/assets/img/pendidikan.png" class="w-28 xl:w-32 group-hover:scale-110 transition duration-300"
                    alt="">
            </div>
            <div class="group bg-white backdrop-blur-lg border border-white rounded-2xl p-8 flex items-center justify-center hover:-translate-y-2 hover:shadow-2xl transition-all duration-300"
                data-aos="fade-up" data-aos-duration="1900">
                <img src="/assets/img/hukesma.png" class="w-40 xl:w-52 group-hover:scale-110 transition duration-300"
                    alt="">
            </div>
            <div class="group bg-white backdrop-blur-lg border border-white rounded-2xl p-8 flex items-center justify-center hover:-translate-y-2 hover:shadow-2xl transition-all duration-300"
                data-aos="fade-up" data-aos-duration="2000">
                <img src="/assets/img/kominfo.png" class="w-28 xl:w-32 group-hover:scale-110 transition duration-300"
                    alt="">
            </div>
            <div class="group bg-white backdrop-blur-lg border border-white rounded-2xl p-8 flex items-center justify-center hover:-translate-y-2 hover:shadow-2xl transition-all duration-300"
                data-aos="fade-up" data-aos-duration="2100">
                <img src="/assets/img/pm.jpg" class="w-40 xl:w-52 group-hover:scale-110 transition duration-300"
                    alt="">
            </div>
            <div class="group bg-white backdrop-blur-lg border border-white rounded-2xl p-8 flex items-center justify-center hover:-translate-y-2 hover:shadow-2xl transition-all duration-300"
                data-aos="fade-up" data-aos-duration="2200">
                <img src="/assets/img/psdm.png" class="w-36 xl:w-48 group-hover:scale-110 transition duration-300"
                    alt="">
            </div>
        </div>
    </section>

    {{-- program --}}
    <div class="min-h-screen xl:px-60 px-5 py-32">
        <div class="flex justify-center">
            <div class="text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000" class="xl:text-6xl text-3xl font-bold">Program Kami</h1>
                <p class="mt-5 text-gray-600 xl:text-lg line-clamp-2" data-aos="fade-up" data-aos-duration="1500">
                    Melalui program kerja, HIMASI hadir mendampingi mahasiswa Sistem Informasi
                    dalam bertumbuh, belajar, dan berkontribusi secara nyata.
                </p>
            </div>
        </div>
        <div class="grid xl:grid-cols-3 grid-cols-1 gap-10 xl:mt-16 mt-10">
            <div class="card bg-base-100 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
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
            <div class="card bg-base-100 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
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
            <div class="card bg-base-100 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
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
            <div class="card bg-base-100 shadow-lg" data-aos="fade-up" data-aos-duration="1500">
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
    <div class="min-h-screen xl:px-60 px-5 py-32 bg-gray-100">
        <div class="flex justify-center">
            <div class="text-center max-w-3xl">
                <h1 data-aos="fade-up" data-aos-duration="1000" class="xl:text-6xl text-3xl font-bold">Galeri HIMASI</h1>
                <p class="mt-5 text-gray-600 xl:text-lg line-clamp-2" data-aos="fade-up" data-aos-duration="1500">
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
    <div class="min-h-screen xl:px-60 px-5 pb-32 xl:pb-24 pt-32 bg-white flex items-center justify-center">
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
