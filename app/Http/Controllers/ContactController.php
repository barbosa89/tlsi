<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\ContactMessage;
use App\Http\Requests\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Send a email to owner blog.
     *
     * @param  \App\Http\Requests\ContactEmail  $request
     * @return \Illuminate\Http\Response
     */
    public function sendMessage(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:80',
            'email' => 'required|email:rfc,strict,dns,spoof,filter',
            'phone' => 'required|string|max:10',
            'message' => 'required|string|max:255',
            'recaptcha' => 'recaptcha'
	    ]);

        if ($validator->fails()) {
            return response()
                ->json(['errors' => $validator->errors()], 403);
        }

        Mail::to($request->email)
            ->send(new ContactMessage($request));

        if (count(Mail::failures()) > 0) {
            return response('Error al enviar copia de comunicación', 500)
                ->header('Content-Type', 'text/plain');
        } else {
            Mail::to('gerente@tlsi.com.co')
                ->cc('subgerente@tlsi.com.co')
                ->send(new ContactMessage($request));

            if (count(Mail::failures()) > 0) {
                return response('El mensaje no fue enviado', 500)
                    ->header('Content-Type', 'text/plain');
            }

            return response('Ok', 200)
                ->header('Content-Type', 'text/plain');
        }

        return response('Error desconocido', 500)
            ->header('Content-Type', 'text/plain');
    }
}
