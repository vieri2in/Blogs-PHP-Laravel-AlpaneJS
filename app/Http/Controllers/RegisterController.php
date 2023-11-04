<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use \Pest\Laravel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class RegisterController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
//        var_dump(request()->all());
        //create the user
        $attributes = request()->validate([
            'name' => 'required|max:255|min:6',
//            'username' => 'required|max:255|min:3|unique:users,username',
            'username' => ['required', 'max:255', 'min:3', Rule::unique('users', 'username')],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => 'required|max:255|min:7'
        ]);
//        dd('success validation finished.');
//        $attributes['password'] = bcrypt($attributes['password']);
        $user = User::create($attributes);
        auth()->login($user);
//        sessions()->flash('success', 'Your acount has been created.');
        return redirect('/')->with('success', 'Your acount has been created.');
    }
}
