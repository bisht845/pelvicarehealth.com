@extends('layouts.admin')

@section('title', 'Doctor Verification')
@section('page-title', 'Physiotherapist Verification')

@section('content')
<div class="mb-4">
    <div class="flex items-center justify-between">
        <div>
            <input type="text" id="search" placeholder="Search physiotherapists..." 
                   class="px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-pink-400">
        </div>
        <div class="flex space-x-2">
            <select class="px-4 py-2 border border-gray-300 rounded-lg">
                <option>All Cities</option>
            </select>
            <select class="px-4 py-2 border border-gray-300 rounded-lg">
                <option>All Specializations</option>
            </select>
        </div>
    </div>
</div>

<div class="bg-white rounded-lg shadow overflow-hidden">
    <div class="p-4 border-b flex items-center justify-between">
        <div class="flex items-center space-x-4">
            <input type="checkbox" id="select-all" class="rounded border-gray-300">
            <span class="text-sm text-gray-600">Select All</span>
        </div>
        <div class="flex space-x-2">
            <button class="bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 text-sm">Approve Selected</button>
            <button class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-300 text-sm">Export CSV</button>
        </div>
    </div>
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Profile + Name</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Specializations</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Documents Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($doctors as $doctor)
                @php
                    $profile = $doctor->doctorProfile;
                    $documents = $doctor->doctorDocuments;
                    $uploadedCount = $documents->count();
                    $approvedCount = $documents->where('status', 'approved')->count();
                @endphp
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                            <input type="checkbox" class="rounded border-gray-300 mr-3">
                            <div>
                                <div class="text-sm font-medium text-gray-900">{{ $doctor->name }}</div>
                                <div class="text-sm text-gray-500">{{ $doctor->email }}</div>
                            </div>
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                        @if($profile && $profile->specializations)
                            {{ implode(', ', array_slice($profile->specializations, 0, 2)) }}
                            @if(count($profile->specializations) > 2) +{{ count($profile->specializations) - 2 }} @endif
                        @else
                            N/A
                        @endif
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full 
                            {{ $uploadedCount >= 4 && $approvedCount == $uploadedCount ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                            {{ $approvedCount }}/{{ $uploadedCount }} verified
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full 
                            {{ $profile && $profile->verification_status == 'approved' ? 'bg-green-100 text-green-800' : '' }}
                            {{ $profile && $profile->verification_status == 'pending' ? 'bg-yellow-100 text-yellow-800' : '' }}
                            {{ $profile && $profile->verification_status == 'rejected' ? 'bg-red-100 text-red-800' : '' }}">
                            {{ $profile ? ucfirst($profile->verification_status) : 'Pending' }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm">
                        <a href="{{ route('super-admin.doctor-verification.show', $doctor->id) }}" 
                           class="text-pink-600 hover:text-pink-900">Review</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="px-6 py-4 text-center text-sm text-gray-500">No doctors pending verification</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="px-6 py-4 border-t">
        {{ $doctors->links() }}
    </div>
</div>
@endsection

