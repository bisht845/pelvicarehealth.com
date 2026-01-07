<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Content;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    public function index()
    {
        $contents = Content::with(['creator', 'updater'])->latest()->paginate(20);
        return view('admin.super-admin.content.index', compact('contents'));
    }

    public function create()
    {
        return view('admin.super-admin.content.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|in:page,section,blog',
            'slug' => 'required|unique:contents,slug',
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        Content::create([
            'type' => $request->type,
            'slug' => $request->slug,
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'is_published' => $request->has('is_published'),
            'created_by' => auth()->id(),
        ]);

        return redirect()->route('admin.content.index')->with('success', 'Content created successfully.');
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('admin.super-admin.content.edit', compact('content'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'type' => 'required|in:page,section,blog',
            'slug' => 'required|unique:contents,slug,' . $id,
            'title' => 'required|string|max:255',
            'content' => 'required',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'is_published' => 'boolean',
        ]);

        $content = Content::findOrFail($id);
        $content->update([
            'type' => $request->type,
            'slug' => $request->slug,
            'title' => $request->title,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_description' => $request->meta_description,
            'is_published' => $request->has('is_published'),
            'updated_by' => auth()->id(),
        ]);

        return redirect()->route('admin.content.index')->with('success', 'Content updated successfully.');
    }

    public function destroy($id)
    {
        $content = Content::findOrFail($id);
        $content->delete();

        return redirect()->route('admin.content.index')->with('success', 'Content deleted successfully.');
    }
}

