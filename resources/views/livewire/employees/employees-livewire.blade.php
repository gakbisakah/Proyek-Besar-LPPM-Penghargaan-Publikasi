<div>
    <div class="mb-6">
        <input type="text" 
               wire:model.live="search" 
               placeholder="Cari karyawan..." 
               class="w-full px-4 py-2 border rounded-lg">
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Posisi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($employees as $employee)
                <tr>
                    <td class="px-6 py-4">{{ $employee->name }}</td>
                    <td class="px-6 py-4">{{ $employee->email }}</td>
                    <td class="px-6 py-4">{{ $employee->position }}</td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="px-6 py-4 text-center text-gray-500">Tidak ada data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $employees->links() }}
    </div>
</div>