<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $post = (object) [
          'id' => 123,
          'title' => 'Lorem ipsum dolor sit amet.',
          'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, odio.',
        ];

        $posts = array_fill(0, 10, $post);

        return view('blog.index', compact('posts'));
    }

    public function show()
    {
        $post = (object) [
            'id' => 123,
            'title' => 'Lorem ipsum dolor sit amet.',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, odio.',
        ];

        return view('blog.show', compact('post'));
    }
}
