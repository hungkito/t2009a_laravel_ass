<?php


namespace App\Http\Controllers;


use App\Http\Requests\StoreUserRequest;
use Illuminate\Routing\Controller;

class UserController extends Controller
{
    public function create()
    {
        return view('user.form');
    }

    public function store(StoreUserRequest $request)
    {
        $request->validate();
        return 'Hello';
    }
}
