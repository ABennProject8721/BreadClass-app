<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 管理者Dashboadの表示
    public function index()
    {
        return view('admin.dashboard');
    }
}
