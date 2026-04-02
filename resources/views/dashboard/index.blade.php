@extends('layouts.app')

@section('content')
    <div class="space-y-6">
        <div>
            <h2 class="text-2xl font-bold text-gray-800">Dashboard Admin</h2>
            <p class="text-gray-600">Selamat datang di halaman admin panel.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-sm font-medium text-gray-500">Total Produk</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">120</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-sm font-medium text-gray-500">Total Transaksi</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">85</p>
            </div>

            <div class="bg-white rounded-lg shadow p-6">
                <h3 class="text-sm font-medium text-gray-500">Pendapatan Hari Ini</h3>
                <p class="text-3xl font-bold text-gray-800 mt-2">Rp 2.500.000</p>
            </div>
        </div>

        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">Informasi Dashboard</h3>
            <p class="text-gray-600">
                Halaman ini menampilkan ringkasan data admin panel seperti jumlah produk,
                transaksi, dan pendapatan harian.
            </p>
        </div>
    </div>
@endsection