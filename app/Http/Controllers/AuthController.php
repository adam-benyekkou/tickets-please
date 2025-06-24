<?php

namespace App\Http\Controllers;

use App\Http\Requests\V1\ApiLoginRequest;
use App\Traits\ApiResponse;

class AuthController extends Controller
{
    use ApiResponse;
    public function login(ApiLoginRequest $request) {
        return $this->ok($request->get('email'));
    }

    public function register() {
        return $this->ok('register');
    }
}
