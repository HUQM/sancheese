<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role_user;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dataUser['users'] = User::paginate(10);
        return view('user.index', $dataUser);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'email' => 'unique:users',
        //     'name' => 'required',
        // ]);

        $user = new User;
        $user->name = $request->user_name;
        $user->password = $request->user_password;
        $user->password = Hash::make($request->user_password);
        $user->email = $request->user_email;
        $user->save();

        $role = new Role_user();
        $role->user_id = $user->id;
        $role->role_id = '2';
        $role->save();

        return redirect('user')->with('success','Usuario registrado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user=User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    //    dd($request);
        $user = User::findOrFail($id);
        $user->name = $request->user_name;
        if($request->user_password != null )
          $user->password = Hash::make($request->user_password);
        $user->email = $request->user_email;
        $user->save();

        return redirect('user')->with('success','Cambios guardados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return redirect('user')->with('delete','Usurio eliminado');
    }
}
