<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;


class SendEmailController extends Controller
{
    //
    public function index(){
    	return view('send_email');
    }
    public function send(Request $request){
    	$data = array(
    		'name'    => $request->name,
    	    'message'  => $request->message 
    	);

    	Mail::to('chetansinghal21@gmail.com')->send(new SendMail($data));

    	return back()->with('success', 'thanks for send email');
    }
}
