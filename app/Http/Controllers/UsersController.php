<?php

namespace App\Http\Controllers;

use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::with('roles')->orderBy('id', 'desc')->paginate(8);

        return view('admin.users.index',compact('users', 'roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('admin.users.create')->withRoles($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'lieu_naissance' => ['required', 'string', 'max:15'],
            'date_naissance' => ['date:"dd/mm/yyyy"'],
            'prenom' => ['required', 'string', 'min:6', 'max:20'],
            'telephone' => ['required', 'unique:users', 'numeric', 'digits:9'],
            'sexe' => ['required'],
            'login' => ['required', 'string', 'min:6', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $input = $request->all();
        $password = $input['password'];
        $user = new User();
        $user->name = $request->name;
        $user->lieu_naissance = $request->lieu_naissance;
        $user->date_naissance = $request->date_naissance;
        $user->prenom = $request->prenom;
        $user->telephone = $request->telephone;
        $user->sexe = $request->sexe;
        $user->login = $request->login;
        $user->role_id = $request->roles;
        $user->password = Hash::make($password);
        $user->save();

//        if ($request->input('roles')) {
//            $user->roles()->attach($request->input('roles'));
//        }

        return redirect()->route('users.index')->with('success',"L'utilisateur a bien été créer");

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::where('id', $id)->with('roles')->first();
        return view("admin.users.show")->withUser($user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::all();
        $user = User::where('id', $id)->with('roles')->first();
        return view("admin.users.edit")->withUser($user)->withRoles($roles);
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
        $this->validateWith([
            'name' => ['required', 'string', 'max:255'],
            'lieu_naissance' => ['required', 'string', 'max:255'],
            'date_naissance' => ['date:"dd/mm/yyyy"'],
            'prenom' => ['required', 'string', 'min:6', 'max:255'],
            'telephone' => ['required'],
            'sexe' => ['required'],
            'login' => ['required', 'string', 'min:6', 'max:255'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);

        $user = User::findOrFail($id);


        $mdpuser = $request->input('password');
        $verifypass = password_verify($mdpuser, $user->password);

        if ($verifypass == true)
        {
            $user->name = $request->name;
            $user->lieu_naissance = $request->lieu_naissance;
            $user->date_naissance = $request->date_naissance;
            $user->prenom = $request->prenom;
            $user->telephone = $request->telephone;
            $user->sexe = $request->sexe;
            $user->login = $request->login;
            $user->role_id = $request->roles;
            $user->password = Hash::make($request->password);

            $user->save();
        }else{
            return redirect()->route('users.edit', $user->id)->with('error', "L'ancien mot de passe est invalide");
        }

//        $user->roles()->attach($request->input('roles'));

        return redirect()->route('users.index')->with('success',"L'utilisateur a bien été modifier");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        return redirect()->route('users.index')->with('success', "L'utilisateur a bien été supprimé");
    }
}
