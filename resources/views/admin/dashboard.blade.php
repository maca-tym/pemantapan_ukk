<x-app-layout>
    <div class="p-6 space-y-6">

        <!-- Header -->
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Dashboard Admin</h1>
            <p class="text-sm text-gray-500">
                Selamat datang, 
                <span class="font-semibold text-red-500">{{ auth()->user()->name }}</span> 👋
            </p>
        </div>

        <!-- Welcome Banner -->
        <div class="bg-gradient-to-r from-red-500 to-red-600 text-white p-6 rounded-2xl shadow">
            <h2 class="text-lg font-semibold">Toko Indonesia System</h2>
            <p class="text-sm opacity-90 mt-1">
                Kelola semua data toko dengan cepat dan efisien dalam satu dashboard.
            </p>
        </div>

    </div>
</x-app-layout>