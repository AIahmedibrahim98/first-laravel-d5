<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $title = 'What is Lorem Ipsum?';
        $post = "
        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
        standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a
        type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,
        remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing
        Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of
        Lorem Ipsum.";
        
        // return view('blog',['post'=>$p,'title'=>$t]);
        /* return view('blog')
        ->with(['post'=>$post])
        ->with(['title'=>$title]); */
        // return view('blog')->with(compact('post'))->with(compact('title'));
        // return view('blog',compact('post'),compact('title'));
    }
}
