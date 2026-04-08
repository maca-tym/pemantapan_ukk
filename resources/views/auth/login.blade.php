<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login | Toko Indonesia</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body { font-family: 'Instrument Sans', sans-serif; }
        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(12px);
            border: 1px solid rgba(255,255,255,0.08);
        }
    </style>
</head>

<body class="bg-[#050505] text-white flex items-center justify-center min-h-screen px-4">

    <div class="w-full max-w-sm">

        <!-- Logo -->
        <div class="text-center mb-6">
            <div class="w-14 h-14 bg-red-600 rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg shadow-red-900/30">
                <span class="text-lg font-bold">TI</span>
            </div>
            <h2 class="text-xl font-bold">Masuk Akun</h2>
            <p class="text-gray-400 text-xs">Toko Indonesia Enterprise</p>
        </div>

        <!-- Card -->
        <div class="glass rounded-2xl p-6 shadow-xl">

            <!-- Session Status -->
            <x-auth-session-status class="mb-3 text-green-500 text-sm" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}" class="space-y-3">
                @csrf

                <!-- Email -->
                <div>
                    <label class="text-xs text-gray-400">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm"
                        required autofocus>
                    <x-input-error :messages="$errors->get('email')" class="mt-1 text-xs text-red-500"/>
                </div>

                <!-- Password -->
                <div>
                    <label class="text-xs text-gray-400">Password</label>
                    <input type="password" name="password"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm"
                        required>
                    <x-input-error :messages="$errors->get('password')" class="mt-1 text-xs text-red-500"/>
                </div>

                <!-- Remember -->
                <div class="flex items-center justify-between text-xs text-gray-400">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" class="accent-red-600">
                        Remember me
                    </label>

                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="hover:text-red-500">
                            Lupa password?
                        </a>
                    @endif
                </div>

                <!-- Button -->
                <button
                    class="w-full py-2.5 bg-red-600 hover:bg-red-700 rounded-lg font-semibold text-sm transition-all">
                    Masuk
                </button>

                <!-- Link Register -->
                <p class="text-center text-xs text-gray-400 mt-2">
                    Belum punya akun?
                    <a href="{{ route('register') }}" class="text-red-500 hover:underline">
                        Daftar
                    </a>
                </p>

            </form>

        </div>
    </div>

</body>
</html>