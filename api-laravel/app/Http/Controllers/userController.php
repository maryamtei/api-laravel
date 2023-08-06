<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use App\Models\myUser;
use App\Models\Schedule;
use Illuminate\Http\Request;

class userController extends Controller
{
    public function signup(Request $request) {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $email = $request->input('email');
        $password = $request->input('password');
        $confirmPassword = $request->input('confirmPassword');

        $exists = myUser::where('email',$email);
        if($exists){
            return response()->json(['error' => 'User already exists'], 409);
        }
        if(!$confirmPassword != $password){
            return response()->json(['error' => 'Invalid password. Passwords must match.'], 422);
        }
        $hashedPassword = bcrypt($password);
        $newUser = myUser::create([
            'firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email,
            'password' => $hashedPassword,
            'role_id' => 2
        ]);
        if($newUser){
            for($week = 1; $week <= 52; $week++){
                Schedule::create([
                    'user_id' => $newUser->id,
                    'week' => $week,
                    'meals' => []
                ]);
            }
        }
    }
    public function login(Request $request) {
        $contact = \App\Models\Contact::create([
        'name' => $request->input('name'),
        'lastName' => $request->input('email'),
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
    public function modifyUser(Request $request) {
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
    public function getUserInformation(Request $request) {
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

}
