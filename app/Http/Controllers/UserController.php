<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function index()
    {
        $users=User::where("status","=",1)->paginate();
        return view('usuarios.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::get();
        return view('usuarios.create', compact('roles'));
    }

    public function store(Request $request)
    {
        //creacioon del usuario
        $user = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        // Asignando rol       
        if ($request['rol'] != 0) {
            $user->roles()->sync($request->get('rol'));
        }
        return redirect('users');
    }

    public function show(User $user)
    {
       $roles = DB::table('roles')
       ->join('role_user', 'roles.id', '=', 'role_user.role_id')
       ->join('users', 'users.id', '=', 'role_user.user_id')
       ->select('roles.name')
       ->where('role_user.user_id', '=', $user->id)
       ->take(1)->get();
       if(count($roles)>0)
       {
        
        $rol = $roles[0]->name;
     
        return view('usuarios.show',compact('user','rol'));
       }
       $rol = "No se ha asignado ningun rol";
       return view('usuarios.show',compact('user','rol'));
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();
        return view('usuarios.edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->update();
        if ($request['rol'] != 0) {
            $user->roles()->sync($request->get('rol'));
        }
        return redirect('users');
    }
    public function destroy(User $user)
    {
    if($user->status==false)
        $user->status=true;
    else{
      $user->status=false;
      $user->roles()->sync(2);    
      $user->save();
    }
    $users = User::all();
    return redirect('users');
    }
      
}
