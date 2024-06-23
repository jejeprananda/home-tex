<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        $users = User::get();

        return view('admin/user/users', ['people' => $users]);
    }

    public function create(){
        return view('web/user/create');
    }

    public function profile(){
        return view('web/user/profile');
    }

    public function store(UserRequest $request){

        $request->validated();

        User::create($request->all());

        return redirect('/users');
    }

    public function show(User $user){

        abort_if(!$user, 404);

        return view('web.user.profile', [
            'user' => $user,
        ]);
    }

    public function edit(User $user){

        return view('web/user/edit', [
            'user' => $user,
        ]);
    }

    public function update(UserRequest $request, User $user){

        $request->validated();

        $user->update($request->all());

        return redirect('/');
    }

    public function destroy(User $user){
        $user->delete();

        return redirect('/users');
    }

    public function offer(){

        return view('web.user.offer');
    }
}
