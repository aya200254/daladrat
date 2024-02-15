<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedditController extends Controller
{
    public function getHotPosts()
    {
        $url = 'https://www.reddit.com/r/FlutterDev/hot.json';
        $command = "curl $url";
        $response = exec($command);

        $posts = json_decode($response, true)['data']['children'];

        return view('reddit', ['posts' => $posts]);
    }

    public function getNewPosts()
    {
        $url = 'https://www.reddit.com/r/FlutterDev/new.json';
        $command = "curl $url";
        $response = exec($command);

        $posts = json_decode($response, true)['data']['children'];

        return view('reddit', ['posts' => $posts]);
    }

    public function getRisingPosts()
{
    $url = 'https://www.reddit.com/r/FlutterDev/rising.json';
    $command = "curl $url";
    $response = exec($command);

    if ($response === false) {

        return view('error', ['message' => 'Error executing curl command']);
    }


    $data = json_decode($response, true);


    if (!isset($data['data']['children'])) {

        return view('error', ['message' => 'Invalid JSON response']);
    }

    $posts = $data['data']['children'];

   
    return view('reddit', ['posts' => $posts]);
}

}



