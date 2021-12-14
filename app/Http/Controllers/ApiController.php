<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ApiController extends Controller
{
    public function login(Request $request)
    {
        $client = new Client();
        $body['email'] = $request->email;
        $body['password'] = $request->password;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/users/login/email/', ['body' => $body]);
        $response = json_decode($res->getBody(), true);
        if ($response["success"]) {
            return view('dashboard', ['user-email' => $request->email]);
        } else {
            return view('login', ['message' => $response["message"]]);
        }
    }
    public function register(Request $request)
    {
        $client = new Client();
        $body['nama'] = $request->nama;
        $body['email'] = $request->email;
        $body['phone'] = $request->phone;
        $body['password'] = $request->password;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/users/login/email/', ['body' => $body]);
        $response = json_decode($res->getBody(), true);
        if ($response["success"]) {
            return view('dashboard', ['user-email' => $request->email]);
        } else {
            return view('register', ['message' => $response["message"]]);
        }
    }
    public function getUsers()
    {
        $client = new Client();
        $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/users/');
        $response = json_decode($request->getBody(), true);
        return view('users', ['users' => $response]);
    }
    public function getEvents()
    {
        $client = new Client();
        $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/events/');
        $response = json_decode($request->getBody(), true);
        return view('events', ['events' => $response]);
    }
}
