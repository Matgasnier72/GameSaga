<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $formFields = $request->validate([
            'email' => 'required|email',
            'pseudo' => 'required|string',
            'password' => ['required','confirmed',Password::defaults()]
        ]);
        //return response()->json($formFields);
        $userFound = DB::table('users')->where('email',$formFields['email']);
        if ($userFound->count() > 0) {
            return response()->json(['user' => null], 401);
        }
        $user =new User();
        $user->fill($formFields);
        $user->email_verified_at = now();
        $user->save();
        return response()->json($user);
        
    }
}
