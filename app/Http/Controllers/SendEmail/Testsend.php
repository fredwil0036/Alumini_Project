<?php

namespace App\Http\Controllers\SendEmail;

use App\Http\Controllers\Controller;
use App\Mail\NewUsersAccount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Testsend extends Controller
{
    public function sendEmail()
    {
        $user = [
            'name' => 'John Doe',
            'message' => 'This is a test email message.'
        ];
    
        Mail::to('fredwilmembrere@gmail.com')->send(new NewUsersAccount($user));
    
        return 'Email sent successfully!';
    }
}
