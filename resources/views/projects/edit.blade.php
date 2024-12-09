@extends('layouts.layout')

@section('content')
<div class="container mx-auto p-4">
    <h1 class="text-2xl font-bold mb-4">Edit Project</h1>
    <form action="{{ route('projects.update', $project->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="name" class="block text-sm font-medium text-gray-700">Project Name</label>
            <input type="text" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="name" name="name" value="{{ $project->name }}" required>
        </div>

        <div class="form-group">
            <label for="description" class="block text-sm font-medium text-gray-700">Project Description</label>
            <textarea class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="description" name="description" required>{{ $project->description }}</textarea>
        </div>

        <div class="form-group">
            <label for="deadline" class="block text-sm font-medium text-gray-700">Project Deadline</label>
            <input type="date" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="deadline" name="deadline" value="{{ $project->deadline }}" required>
        </div>

        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Update Project</button>
    </form>
</div>
@endsection