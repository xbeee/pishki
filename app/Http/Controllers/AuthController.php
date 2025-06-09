<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if(!$user){
            return response()->json([
                'message' => 'Пользователь не найден',
                'status_code' => 409
            ], 409);
        }

        if(!Hash::check($request->password, $user->password)){
            return response()->json([
                'message' => 'Неверный пароль',
                'status_code' => 409
            ], 409);
        }

        Auth::login($user);

        return response()->json([
            'status_code' => 200,
            'message' => 'Авторизация успешна'
        ], 200);
    }

    public function register(Request $request){
        $userExist = User::where('email', $request->email)->first();

        if($userExist){
            return response()->json([
                'message' => 'User already exists',
                'status_code' => 409,
            ], 409);
        }else{
            $user = User::create([
                'name'=> $request->name,
                'email'=> $request->email,
                'password' => Hash::make($request->password),
                'role' => 'user'
            ]);

            Auth::login($user);

            return response()->json([
                'status_code' => 200,
                'message' => 'Регистрация успешна'
            ], 200);
        }
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return response()->json(['message'=>'Успешно', 'status'=>200],200);
    }
}
