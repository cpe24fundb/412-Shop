<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ManageUserController extends Controller
{
    public function all()
    {
        $users = User::all();

        return view('admin.manager.user.view', [
            'users' => $users
        ]);
    }

    public function view($id)
    {
        $user = User::findOrFail($id);
        $users = User::all();

        return view('admin.manager.user.view', [
            'user' => $user,
            'users' => $users
        ]);
    }

    public function create(Request $request)
    {
        $user = new User;
        $user->name = $request->input('name');
        $user->manager_flag = $request->input('manager_flag');
        $user->founder_flag = $request->input('founder_flag');
        $user->username = $request->input('username');
        $user->password = app('hash')->make($request->input('password'));
        $user->total_fund = $request->input('total_fund');
        $user->save();

        return redirect()->route('admin.manager.user');
    }

    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request->input('name') ?? $user->name;
        $user->manager_flag = $request->input('manager_flag') ?? false;
        $user->founder_flag = $request->input('founder_flag') ?? false;
        $user->username = $request->input('username') ?? $user->username;
        if (!empty($request->input('password')))
            $user->password = bcrypt($request->input('password'));
        $user->total_fund = $request->input('total_fund') ?? $user->total_fund;
        $user->save();

        return redirect()->route('admin.manager.user');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('admin.manager.user');
    }
}