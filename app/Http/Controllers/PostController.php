<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $category = Category::find(1);
        $post = Post::find(2);

        dd($post->category);
        //return view('post.index', compact('posts'));
    }

    public function create() {
        return view('post.create');
    }

    public function delete() {
        $post = Post::find(5);
        $post->delete();

        dump('deleted');
    }

    public function firstOrCreate() {
//        $post = Post::find(1);

        $anotherPost = [
            'title' => 'Some another new Post',
            'content' => 'Another Some interesting post 666',
            'image' => 'blablabla_new.jpg',
            'likes' => '1452',
            'is_published' => '1'
        ];

        $post = Post::firstOrCreate(
            [
                'title' => 'Some another new Post'
            ],
            [
                'title' => 'Some another new Post',
                'content' => 'Another Some interesting post 666',
                'image' => 'blablabla_new.jpg',
                'likes' => '1452',
                'is_published' => '1'
            ]
        );

        dump($post->content);
        dump('finished');
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);
        Post::create($data);
        return redirect()->route('post.index');
    }

    public function show(POST $post) {
        return view('post.show', compact('post'));
    }

    public function edit(POST $post) {
        return view('post.edit', compact('post'));
    }

    public function update(POST $post) {
        $data = request()->validate([
            'title' => 'string',
            'content' => 'string',
            'image' => 'string',
            'likes' => 'integer'
        ]);
        $post->update($data);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(POST $post) {
        $post->delete();
        return redirect()->route('post.index');
    }
}
