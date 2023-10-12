<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index(): string
    {
        $data = [
            "title" => "User Login | CV. Devi"
        ];
        return view('admin/login', $data);
    }
}
