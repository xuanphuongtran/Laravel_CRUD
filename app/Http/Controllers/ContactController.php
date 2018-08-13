<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
class ContactController extends Controller
{
	public function showContactForm(Request $request){
		$name  = $request->cookie('name');
		$email = $request->cookie('email');
		return view('fontend.contact')->with(['name' => $name, 'email' => $email]);//
	}
	public function insertMessage(Request $request){
			$name    = $request->name;
			$email    = $request->email;
			$title   = $request->title;
			$message = $request->message;
			// Lưu cookie trong 30 phút
			$minutes = 30;
								// name / value / time
			$name_cookie = cookie('name', $name, $minutes);
			$email_cookie = cookie('email', $email, $minutes);
			$data = ['success' => 'Bạn đã gửi tin nhắn thành công!'];
			return response()
				->view('fontend.contact', $data, 200)
				->withCookie($name_cookie)
				->withCookie($email_cookie);
	}

}