@extends('layouts.layout')
@section('title', 'Projects List')
@section('content')
<h1 class="text-3xl font-bold mb-6">Projects List</h1>
@if (session('success'))
    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4" role="alert">
        {{ session('success') }}
    </div>
@endif
@if(auth()->user()->role === 'admin')
    <div class="flex justify-between items-center mb-6">
        <a href="{{ route('projects.create') }}"
            class="bg-blue-600 hover:bg-blue-800 text-white font-semibold py-2 px-4 rounded shadow">Create New Project</a>
    </div>
@endif
<div class="overflow-x-auto bg-white shadow-md rounded-lg">
    <table class="min-w-full bg-white border border-gray-200">
        <thead class="bg-gray-100">
            <tr>
                <th class="py-3 px-6 border-b text-left text-gray-600 font-semibold">Name</th>
                <th class="py-3 px-6 border-b text-left text-gray-600 font-semibold">Description</th>
                <th class="py-3 px-6 border-b text-left text-gray-600 font-semibold">Deadline</th>
                <th class="py-3 px-6 border-b text-left text-gray-600 font-semibold">User</th>
                <th class="py-3 px-6 border-b text-left text-gray-600 font-semibold">Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr class="hover:bg-gray-50">
                    <td class="py-4 px-6 border-b">{{ $project->name }}</td>
                    <td class="py-4 px-6 border-b">{{ $project->description }}</td>
                    <td class="py-4 px-6 border-b">{{ $project->deadline }}</td>
                    <td class="py-4 px-6 border-b">{{ $project->user->name }}</td>
                    <td class="py-4 px-6 border-b flex space-x-2">
                        <a href="{{ route('projects.show', $project) }}"
                            class="bg-blue-500 hover:bg-blue-700 text-white font-semibold py-1 px-3 rounded text-sm">View</a>
                        @if (auth()->user()->role === 'admin')
                            <a href="{{ route('projects.edit', $project) }}"
                                class="bg-yellow-500 hover:bg-yellow-700 text-white font-semibold py-1 px-3 rounded text-sm">Edit</a>
                            <form action="{{ route('projects.destroy', $project) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="bg-red-500 hover:bg-red-700 text-white font-semibold py-1 px-3 rounded text-sm">Delete</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center py-4 px-6 border-b text-gray-500">No projects found.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection