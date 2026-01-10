@extends('layout.layout')
@section('title', 'Beranda')
@include('components.navbar')
    @section('body')
        <div class="flex flex-col items-center justify-center min-h-[90vh] pt-20 bg-green-700 px-60">
            <div class="text-6xl font-bold text-white text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">HIMPUNAN MAHASISWA</h1>
                <h1 data-aos="fade-up" data-aos-duration="1500" class="mt-3">SISTEM INFORMASI</h1>
            </div>
            <div class="text-center text-white mt-5 px-32">
                <p data-aos="fade-up" data-aos-duration="2000">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta molestias deleniti numquam, illo inventore consequatur ullam, ab minus adipisci veritatis ipsa possimus, voluptates magnam aliquid delectus pariatur commodi minima nihil.</p>
            </div>
        </div>
        <div class="px-60 pt-44 flex gap-20 items-center">
            <img src="/assets/img/logo.png" class="w-96 h-96 rounded-lg object-cover" alt="">
            <div>
                <div>
                    <h1 class="font-semibold">TENTANG KAMI</h1>
                </div>
                <div class="text-6xl font-bold mt-5">
                    <h1>Kabinet</h1>
                    <h1>Sibernetika</h1>
                </div>
                <div class="mt-5">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui itaque quo labore. Quas sed, similique amet sunt adipisci rem ipsum id aperiam fugiat qui minus necessitatibus voluptas aut distinctio ratione?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, maxime!</p>
                </div>
                <div class="mt-5">
                    <a href="" class="btn bg-green-700 text-white">Selengkapnya</a>
                </div>
            </div>
        </div>
        <img src="/assets/svg/wave-bottom.svg" alt="">
        <div class="flex flex-col pt-20 min-h-[90vh] bg-green-700 px-60">
            <div class="text-6xl font-bold text-white text-center">
                <h1 data-aos="fade-up" data-aos-duration="1000">Departemen</h1>
                <h1 data-aos="fade-up" data-aos-duration="1500" class="mt-3">HIMASI</h1>
            </div>
            <div class="grid grid-cols-3 gap-10">
                <div class="bg-white p-10 flex justify-center items-center">
                    <img src="/assets/img/pendidikan.png" class="w-40 h-40 rounded-lg" alt="">
                </div>
                <div class="bg-white p-10 flex justify-center items-center">
                    <img src="/assets/img/hukesma.png" class="w-40 h-40 rounded-lg" alt="">
                </div>
                <div class="bg-white p-10 flex justify-center items-center">
                    <img src="/assets/img/kominfo.png" class="w-40 h-40 rounded-lg" alt="">
                </div>
            </div>
        </div>
@endsection