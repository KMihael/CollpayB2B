<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Http\Requests\Api\Auth\StoreUserRequest;

class RegisterController extends Controller
{
    public function register(StoreUserRequest $request)
    {
        return 'REGISTER';
    }
}
