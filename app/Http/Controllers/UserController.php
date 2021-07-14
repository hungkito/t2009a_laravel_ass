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

    public function store(StoreUserRequest $request, $obj)
    {
        $request->validate();
        $obj->identityNumber = $request->get('identityNumber');
        $obj->firstName = $request->get('firstName');
        $obj->lastName = $request->get('lastName');
        $obj->phone = $request->get('phone');
        $obj->gender = $request->get('gender');
        $obj->up();
        return redirect('/user/form');
    }
}
