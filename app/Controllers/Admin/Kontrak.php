<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Kontrak extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Kontrak | CV. Devi"
        ];
        return view('admin/kontrak', $data);
    }
}