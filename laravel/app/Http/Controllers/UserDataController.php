<?php

namespace App\Http\Controllers;

use App\Models\UserData;

class UserDataController extends Controller
{
    public function store()
    {

        $data = request()->validate([
            'name' => 'bail|string|max:255|required',
            'email' => 'bail|string|email:rfc,strict|max:255|required|regex:/^[\w\d_.-]+?@[\w\d_-]+\.[\w\d_-]+$/i',
            'message' => 'bail|string|required',
        ]);
        UserData::create($data);

        return redirect()->route('main.index');
    }
}
