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

        if ($response === false) {
            // Handle error
            return view('error', ['message' => 'Failed to execute curl command']);
        }

        $data = json_decode($response, true);
        if (isset($data['data']['children'])) {
            $posts = $data['data']['children'];
        } else {
            // Handle error
            return view('error', ['message' => 'Invalid response from Reddit API']);
        }

        return view('reddit', ['posts' => $posts]);
    }

    public function getNewPosts()
    {
        $url = 'https://www.reddit.com/r/FlutterDev/new.json';
        $command = "curl $url";
        $response = exec($command);

        if ($response === false) {
            // Handle error
            return view('error', ['message' => 'Failed to execute curl command']);
        }

        $data = json_decode($response, true);
        if (isset($data['data']['children'])) {
            $posts = $data['data']['children'];
        } else {
            // Handle error
            return view('error', ['message' => 'Invalid response from Reddit API']);
        }

        return view('reddit', ['posts' => $posts]);
    }

    public function getRisingPosts()
{
    $url = 'https://www.reddit.com/r/FlutterDev/rising.json';
    $command = "curl $url";
    $response = exec($command);

    if ($response === false) {
        // Handle error
        return view('error', ['message' => 'Failed to execute curl command']);
    }

    $data = json_decode($response, true);
    if (isset($data['data']['children'])) {
        $posts = $data['data']['children'];
    } else {
        // Handle error
        return view('error', ['message' => 'Invalid response from Reddit API']);
    }

    return view('reddit', ['posts' => $posts]);
}
}
