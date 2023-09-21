<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Akun extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Akun | CV. Devi"
        ];
        return view('admin/akun', $data);
    }
}