<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Jadwal extends BaseController
{
    public function index(): string
    {
        $data = [
            "title"=>"Jadwal | CV. Devi"
        ];
        return view('admin/jadwal', $data);
    }
}