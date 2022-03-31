<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller {

    /**
     * registration
     */
    public function register(Request $request) {
        $this->validate($request, [
            'name'     => 'required|min:4',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => bcrypt($request->password),
            'role'     => 'author',
        ]);

        $token = $user->createToken('bahaso')->accessToken;

        $data = [
            'name'  => $user->name,
            'email' => $user->email,
            'role'  => $user->role,
            'token' => $token,
        ];

        return response([
            'data' => $data,
        ], 200);
    }

    /**
     * login
     */
    public function login(Request $request) {
        $data = [
            'email'    => $request->email,
            'password' => $request->password,
        ];

        if (auth()->attempt($data)) {
            $token = auth()->user()->createToken('bahaso')->accessToken;

            $user = User::where('email', $request->email)->first();

            $data_ = [
                'name'  => $user->name,
                'email' => $user->email,
                'role'  => $user->role,
                'token' => $token,
            ];

            return response([
                'data' => $data_,
            ], 200);
        } else {
            return response()->json(['error' => 'Unauthorised'], 401);
        }
    }

    public function userInfo() {

        $user = auth()->user();

        return response()->json(['user' => $user], 200);
    }
}
