<?php

namespace App\Http\Controllers\Tweet;

use App\Http\Controllers\Controller;
use App\Models\Tweet;
use Illuminate\Http\Request;
use App\Services\TweetService;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, TweetService $tweetService)
    {
        //$tweets = Tweet::orderBy('created_at', 'DESC')->get();
        $tweets = $tweetService->getTweets();
        return view('tweet.index')
                    ->with('tweets', $tweets);
    }
}
