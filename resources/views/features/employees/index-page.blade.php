@extends('layouts.app')

@section('title', 'Daftar Karyawan')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto">
        <h1 class="text-3xl font-bold mb-8">Daftar Karyawan</h1>

        <div class="bg-white rounded-lg shadow overflow-hidden">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Posisi</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Departemen</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @forelse($employees as $employee)
                    <tr>
                        <td class="px-6 py-4">{{ $employee->name }}</td>
                        <td class="px-6 py-4">{{ $employee->email }}</td>
                        <td class="px-6 py-4">{{ $employee->position }}</td>
                        <td class="px-6 py-4">{{ $employee->department }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 bg-green-100 text-green-800 rounded text-sm">
                                {{ $employee->status }}
                            </span>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Tidak ada data karyawan</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection