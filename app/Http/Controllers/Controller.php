<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use GuzzleHttp\Client;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function GET_posts()
    {
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts'));
        return view('welcome', compact('posts'))
             ->with('get_posts', 'GET /posts');
    }

    public function GET_posts_id()
    {
        $posts[] = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'.request('id')));
        return view('welcome', compact('posts'))
             ->with('get_posts_id', 'GET /posts/'.request('id'))
             ->with('posts_id', request('id'));
    }

    public function GET_posts_id_comments(){
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts/'.request('id').'/comments'));
        return view('welcome', compact('posts'))
             ->with('get_posts_id_comments', 'GET /posts/'.request('id').'/comments')
             ->with('posts_id_comments', request('id'));
    }

    public function GET_comments_postId(){
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/comments?postId='.request('postId')));
        return view('welcome', compact('posts'))
             ->with('get_comments_postId', 'GET /comments?postId='.request('postId'))
             ->with('comments_postId', request('postId'));
    }

    public function GET_posts_userId(){
        $posts = json_decode(file_get_contents('https://jsonplaceholder.typicode.com/posts?userId='.request('userId')));
        return view('welcome', compact('posts'))
             ->with('get_posts_userId', 'GET /posts?userId='.request('userId'))
             ->with('posts_userId', request('userId'));
    }

    public function POST_posts(){
        $client = new Client();
        $url = "https://jsonplaceholder.typicode.com/posts";

        $params = [
            //If you have any Params Pass here
            'userId' => request('userId'),
            'title' => request('title'),
            'body' => request('body')
        ];

        $headers = [
            //If you have any Headers Pass here
            'Content-type' => 'application/json; charset=UTF-8'
        ];

        $response = $client->request('POST', $url, [
            'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $posts[] = json_decode($response->getBody());

        return view('welcome', compact('posts'))
              ->with('post_posts', 'POST /posts')
              ->with('post_posts_userId', request('userId'))
              ->with('post_posts_title', request('title'))
              ->with('post_posts_body', request('body'));
    }

    public function PUT_posts(){
        $client = new Client();
        $url = "https://jsonplaceholder.typicode.com/posts/".request('id');

        $params = [
            //If you have any Params Pass here
            'userId' => request('userId'),
            'title' => request('title'),
            'body' => request('body')
        ];

        $headers = [
            //If you have any Headers Pass here
            'Content-type' => 'application/json; charset=UTF-8'
        ];

        $response = $client->request('PUT', $url, [
            'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $posts[] = json_decode($response->getBody());

        return view('welcome', compact('posts'))
              ->with('put_posts', 'PUT /posts/'.request('id'))
              ->with('put_posts_id', request('put_posts_id'))
              ->with('put_posts_userId', request('userId'))
              ->with('put_posts_title', request('title'))
              ->with('put_posts_body', request('body'));
    }

    public function PATCH_posts(){
        $client = new Client();
        $url = "https://jsonplaceholder.typicode.com/posts/".request('id');

        $params = [
            //If you have any Params Pass here
            'userId' => request('userId'),
            'title' => request('title'),
            'body' => request('body')
        ];

        $headers = [
            //If you have any Headers Pass here
            'Content-type' => 'application/json; charset=UTF-8'
        ];

        $response = $client->request('PATCH', $url, [
            'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $posts[] = json_decode($response->getBody());

        return view('welcome', compact('posts'))
              ->with('patch_posts', 'PATCH /posts/'.request('id'))
              ->with('patch_posts_id', request('put_posts_id'))
              ->with('patch_posts_userId', request('userId'))
              ->with('patch_posts_title', request('title'))
              ->with('patch_posts_body', request('body'));
    }

    public function DELETE_posts(){
        $client = new Client();
        $url = "https://jsonplaceholder.typicode.com/posts/".request('id');

        $params = [
            //If you have any Params Pass here
            'userId' => request('userId'),
            'title' => request('title'),
            'body' => request('body')
        ];

        $headers = [
            //If you have any Headers Pass here
            'Content-type' => 'application/json; charset=UTF-8'
        ];

        $response = $client->request('DELETE', $url, [
            'json' => $params,
            'headers' => $headers,
            'verify'  => false,
        ]);

        $posts[] = json_decode($response->getBody());

        return view('welcome', compact('posts'))
              ->with('delete_posts', 'DELETE /posts/'.request('id'))
              ->with('delete_posts_id', request('delete_posts_id'))
              ->with('delete_posts_userId', request('userId'))
              ->with('delete_posts_title', request('title'))
              ->with('delete_posts_body', request('body'));
    }
}
