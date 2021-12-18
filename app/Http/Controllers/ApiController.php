<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use GuzzleHttp\Client;

class ApiController extends Controller
{


    public function createEventPage(Request $request)
    {
        $userId = $request->userid;
        return view('create-events', ['userId' => $userId]);
    }

    public function addEvent(Request $request)
    {
        $client = new Client();
        $body['title'] = $request->title;
        $body['link'] = $request->link;
        $body['time'] = $request->time;
        $body['lecturer'] = $request->lecturer;
        $lecturer = $request->lecturer;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/events/', ['form_params' => $body]);
        $response = json_decode($res->getBody(), true);
        if ($response["success"] === true) {
            $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/events/');
            $classes = json_decode($request->getBody(), true);
            $req = $client->get('https://guarded-stream-71687.herokuapp.com/api/users/' . $lecturer);
            $user = json_decode($req->getBody(), true);
            return view('dashboard', ['classes' => $classes,  'user' => $user, 'useremail' => $user["data"]["email"], 'userid' => $user["data"]["_id"], 'status' => $user["data"]["status"],]);
        } else {
            return view('login-email', ['userId' => $request->lecturer]);
        }
    }

    public function login(Request $request)
    {
        $client = new Client();
        $body['email'] = $request->email;
        $body['password'] = $request->password;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/users/login/email/', ['form_params' => $body]);
        $response = json_decode($res->getBody(), true);
        if ($response["success"] === true) {
            $email = $request->email;
            $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/events/');
            $classes = json_decode($request->getBody(), true);
            $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/users/' . $response["data"]["_id"]);
            $user = json_decode($request->getBody(), true);
            return view('dashboard', ['useremail' => $email, 'classes' => $classes, 'userid' => $response["data"]["_id"], 'status' => $response["data"]["status"], 'user' => $user]);
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
        $body['status'] = $request->status;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/users/register/', ['form_params' => $body]);
        $response = json_decode($res->getBody(), true);
        if ($response["success"] === true) {
            $email = $request->email;
            $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/events/');
            $classes = json_decode($request->getBody(), true);
            $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/users/' . $response["data"]["InsertedID"]);
            $user = json_decode($request->getBody(), true);
            return view('dashboard', ['useremail' => $email, 'classes' => $classes, 'userid' => $response["data"]["InsertedID"], 'status' => $body['status'], 'user' => $user]);
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
    public function getClasses()
    {
        $client = new Client();
        $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/events/');
        $response = json_decode($request->getBody(), true);
        return view('classes', ['classes' => $response]);
    }
    public function getUserById(Request $request)
    {
        $client = new Client();
        $userId = $request->userId;
        $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/users/' . $userId);
        $response = json_decode($request->getBody(), true);
        if ($response["data"]["status"] === "lecturer") {
            return view('lecturer-view', ['user' => $response]);
        } else {
            return view('user-view', ['user' => $response]);
        }
    }
    public function getClassById(Request $request)
    {
        $client = new Client();
        $classId = $request->classId;
        $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/events/' . $classId);
        $response = json_decode($request->getBody(), true);
        return view('class-detail', ['event' => $response]);
    }
    public function joinClass(Request $request)
    {
        $client = new Client();
        $classId = $request->classId;
        $userId = $request->userId;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/users/participant/' . $classId . $userId);
        $response = json_decode($res->getBody(), true);
        if ($response["success"] === true) {
        } else {
        }
    }
    public function addClass(Request $request)
    {
        $client = new Client();
        $body['title'] = $request->title;
        $body['link'] = $request->link;
        $body['time'] = $request->class_time;
        $body['lecturer'] = $request->lecturer;
        $res = $client->post('https://guarded-stream-71687.herokuapp.com/api/events/', ['form_params' => $body]);
        $response = json_decode($res->getBody(), true);
        if ($response["success"] === true) {
            return view('dashboard', ['useremail' => $request->email]);
        } else {
            return view('register', ['message' => $response["message"]]);
        }
    }
}
