<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\Refer;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index()
    {
        return view('refer');
    }

    public function send(Request $request)
    {
        try {
            Mail::to($request->email)->send(new Refer());    
            $msg = "Email sent.";
            $status = "success";
        } catch (Exception $e) {
            $msg = "Email failed to be sent.";
            $status = "error";
        }

        return view('refer', ['msg' => $msg, 'status' => $status]);
    }
}
