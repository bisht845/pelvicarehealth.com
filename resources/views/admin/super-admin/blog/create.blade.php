@extends('layouts.admin')

@section('title', 'Create Blog Post')
@section('page-title', 'Create Blog Post')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" required class="mt-1 block w-full border-gray-300 rounded-md">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Excerpt</label>
            <textarea name="excerpt" rows="3" class="mt-1 block w-full border-gray-300 rounded-md" placeholder="Short description..."></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" rows="15" required class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Featured Image</label>
            <input type="file" name="featured_image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md">
        </div>
        <div>
            <label class="flex items-center">
                <input type="checkbox" name="is_published" class="rounded border-gray-300">
                <span class="ml-2 text-sm text-gray-700">Publish immediately</span>
            </label>
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-md hover:bg-pink-700">Create Post</button>
            <a href="{{ route('admin.blog.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300">Cancel</a>
        </div>
    </form>
</div>
@endsection

