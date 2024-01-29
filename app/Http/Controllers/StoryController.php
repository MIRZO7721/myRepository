<?php

namespace App\Http\Controllers;

use App\Models\Story;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class StoryController extends Controller
{
    public function index()
    {
        $stories = Story::all();
        return view('stories.index', compact('stories'));
    }

    public function create()
    {
        return view('stories.create');
    }

    public function store(Request $request)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'tags' => 'nullable|array',
            'tags.*' => 'string|max:255'
        ]);

        $story = Story::create([
            'title' => $validateData['title'],
            'content' => $validateData['content'],
            'status' => 'pending'
        ]);

        $tags = $request->input('tags');
        if ($tags) {
            $story->attachTags($tags);
        }
        return redirect()->route('stories.index')->with('success');
    }

    public function show(Story $story)
    {
        return view('stories.show', compact('story'));
    }

    public function moderate()
    {
        if (Auth::user()->role !== 'moderator') {
            abort(403, 'У вас нет прав на модерацию историй.');
        }

        $pendingStories = Story::where('status', 'pending')->get();
        return view('stories.moderate', compact('pendingStories'));
    }
    public function moderateAction(Story $story, Request $request) {
        $action = $request->input('action');

        if ($action === 'accept') {
            $story->update(['status' => 'accepted']);
            $message = 'История успешно принята';
        } elseif($action === 'reject') {
            $story->update(['status' => 'rejected']);
        } else {
            abort(400, 'Неверное действие.');
        }
        return redirect()->route('stories.moderate')->with('success', $message);
    }
}
