<?php

namespace App\Http\Controllers;

use app\Http\Controllers\PostController;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * 
     * @return view
     */
    public function create(){
        return view('posts.create');
    }
    //

    /**
     * 
     * Save new post.
     */
    public function store(StoreRequest $request){

    }
}
