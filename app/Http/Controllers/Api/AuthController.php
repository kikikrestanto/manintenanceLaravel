<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\User;
use Exception;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthController extends Controller
{
    public function login(Request $request){
        $creds = $request->only(['nip','password']);
        
        if(!$token=auth()->attempt($creds)){

            return response()->json([
                'status' => false,
                'message' => 'invalid credentials'
            ]);
        }
        return response()->json([
            'success' =>true,
            'token' => $token,
            'user' => Auth::user()
        ]);
    }

    public function register(Request $request){

        $encryptedPass =  Hash::make($request->password);

        $user = new User;

        try{
            $user->nip = $request->nip;
            //$user->email = $request->email;
            $user->password = $encryptedPass;
            $user->save();
            return $this->login($request);
        }
        catch(Exception $e){
            return response()->json([
                'success' => false,
                'message' => ''.$e
            ]);
        }

    }

    public function logout(Request $request){
        try{
            JWTAuth::invalidate(JWTAuth::parseToken($request->token));
            return response()->json([
                'success' => true,
                'message' => 'logout success'
            ]);
        }
        catch(Exception $e){
            return response()->json([
                'success' => false,
                'message' => ''.$e
            ]);
        }
    }

    //this function save user name, and lastname
    public function saveUserInfo(Request $request){
        $encryptedPass =  Hash::make($request->password);

        $user = User::find(Auth::user()->id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $encryptedPass;
        $user->update();
        return response()->json([
            'success' => true,
            'message' => 'update user info success',
            'user' => Auth::user()
        ]);
    }

    /*public function responsesUser(Request $request){
        $user = User::find(Auth::user()->id);
        if(!$user = ){

        }
    } */
}
