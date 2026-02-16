<footer class="bg-green-800 text-white pt-32 pb-12 xl:px-60 px-6">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-20">
        
        {{-- Brand Section --}}
        <div class="space-y-6">
            <div class="flex items-center gap-4">
                <img src="/assets/img/logo.png" class="w-16 h-16 rounded-2xl bg-white p-1 shadow-lg" alt="Logo HIMASI">
                <div>
                    <h2 class="text-2xl font-black tracking-tighter leading-none">HIMASI</h2>
                    <p class="text-green-300 text-xs font-bold uppercase tracking-widest mt-1">UBSI Sukabumi</p>
                </div>
            </div>
            <p class="text-green-100/70 leading-relaxed text-sm">
                Wadah kolaborasi dan inovasi mahasiswa Sistem Informasi untuk menciptakan masa depan digital yang lebih inklusif.
            </p>
            {{-- Social Media
            <div class="flex gap-4">
                <a href="#" class="w-10 h-10 rounded-xl bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all hover:-translate-y-1 shadow-md">
                    <i class="fab fa-instagram text-lg"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all hover:-translate-y-1 shadow-md">
                    <i class="fab fa-youtube text-lg"></i>
                </a>
                <a href="#" class="w-10 h-10 rounded-xl bg-green-700 hover:bg-green-600 flex items-center justify-center transition-all hover:-translate-y-1 shadow-md">
                    <i class="fab fa-linkedin text-lg"></i>
                </a>
            </div> --}}
        </div>

        {{-- Quick Links --}}
        <div>
            <h3 class="text-white font-bold mb-6 text-lg">Navigasi</h3>
            <ul class="space-y-4 text-green-100/70 text-sm font-medium">
                <li><a href="{{ route('home') }}" class="hover:text-white transition-colors">Beranda</a></li>
                <li><a href="{{ route('about') }}" class="hover:text-white transition-colors">Tentang Kami</a></li>
                <li><a href="{{ route('program') }}" class="hover:text-white transition-colors">Program Kerja</a></li>
                <li><a href="{{ route('recruitment') }}" class="hover:text-white transition-colors">Perekrutan</a></li>
                <li><a href="{{ route('courses.index') }}" class="hover:text-white transition-colors">Kursus</a></li>
                <li><a href="{{ route('galleries') }}" class="hover:text-white transition-colors">Galeri</a></li>
            </ul>
        </div>

        {{-- Departments --}}
        <div>
            <h3 class="text-white font-bold mb-6 text-lg">Departemen</h3>
            <ul class="space-y-4 text-green-100/70 text-sm">
                @foreach ($departmentList as $item)
                    <li><a href="{{ route('department', $item->id) }}" class="hover:text-white transition-colors">{{ $item->name }}</a></li>
                @endforeach
            </ul>
        </div>

        {{-- Contact Info --}}
        <div>
            <h3 class="text-white font-bold mb-6 text-lg">Kontak</h3>
            <ul class="space-y-4 text-green-100/70 text-sm">
                <li class="flex items-start gap-3">
                    <span class="text-green-400">📍</span>
                    <span>Jl. Veteran II No.20A, Selabatu, Kec. Cikole, Kota Sukabumi, Jawa Barat 43114</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-green-400">✉️</span>
                    <span>himasi.sukabumi@ubsi.ac.id</span>
                </li>
            </ul>
        </div>
    </div>

    {{-- Bottom Bar --}}
    <div class="pt-8 border-t border-green-700 flex flex-col md:flex-row justify-between items-center gap-4 text-xs font-medium text-green-200/50">
        <p>© 2026 HIMASI UBSI. All rights reserved.</p>
        <div class="flex gap-8">
            <a href="#" class="hover:text-white transition-colors">Privacy Policy</a>
            <a href="#" class="hover:text-white transition-colors">Terms of Service</a>
        </div>
    </div>
</footer>