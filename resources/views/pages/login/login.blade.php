@extends('layout.layout')

@section('title', 'Login')

@section('body')
    <main class="min-h-screen flex items-center justify-center px-4 bg-gray-100">

        <div class="w-full max-w-md bg-white rounded-xl shadow-lg p-8">

            <!-- Header -->
            <div class="text-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">Welcome Back</h1>
                <p class="text-gray-500 text-sm mt-1">Silakan login ke akun Anda</p>
            </div>

            <!-- Form -->
            <form class="space-y-5">

                <!-- Email -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Email Address
                    </label>
                    <input type="email" placeholder="name@email.com"
                        class="w-full px-4 py-2.5 rounded-lg border border-gray-300 bg-white 
                           focus:outline-none focus:ring-2 focus:ring-green-500 
                           focus:border-green-500 transition"
                        required />
                </div>

                <!-- Password -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">
                        Password
                    </label>

                    <div class="relative">
                        <input id="password" type="password" placeholder="********"
                            class="w-full px-4 py-2.5 pr-12 rounded-lg border border-gray-300 bg-white 
                               focus:outline-none focus:ring-2 focus:ring-green-500 
                               focus:border-green-500 transition"
                            required />

                        <!-- Eye Button -->
                        <button type="button" onclick="togglePassword()"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-gray-400 hover:text-gray-600 transition">
                            <svg id="eye-icon" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between text-sm">
                    <label class="flex items-center gap-2 text-gray-600">
                        <input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500">
                        Remember me
                    </label>
                </div>

                <!-- Button -->
                <button type="submit"
                    class="w-full bg-green-600 hover:bg-green-700 text-white py-2.5 rounded-lg font-semibold transition shadow-sm">
                    Sign In
                </button>

            </form>

            <!-- Footer Info -->
            <p class="text-center text-gray-500 text-sm mt-6">
                Tidak memiliki akun?
                <span class="font-medium text-gray-700">Silakan hubungi pihak terkait.</span>
            </p>

        </div>

    </main>

    <script>
        function togglePassword() {
            const input = document.getElementById('password');
            const icon = document.getElementById('eye-icon');

            if (input.type === 'password') {
                input.type = 'text';
                icon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 3l18 18M10.585 10.585a3 3 0 104.243 4.243" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9.88 9.88 3 3m6.88 6.88L21 21M12 5c4.478 0 8.268 2.943 9.543 7a9.973 9.973 0 01-4.132 5.411" />
        `;
            } else {
                input.type = 'password';
                icon.innerHTML = `
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
        `;
            }
        }
    </script>
@endsection
