<?php

namespace App\Http\Controllers\Homepage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function index()
    {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.github.com/users/tahacicek/repos', [
                'verify' => false,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer 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'
                ],
            ]);
            $data = json_decode($response->getBody()->getContents());
        } catch (\Throwable $e) {
            $data = [];
        }
        return view('homepage.index', compact('data'));
    }

    //github api
    public function github()
    {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->request('GET', 'https://api.github.com/users/tahacicek/repos', [
                'verify' => false,
                'headers' => [
                    'Accept' => 'application/json',
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Bearer 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'
                ],
            ]);
            $data = json_decode($response->getBody()->getContents());
        } catch (\Throwable $e) {
            $data = [];
        }
        return view('homepage.index', compact('data'));
    }
}
