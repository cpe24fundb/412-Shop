<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Cookie;

class AuthenticationController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function getToken($length){
        $token = "";
        $codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
        $codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
        $codeAlphabet.= "0123456789";
        $max = strlen($codeAlphabet); // edited
   
       for ($i=0; $i < $length; $i++) {
           $token .= $codeAlphabet[random_int(0, $max-1)];
       }
   
       return $token;
   }

    public function login(Request $request) {
        $username = $request->input('username');
        $password = $request->input('password');

        $user = User::where('username', $username)->first();
        
        if ($user && Hash::check($password, $user->password)) {
            $token = $this->getToken(32);

            $user->token = $token;
            $user->save();
            
            $cookie = new Cookie('token', $token);
            if ($user->manager_flag)
                return redirect()->route('admin.manager')->withCookie($cookie);
            return redirect()->route('admin.statistic.popular')->withCookie($cookie);
        }

        return redirect()->route('login');
    }

    public function logout() {
        $cookie = new Cookie('token', '-');
        return redirect('/')->withCookie($cookie);
    }

}
