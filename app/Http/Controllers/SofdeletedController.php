<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SofdeletedController extends Controller
{
    public function postsdel()
    {
        $menuPosts = 'active';
        $postdeleted = Post::onlyTrashed('user_id', auth()->user()->id)->get();
        return view('dashboard.posts.delete-list', [
            'postdeleted' => $postdeleted,
            'menuPosts' =>  $menuPosts,
        ]);
    }

    public function restore($id)
    {
        Post::withTrashed()->where('id', $id,)->restore();

        return redirect()->back()->with(['success' => 'successfully']);
    }
}