<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Toko Indonesia | Enterprise</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,600,800" rel="stylesheet" />

    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <script src="https://cdn.tailwindcss.com"></script>
    @endif

    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        .mesh-gradient {
            background-color: #ff2d20;
            background-image: 
                radial-gradient(at 0% 0%, hsla(253,16%,7%,1) 0, transparent 50%), 
                radial-gradient(at 50% 0%, hsla(225,39%,30%,1) 0, transparent 50%), 
                radial-gradient(at 100% 0%, hsla(339,49%,30%,1) 0, transparent 50%);
        }
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
        }
    </style>
</head>
<body class="bg-[#050505] text-white antialiased overflow-hidden">

    <div class="flex min-h-screen">
        <div class="hidden lg:flex w-1/2 mesh-gradient relative items-center justify-center p-12">
            <div class="absolute inset-0 bg-black/20"></div>
            
            <div class="relative z-10 max-w-lg">
                <h1 class="text-6xl font-extrabold leading-tight mb-6">
                    Kelola Toko <br> <span class="text-red-500">Indonesia</span> Jadi Lebih Mudah.
                </h1>
                <p class="text-lg text-gray-300 mb-8">
                    Sistem integrasi satu pintu untuk Gerai, Gudang, dan Administrasi. Pantau stok dan penjualan secara real-time.
                </p>
                <div class="flex gap-4">
                    <div class="glass p-4 rounded-2xl">
                        <p class="text-2xl font-bold italic">100%</p>
                        <p class="text-xs text-gray-400">Produk Lokal</p>
                    </div>
                    <div class="glass p-4 rounded-2xl">
                        <p class="text-2xl font-bold italic">Secure</p>
                        <p class="text-xs text-gray-400">Encrypted Data</p>
                    </div>
                </div>
            </div>

            <div class="absolute bottom-[-10%] left-[-10%] w-96 h-96 bg-red-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20"></div>
        </div>

        <div class="w-full lg:w-1/2 flex items-center justify-center p-8 bg-[#0a0a0a]">
            <div class="w-full max-w-[400px]">
                
                <div class="lg:hidden flex flex-col items-center mb-12">
                    <div class="w-16 h-16 bg-red-600 rounded-2xl flex items-center justify-center mb-4 shadow-2xl shadow-red-900/50">
                        <span class="text-white text-2xl font-extrabold">TI</span>
                    </div>
                    <h2 class="text-3xl font-bold">Toko Indonesia</h2>
                </div>

                <div class="space-y-2 mb-10">
                    <p class="text-gray-400">Silakan pilih akses untuk melanjutkan ke sistem.</p>
                </div>

                @if (Route::has('login'))
                    <div class="grid gap-4">
                        @auth
                            <a href="{{ url('/dashboard') }}" 
                               class="group flex items-center justify-between w-full p-5 bg-white text-black rounded-2xl font-bold transition-all hover:bg-gray-200">
                                <span>Lanjutkan ke Dashboard</span>
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 group-hover:translate-x-1 transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                                </svg>
                            </a>
                        @else
                            <a href="{{ route('login') }}" 
                               class="group flex items-center justify-between w-full p-6 bg-red-600 rounded-3xl font-bold transition-all hover:bg-red-700 hover:scale-[1.02] shadow-2xl shadow-red-900/20">
                                <div>
                                    <span class="block text-lg">Masuk Akun</span>
                                    <span class="text-xs font-normal text-red-100 italic opacity-80">Sudah punya akses sistem</span>
                                </div>
                                <div class="bg-white/20 p-2 rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 16l-4-4m0 0l4-4m-4 4h14m-5 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h7a3 3 0 013 3v1" />
                                    </svg>
                                </div>
                            </a>

                            <div class="py-4 flex items-center gap-4 text-gray-700">
                                <div class="h-px flex-1 bg-gray-800"></div>
                                <span class="text-xs font-bold tracking-widest uppercase">Atau</span>
                                <div class="h-px flex-1 bg-gray-800"></div>
                            </div>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" 
                                   class="group flex items-center justify-between w-full p-6 bg-[#161615] border border-gray-800 rounded-3xl font-bold transition-all hover:border-gray-600 hover:bg-[#1f1f1e]">
                                    <div>
                                        <span class="block text-lg text-gray-200">Daftar Baru</span>
                                        <span class="text-xs font-normal text-gray-500 italic">Ajukan akses</span>
                                    </div>
                                    <div class="bg-gray-800 p-2 rounded-xl group-hover:bg-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                                        </svg>
                                    </div>
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif

            </div>
        </div>
    </div>

</body>
</html>