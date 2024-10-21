<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OtoiawaseMail;

class ContactController extends Controller
{
    public function otoiawase(Request $request)
    {
        $params = $request->all();

        // Sending email
        Mail::to('info@unoun.co.jp')
            ->bcc(['super0116.dev@gmail.com'])
            ->send(new OtoiawaseMail($params));

        // Redirect to contact page with success message
        // return redirect()->route('top')->with('success', 'お問い合わせが正常に送信されました。');
        return redirect()->back()->with('success', 'お問い合わせが正常に送信されました。');
    }
}
