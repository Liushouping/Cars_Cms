<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Alert;
use App\Mail\Contactsendmail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'name'=>'required|min:2',
            'body' => 'required',
            'captcha' => ['required', 'captcha']
        ],
        [
            'name.required' => '姓名必須填入',
            'name.min' => '姓名輸入過短',
            'email.required' => '信箱必須填入',
            'body.required' => '訊息必須填入',
            'captcha.required' => '驗證碼不能為空',
            'captcha.captcha' => '請輸入正確的驗證碼',
        ]
         );

        $contacts = Contact::create([
            'body' => $request->body,
            'name' => $request->name,
            'email' => $request->email,
        ]);

        $body = $request->body;
        $name = $request->name;
        $email = $request->email;

        Mail::to($email)->send(new Contactsendmail( $name, $body, $email));
        return redirect()->back()->with('success','您已經完成發送。');
    }
}