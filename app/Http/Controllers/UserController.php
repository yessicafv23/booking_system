<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class UserController extends Controller
{
    //Listar usuarios
    public function index()
    {
        $users = User::paginate(5);

        return view('users.index', compact('users'));
    }

    //Crear Usuario
    public function create()
    {
        return view('users.create');
    }

    //Guardar usuario
    public function store(Request $request)
    {
        User::create($request->only('name', 'username', 'email')
        + [
            'password' => bcrypt($request->input('password')),
        ]);
        return redirect()->route('users.index')->with('success', 'Usuario registrado correctamente!');
    }

    // Mostrar usuario
    public function show(User $user)
    {
        //$user = User::findOrFail($id);
        return view('users.show', compact('user'));
    }

    //Editar usuario
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        //$user = User::findOrFail($id);
        $data = $request->only('name', 'username', 'email');

        $password=$request->input('password');
        if($password)
        $data['password'] = bcrypt($password);
        
        /*if(trim($request->password)=='')
        {
            $data=$request->except('password');
        }
        else
        {
            $data=$request->all();
            $data['password']=bcrypt($request->password);
        }*/
        
        $user->update($data);
        return redirect()->route('users.index')->with('success', 'Usuario actualizado correctamente!');

    }

    //Eliminar usuario
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'Usuario eliminado correctamente');
    }
}
