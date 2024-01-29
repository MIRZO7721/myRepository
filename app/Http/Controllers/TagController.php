<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index() {
        $tags = Tag::all();
        return view('tags.index', compact('tags'));
    }

    public function create() {
        return view('tags.create');
    }
    public function store(Request $request) {
        $validateData = $request->validate([
            'name' => 'required|string|max:255'
        ]);

        $tag = Tag::create([
            'name' => $validateData['name']
        ]);

        return redirect()->route('tags.index')->with('success');
    }
    public function show(Tag $tag) {
        return view('tags.show', compact('tag'));
    }
}
