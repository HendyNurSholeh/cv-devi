<?php

namespace App\Controllers\User;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "Login | CV. Devi"
        ];
        return view('user/login', $data);
    }
}
