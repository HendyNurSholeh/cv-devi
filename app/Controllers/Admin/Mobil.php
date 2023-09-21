<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Mobil extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Mobil Tanki | CV. Devi"
        ];
        return view('admin/mobil', $data);
    }
}