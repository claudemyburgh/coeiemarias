<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events\EmailSubmited;
use App\Http\Requests\SendMailRequest;


class SendMailController extends Controller
{


    public function send(SendMailRequest $request)
    {
        $data = $request->only('name', 'email', 'subject', 'phone', 'message');

        event(new EmailSubmited($data));

        return redirect()->back()->withSuccess('Email send successfully');
    }


}
