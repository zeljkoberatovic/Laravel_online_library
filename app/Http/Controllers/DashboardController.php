<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Http\Requests\StorePost;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
        return view('dashboard'); /**  ['posts' => BlogPost::all()] */
    }
}
