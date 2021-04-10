<?php

namespace App\Http\Controllers\Admins;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admins\CreateUserRequest;
use App\Http\Requests\Admins\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{

    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('admins.users', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CreateUserRequest $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role
        ]);
        return redirect()->route('admins.users.all');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $id
     * @return void
     */
    public function edit(User $id)
    {
        $user = $id;
        return view('admins.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param User $id
     * @return void
     */
    public function update(UpdateUserRequest $request, User $id)
    {
        if ($request->password){
            $password = Hash::make($request->password);
        }
        else{
            $password = $id->password;
        }
        $id->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $password,
            'role' => $request->role
        ]);
        return redirect()->route('admins.users.all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $id)
    {

        $id->delete();
        return redirect()->route('admins.users.all');
    }
}
