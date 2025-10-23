@extends('layouts.app')

@section('title', $title)

@section('content')
<div class="mx-10 mt-10">
  <h1 class="text-3xl font-bold mb-6 text-gray-800">{{ $title }}</h1>
  <div class="bg-white rounded-xl shadow-md p-6 border border-gray-200">
      <table class="w-full text-left border-collapse">
          <thead>
              <tr class="bg-blue-600 text-white">
                  <th class="py-3 px-4 rounded-tl-lg">No</th>
                  <th class="py-3 px-4">Judul Tugas</th>
                  <th class="py-3 px-4">Deadline</th>
                  <th class="py-3 px-4">Status</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($tasks as $index => $task)
                  <tr class="border-b hover:bg-gray-50 transition">
                      <td class="py-3 px-4">{{ $index + 1 }}</td>
                      <td class="py-3 px-4 font-medium">{{ $task['judul'] }}</td>
                      <td class="py-3 px-4">{{ \Carbon\Carbon::parse($task['deadline'])->format('d M Y') }}</td>
                      <td class="py-3 px-4">
                          @if($task['status'] == 'Sudah Dikumpul')
                              <span class="text-green-600 font-semibold">{{ $task['status'] }}</span>
                          @else
                              <span class="text-red-600 font-semibold">{{ $task['status'] }}</span>
                          @endif
                      </td>
                  </tr>
              @endforeach
          </tbody>
      </table>
  </div>
</div>
@endsection
