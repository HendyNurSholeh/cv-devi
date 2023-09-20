<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('admin/home');
    }
}