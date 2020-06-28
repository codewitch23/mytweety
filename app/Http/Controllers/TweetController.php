<?php

namespace App\Http\Controllers;

use App\Tweet;
use App\User;
use Illuminate\Http\Request;

class TweetController extends Controller
{
    public function index()
    {
        $tweets =auth()->user()->timeline();
        return view('home',['tweets'=>$tweets]);
    }

    public function store(User $user)
    {
        request()->validate(['body' => 'required']);
        Tweet::create(['user_id' => auth()->user()->id,
            'body' => \request('body')]);
        return redirect('/tweets');
    }

}
