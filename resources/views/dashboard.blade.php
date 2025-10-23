@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
<div class="mx-10 mt-10">
    <div class="bg-[#4285F4] text-white rounded-xl shadow-md p-6 mb-8">
        <h1 class="text-2xl font-bold">Selamat Datang, {{ $username ?? 'Mahasiswa' }} 👋</h1>
        <p class="text-sm mt-2">Semangat menyelesaikan tugas-tugasmu hari ini!</p>
    </div>

    <div class="grid grid-cols-3 gap-6">
        <div class="bg-white rounded-xl shadow-lg p-6 text-center border border-gray-200 hover:shadow-xl transition">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Total Tugas</h2>
            <p class="text-4xl font-bold text-blue-600">{{ $total }}</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 text-center border border-gray-200 hover:shadow-xl transition">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Sudah Dikumpul</h2>
            <p class="text-4xl font-bold text-green-600">{{ $selesai }}</p>
        </div>

        <div class="bg-white rounded-xl shadow-lg p-6 text-center border border-gray-200 hover:shadow-xl transition">
            <h2 class="text-lg font-semibold text-gray-700 mb-2">Belum Dikumpul</h2>
            <p class="text-4xl font-bold text-red-600">{{ $belum }}</p>
        </div>
    </div>
</div>
@endsection
