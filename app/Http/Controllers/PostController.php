<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        //return 'this is page';
        $posts = Post::where('is_published', 1)->get();
        foreach ($posts as $post) {
            dump($post->title);
        }
    }

    public function create() {
        $postsArr = [
            [
                'title' => 'Title from phpstorm',
                'content' => 'Some interesting post',
                'image' => 'blablabla.jpg',
                'likes' => '12',
                'is_published' => '1'
            ],
            [
                'title' => 'Another title from phpstorm',
                'content' => 'Another some interesting post',
                'image' => 'blablabla2.jpg',
                'likes' => '19',
                'is_published' => '1'
            ]
        ];


        foreach ($postsArr as $item) {
            Post::create($item);
        }

    }

    public function update() {

        $postsArr = [
            'title' => 'Title from phpstorm 666',
            'content' => 'Some interesting post 666',
            'image' => 'blablabla666.jpg',
            'likes' => '1666',
            'is_published' => '1'
            ];

        $post = Post::find(6);
        $post->update($postsArr);

        dump('updated');
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
}
