<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class ManajementAkun extends BaseController
{
    public function index(): string
    {
        return view('admin/manajement_akun');
    }
}