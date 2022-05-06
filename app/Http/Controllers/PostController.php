<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, odio.',
        ];

        $posts = array_fill(0, 10, $post);

        return view('user.posts.index', compact('posts'));
    }

    public function create()
    {
        return view('user.posts.create');
    }

    public function show($post)
    {
        return view('user.posts.show', compact('post'));
    }

    public function edit($post)
    {
        return view('user.posts.dit', compact('post'));
    }

    public function update()
    {
        return view('user.posts.update');
    }

    public function delete()
    {
        return view('user.posts.delete');
    }
}
