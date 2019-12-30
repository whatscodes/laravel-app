<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function show($post)
    {
        
        $posts = [
            'my-first-post' => 'This is the first post',
            'my-second-post' => 'This is the second post'
        ];
    
        if(! array_key_exists($post, $posts)) {
            abort(404,'Sorry, does not exist');
        }
    
        return view('post', [
            'post' => $posts[$post]
            ]);                                        
    }
    
}
