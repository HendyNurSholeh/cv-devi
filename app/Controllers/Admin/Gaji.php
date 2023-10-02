<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Gaji extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Gaji | CV. Devi"
        ];
        return view('admin/gaji', $data);
    }
}