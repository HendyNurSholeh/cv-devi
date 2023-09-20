<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;

class History extends BaseController
{
    public function index(): string
    {
        return view('admin/history');
    }
}