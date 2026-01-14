<div class="drawer">
    <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />

    {{-- page --}}
    <div class="drawer-content">
        <div class="navbar bg-base-100 py-4 lg:py-7 px-4 lg:px-60 fixed z-50 justify-between">

            {{-- left --}}
            <div class="flex items-center justify-between xl:w-auto w-full gap-3">
                <div class="flex items-center">
                    <img src="/assets/img/logo.png" class="w-10 h-10 rounded-full object-cover" alt="">
                    <a class="text-xl font-bold text-green-700 ml-2">HIMASI UBSI</a>
                </div>
                <label for="mobile-drawer" class="btn btn-ghost lg:hidden">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </label>
            </div>

            {{-- desktop menu --}}
            <div class="hidden lg:flex">
                <ul class="menu menu-horizontal px-1">
                    <li><a href="{{ route('home') }}">Beranda</a></li>
                    <li><a href={{ route('about') }}>Tentang</a></li>
                    <li>
                        <details>
                            <summary>Departemen</summary>
                            <ul class="p-2 bg-base-100 w-40 z-99">
                                <li><a>Submenu 1</a></li>
                                <li><a>Submenu 2</a></li>
                            </ul>
                        </details>
                    </li>
                    <li><a href={{ route('program') }}>Proker</a></li>
                    <li><a href="/requirement">Perekrutan</a></li>
                </ul>
            </div>

            {{-- desktop action --}}
            <div class="hidden lg:flex gap-3">
                <a class="btn btn-ghost">Masuk</a>
                <a class="btn bg-green-700 text-white hover:bg-green-800">
                    Hubungi Kami
                </a>
            </div>
        </div>
    </div>

    {{-- sidebar mobile --}}
    <div class="drawer-side lg:hidden z-999 bg-black/30 backdrop-blur-sm">
        <label for="mobile-drawer" class="drawer-overlay"></label>

        <aside class="menu p-6 w-72 min-h-full bg-base-100 xl-hidden">
            <div class="flex items-center gap-3 mb-6">
                <img src="/assets/img/logo.png" class="w-10 h-10 rounded-full" alt="">
                <span class="font-bold text-lg text-green-700">HIMASI UBSI</span>
            </div>

            <ul class="space-y-1">
                <li><a href="/">Beranda</a></li>
                <li><a href="/about">Tentang</a></li>

                <li>
                    <details>
                        <summary>Departemen</summary>
                        <ul>
                            <li><a>Submenu 1</a></li>
                            <li><a>Submenu 2</a></li>
                        </ul>
                    </details>
                </li>

                <li><a href="/proker">Proker</a></li>
                <li><a href="/requirement">Perekrutan</a></li>
            </ul>

            <div class="mt-8 flex flex-col gap-3">
                <a class="btn btn-outline btn-success">Masuk</a>
                <a class="btn bg-green-700 text-white hover:bg-green-800">
                    Hubungi Kami
                </a>
            </div>
        </aside>
    </div>
</div>
