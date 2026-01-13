<div class="navbar bg-base-100 py-4 lg:py-7 z-50 px-4 lg:px-60 fixed justify-between">
    <!-- Left -->
    <div class="flex items-center gap-3">
        <div class="dropdown lg:hidden">
            <label tabindex="0" class="btn btn-ghost">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </label>
            <ul tabindex="0"
                class="menu menu-sm dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52 z-[99]">
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
        </div>

        <img src="/assets/img/logo.png" class="w-10 h-10 rounded-full object-cover" alt="">
        <a class="text-xl font-bold text-green-700">HIMASI UBSI</a>
    </div>

    <div class="hidden lg:flex">
        <ul class="menu menu-horizontal px-1">
            <li><a href="/">Beranda</a></li>
            <li><a href="/about">Tentang</a></li>
            <li>
                <details>
                    <summary>Departemen</summary>
                    <ul class="p-2 bg-base-100 w-40 z-[99]">
                        <li><a>Submenu 1</a></li>
                        <li><a>Submenu 2</a></li>
                    </ul>
                </details>
            </li>
            <li><a href="/proker">Proker</a></li>
            <li><a href="/requirement">Perekrutan</a></li>
        </ul>
    </div>

    <div class="hidden lg:flex gap-3">
        <a class="btn btn-ghost">Masuk</a>
        <a class="btn bg-green-700 text-white hover:bg-green-800">
            Hubungi Kami
        </a>
    </div>
</div>