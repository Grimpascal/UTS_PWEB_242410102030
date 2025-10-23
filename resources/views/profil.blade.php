@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="mx-10 mt-10">
  <h1 class="text-3xl font-bold mb-6 text-gray-800">{{ $title }}</h1>

  <div class="bg-white rounded-xl shadow-md p-8 border border-gray-200 w-2/3 mx-auto">
    <div class="flex items-center gap-6">
      <img src="https://ui-avatars.com/api/?name={{ urlencode($username) }}&background=3b82f6&color=fff&size=100"
           alt="Foto Profil"
           class="rounded-full shadow-md">
      <div>
        <h2 class="text-2xl font-semibold text-gray-800 mb-2">{{ $username }}</h2>
        <p class="text-gray-600"><span class="font-semibold">NIM:</span> {{ $nim }}</p>
        <p class="text-gray-600"><span class="font-semibold">Program Studi:</span> {{ $prodi }}</p>
        <p class="text-gray-600"><span class="font-semibold">Email:</span> {{ $email }}</p>
      </div>
    </div>
    <div class="mt-8">
      <h3 class="text-lg font-semibold text-gray-700 mb-2">Tentang Saya</h3>
      <p class="text-gray-600 leading-relaxed">
        Halo, saya {{ $username }}! Saat ini saya sedang menempuh pendidikan di Program Studi {{ $prodi }}.
      </p>
    </div>
  </div>
</div>
@endsection
