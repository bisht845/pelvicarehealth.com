@extends('layouts.admin')

@section('title', $post->title)
@section('page-title', 'View Post')

@section('content')
<div class="max-w-4xl mx-auto bg-white rounded-lg shadow p-6">
    <div class="mb-6">
        <h1 class="text-3xl font-bold text-gray-900">{{ $post->title }}</h1>
        <div class="mt-2 text-sm text-gray-600">
            <p><strong>Author:</strong> {{ $post->author->name }}</p>
            <p><strong>Published:</strong> {{ $post->published_at ? $post->published_at->format('M d, Y') : 'Not published' }}</p>
            <p><strong>Status:</strong> {{ $post->is_published ? 'Published' : 'Draft' }}</p>
        </div>
    </div>
    @if($post->featured_image)
    <div class="mb-6">
        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-auto rounded-lg">
    </div>
    @endif
    @if($post->excerpt)
    <div class="mb-6 p-4 bg-gray-50 rounded-lg">
        <p class="text-lg text-gray-700 italic">{{ $post->excerpt }}</p>
    </div>
    @endif
    <div class="prose max-w-none">
        <div class="whitespace-pre-wrap text-gray-700">{{ $post->content }}</div>
    </div>
    <div class="mt-6 flex space-x-4">
        <a href="{{ route('admin.blog.edit', $post->id) }}" class="bg-pink-600 text-white px-4 py-2 rounded-md hover:bg-pink-700">Edit</a>
        <a href="{{ route('admin.blog.index') }}" class="bg-gray-200 text-gray-700 px-6 py-2 rounded-md hover:bg-gray-300">Back to List</a>
    </div>
</div>
@endsection

