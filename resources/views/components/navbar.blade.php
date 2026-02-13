<div class="drawer">
    <input id="mobile-drawer" type="checkbox" class="drawer-toggle" />

    {{-- page content --}}
    <div class="drawer-content">
        <div class="fixed top-0 w-full z-50 px-4 py-4 lg:px-8">
            <div
                class="navbar bg-white/70 backdrop-blur-sm border border-white/20 shadow-lg rounded-2xl max-w-7xl mx-auto transition-all duration-300">

                {{-- Left: Logo --}}
                <div class="navbar-start">
                    <div class="flex items-center gap-3">
                        <img src="/assets/img/logo.png" class="w-10 h-10 rounded-xl object-cover shadow-sm"
                            alt="Logo">
                        <a class="text-xl font-extrabold tracking-tight text-green-700 sm:block">HIMASI</a>
                    </div>
                </div>

                {{-- Center: Desktop Menu --}}
                <div class="navbar-center hidden lg:flex">
                    <ul class="menu menu-horizontal px-1 gap-1">
                        <li>
                            <a href="{{ route('home') }}"
                                class="rounded-lg font-medium {{ request()->routeIs('home') ? 'bg-green-700 text-white' : 'hover:bg-green-50' }}">
                                Beranda
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('about') }}"
                                class="rounded-lg font-medium {{ request()->routeIs('about') ? 'bg-green-700 text-white' : 'hover:bg-green-50' }}">
                                Tentang
                            </a>
                        </li>

                        {{-- Dropdown Department --}}
                        <li tabindex="0" class="dropdown dropdown-hover">
                            <div role="button"
                                class="rounded-lg font-medium flex items-center gap-1 {{ request()->routeIs('department') ? 'bg-green-700 text-white' : 'hover:bg-green-200' }}">
                                Departemen
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 opacity-50" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 9l-7 7-7-7" />
                                </svg>
                            </div>
                            <ul
                                class="dropdown-content z-[100] menu p-2 shadow-2xl bg-white border border-gray-100 rounded-2xl w-56 mt-0">
                                @foreach ($departmentList as $item)
                                    <li>
                                        <a href="{{ route('department', $item->slug) }}"
                                            class="rounded-xl py-3 {{ request()->fullUrlIs(route('department', $item->slug)) ? 'bg-green-50 text-green-700 font-bold' : 'hover:bg-green-200' }}">
                                            {{ $item->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>

                        <li>
                            <a href="{{ route('program') }}"
                                class="rounded-lg font-medium {{ request()->routeIs('program*') ? 'bg-green-700 text-white' : 'hover:bg-green-200' }}">
                                Program
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('recruitment') }}"
                                class="rounded-lg font-medium {{ request()->routeIs('recruitment') ? 'bg-green-700 text-white' : 'hover:bg-green-200' }}">
                                Perekrutan
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('courses.index') }}"
                                class="rounded-lg font-medium {{ request()->routeIs('courses.index') ? 'bg-green-700 text-white' : 'hover:bg-green-200' }}">
                                Kursus
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('aspiration') }}"
                                class="rounded-lg font-medium {{ request()->routeIs('aspiration') ? 'bg-green-700 text-white' : 'hover:bg-green-200' }}">
                                Kotak Aspirasi
                            </a>
                        </li>
                    </ul>
                </div>

                {{-- Right: Actions & Mobile Toggle --}}
                <div class="navbar-end gap-2">
                    <div class="hidden lg:flex gap-2">
                        {{-- <a class="btn btn-ghost btn-sm lowercase font-medium">Masuk</a> --}}
                        <a href="https://www.instagram.com/himasiubsismi/"
                            class="btn btn-sm bg-green-700 hover:bg-green-800 text-white border-none rounded-xl px-6">
                            Hubungi Kami
                        </a>
                    </div>

                    {{-- Mobile Toggle Button --}}
                    <label for="mobile-drawer" class="btn btn-ghost lg:hidden">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </label>
                </div>
            </div>
        </div>

        {{-- <div class="h-24"></div> --}}

    </div>

    {{-- Sidebar Mobile (Aesthetic Version) --}}
    <div class="drawer-side z-[100]">
        <label for="mobile-drawer" class="drawer-overlay bg-black/40 backdrop-blur-sm"></label>
        <aside class="menu p-6 w-80 min-h-full bg-white/90 backdrop-blur-xl text-base-content">
            <div class="flex items-center gap-4 mb-8 px-2">
                <img src="/assets/img/logo.png" class="w-12 h-12 rounded-2xl shadow-md" alt="Logo">
                <span class="font-bold text-xl text-green-700">HIMASI</span>
            </div>

            <ul class="space-y-2 text-md font-medium">
                <li>
                    <a href="{{ route('home') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('home') ? 'bg-green-700 text-white' : '' }}">
                        Beranda
                    </a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('about') ? 'bg-green-700 text-white' : '' }}">
                        Tentang
                    </a>
                </li>
                <li>
                    <details {{ request()->routeIs('department') ? 'open' : '' }}>
                        <summary
                            class="py-3 rounded-xl {{ request()->routeIs('department') ? 'text-green-700 font-bold' : '' }}">
                            Departemen
                        </summary>
                        <ul class="mt-2 space-y-1 ml-4 border-l-2 border-green-100">
                            @foreach ($departmentList as $item)
                                <li>
                                    <a href="{{ route('department', $item->slug) }}"
                                        class="rounded-lg {{ request()->fullUrlIs(route('department', $item->slug)) ? 'text-green-700 font-bold bg-green-50' : '' }}">
                                        {{ $item->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </details>
                </li>
                <li>
                    <a href="{{ route('program') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('program*') ? 'bg-green-700 text-white' : '' }}">
                        Program
                    </a>
                </li>
                <li>
                    <a href="{{ route('recruitment') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('recruitment') ? 'bg-green-700 text-white' : '' }}">
                        Perekrutan
                    </a>
                </li>
                <li>
                    <a href="{{ route('recruitment') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('recruitment') ? 'bg-green-700 text-white' : '' }}">
                        Kursus
                    </a>
                </li>
                <li>
                    <a href="{{ route('recruitment') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('recruitment') ? 'bg-green-700 text-white' : '' }}">
                        Berita
                    </a>
                </li>
                <li>
                    <a href="{{ route('aspiration') }}"
                        class="py-3 rounded-xl {{ request()->routeIs('aspiration') ? 'bg-green-700 text-white' : '' }}">
                        Kotak Aspirasi
                    </a>
                </li>
            </ul>
            <div class="mt-auto flex flex-col gap-3 pt-10">
                {{-- <a class="btn btn-outline border-gray-200 rounded-xl">Masuk</a> --}}
                <a href="https://www.instagram.com/himasiubsismi/"
                    class="btn bg-green-700 text-white border-none hover:bg-green-800 rounded-xl">
                    Hubungi Kami
                </a>
            </div>
        </aside>
    </div>
</div>
