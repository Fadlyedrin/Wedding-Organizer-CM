<?php

namespace App\Http\Controllers\back;

use App\Models\User;
use App\Models\Gallery;
use App\Models\Package;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('back.dashboard.index',[
            'total_package' => Package::count(),
            'total_categories' => Category::count(),
            'total_gallery' => Gallery::count(),
            'total_users' => User::where('role', 'user')->count(),
        ]);
    }
}
