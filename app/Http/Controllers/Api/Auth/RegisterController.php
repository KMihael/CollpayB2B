<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Users\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Api\Auth\StoreUserRequest;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    }
}
