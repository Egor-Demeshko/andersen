<?php

namespace App\Http\Controllers;

use App\Models\UserData;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $users = UserData::orderBy('created_at', 'desc')->paginate(10);

        if ($users->isNotEmpty()) {
            return view('data', compact('users'));
        } else {
            return view('layout.main');
        }
    }
}
