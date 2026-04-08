<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register | Toko Indonesia</title>

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

    <div class="w-full max-w-sm"> <!-- diperkecil -->

        <!-- Logo -->
        <div class="text-center mb-6"> <!-- dikurangin -->
            <div class="w-14 h-14 bg-red-600 rounded-2xl flex items-center justify-center mx-auto mb-3 shadow-lg shadow-red-900/30">
                <span class="text-lg font-bold">TI</span>
            </div>
            <h2 class="text-xl font-bold">Daftar Akun</h2>
        </div>

        <!-- Card -->
        <div class="glass rounded-2xl p-6 shadow-xl"> <!-- padding diperkecil -->

            <form method="POST" action="{{ route('register') }}" class="space-y-3"> <!-- jarak diperkecil -->
                @csrf

                <!-- Name -->
                <div>
                    <label class="text-xs text-gray-400">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm"
                        required>
                </div>

                <!-- Email -->
                <div>
                    <label class="text-xs text-gray-400">Email</label>
                    <input type="email" name="email" value="{{ old('email') }}"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm"
                        required>
                </div>

                <!-- Role -->
                <div>
                    <label class="text-xs text-gray-400">Role</label>
                    <select name="role"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm">
                        <option value="gerai">Gerai</option>
                        <option value="gudang">Gudang</option>
                        <option value="admin">Admin</option>
                    </select>
                </div>

                <!-- Password -->
                <div>
                    <label class="text-xs text-gray-400">Password</label>
                    <input type="password" name="password"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm"
                        required>
                </div>

                <!-- Confirm Password -->
                <div>
                    <label class="text-xs text-gray-400">Konfirmasi</label>
                    <input type="password" name="password_confirmation"
                        class="w-full mt-1 px-3 py-2 rounded-lg bg-[#0f0f0f] border border-gray-800 focus:border-red-500 outline-none text-sm"
                        required>
                </div>

                <!-- Button -->
                <button
                    class="w-full py-2.5 mt-2 bg-red-600 hover:bg-red-700 rounded-lg font-semibold text-sm transition-all">
                    Daftar
                </button>

                <!-- Link -->
                <p class="text-center text-xs text-gray-400 mt-2">
                    Sudah punya akun?
                    <a href="{{ route('login') }}" class="text-red-500 hover:underline">
                        Login
                    </a>
                </p>

            </form>

        </div>
    </div>

</body>
</html>