<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class ManajementAkun extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Manajement Akun | CV. Devi"
        ];
        return view('admin/manajement_akun', $data);
    }
}