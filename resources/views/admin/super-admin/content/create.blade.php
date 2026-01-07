@extends('layouts.admin')

@section('title', 'Create Content')
@section('page-title', 'Create Content')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.content.store') }}" method="POST" class="space-y-6">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Type</label>
            <select name="type" required class="mt-1 block w-full border-gray-300 rounded-md">
                <option value="page">Page</option>
                <option value="section">Section</option>
                <option value="blog">Blog</option>
            </select>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Slug</label>
            <input type="text" name="slug" required class="mt-1 block w-full border-gray-300 rounded-md" placeholder="url-friendly-slug">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" required class="mt-1 block w-full border-gray-300 rounded-md">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" rows="10" required class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Meta Title</label>
                <input type="text" name="meta_title" class="mt-1 block w-full border-gray-300 rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Published</label>
                <label class="flex items-center mt-2">
                    <input type="checkbox" name="is_published" class="rounded border-gray-300">
                    <span class="ml-2 text-sm text-gray-700">Publish immediately</span>
                </label>
            </div>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Meta Description</label>
            <textarea name="meta_description" rows="3" class="mt-1 block w-full border-gray-300 rounded-md"></textarea>
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-md hover:bg-pink-700">Create Content</button>
            <a href="{{ route('admin.content.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300">Cancel</a>
        </div>
    </form>
</div>
@endsection

