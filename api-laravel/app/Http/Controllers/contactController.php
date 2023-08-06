<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class contactController extends Controller
{
    public function Contact(Request $request) {
        $contact = \App\Models\Contact::create([
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'message' => $request->input('message')
        ]);
        if(!$contact){
            return response()->json(['error' => 'Variable missing'],422);
        }else{
            $response = [
                'data' => $contact,
                'message' => "bien ajouté"
            ];
            return response()->json($response,200);
        }
    }
};
