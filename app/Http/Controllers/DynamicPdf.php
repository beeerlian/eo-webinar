<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;
use GuzzleHttp\Client;
use App\Http\ApiControllers;
use Dompdf\Adapter\PDFLib;
use PDF;

class DynamicPdf extends Controller
{
    function index(Request $request)
    {
        $userId = $request->userid;
        $title = $request->title;
        try {
            $user = app('App\Http\ApiControllers')->getUserDetailById($userId);
            return view('generate_pdf', ['userdata' => $user, 'title' => $title]);
        } catch (GuzzleHttp\Exception\BadResponseException $e) {
            //throw $th;
        }
    }

    public function exportPdf($user)
    {
        $pdf = app('Dompdf\Adapter\PDFLib')->load_view('user', compact('user'));
    }

    public function getUserDetailById($userId)
    {
        $client = new Client();
        $request = $client->get('https://guarded-stream-71687.herokuapp.com/api/users/' . $userId);
        $user = json_decode($request->getBody(), true);
        return $user;
    }
}
