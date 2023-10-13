<?php

namespace App\Http\Controllers;

use App\Mail\SampleMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function send(Request $request)
    {
        $email = $request->input('email');
        Mail::to($email)->send(
            new SampleMail()
        );
        return "Send email";
    }
}
