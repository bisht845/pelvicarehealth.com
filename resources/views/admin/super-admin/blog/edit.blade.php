@extends('layouts.admin')

@section('title', 'Edit Blog Post')
@section('page-title', 'Edit Blog Post')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
    <form action="{{ route('admin.blog.update', $post->id) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
        @csrf
        @method('PUT')
        <div>
            <label class="block text-sm font-medium text-gray-700">Title</label>
            <input type="text" name="title" required value="{{ $post->title }}" class="mt-1 block w-full border-gray-300 rounded-md">
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Excerpt</label>
            <textarea name="excerpt" rows="3" class="mt-1 block w-full border-gray-300 rounded-md">{{ $post->excerpt }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Content</label>
            <textarea name="content" rows="15" required class="mt-1 block w-full border-gray-300 rounded-md">{{ $post->content }}</textarea>
        </div>
        <div>
            <label class="block text-sm font-medium text-gray-700">Featured Image</label>
            @if($post->featured_image)
            <div class="mb-2">
                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Current image" class="h-32 w-auto">
            </div>
            @endif
            <input type="file" name="featured_image" accept="image/*" class="mt-1 block w-full border-gray-300 rounded-md">
        </div>
        <div>
            <label class="flex items-center">
                <input type="checkbox" name="is_published" {{ $post->is_published ? 'checked' : '' }} class="rounded border-gray-300">
                <span class="ml-2 text-sm text-gray-700">Publish</span>
            </label>
        </div>
        <div class="flex space-x-4">
            <button type="submit" class="bg-pink-600 text-white px-6 py-2 rounded-md hover:bg-pink-700">Update Post</button>
            <a href="{{ route('admin.blog.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300">Cancel</a>
        </div>
    </form>
</div>
@endsection

