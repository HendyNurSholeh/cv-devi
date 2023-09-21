<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class History extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Akun | CV. Devi"
        ];
        return view('admin/history', $data);
    }
}