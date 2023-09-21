<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Perusahaan extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Daftar Perusahaan | CV. Devi"
        ];
        return view('admin/perusahaan', $data);
    }
}