<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('can:users.index')->only('index');
        //$this->middleware('can:users.create')->only('create','store');
        //$this->middleware('can:users.show')->only('show');
        $this->middleware('can:users.edit')->only('edit','update');
        //$this->middleware('can:users.destroy')->only('destroy');
    }

    public function index()
    {
        $users = User::paginate();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        /* $this->validate($request, [
            'name' => 'required|max:20|regex:/^[A-Z,a-z, ,á,é,í,ó,ú,ñ,&]+$/',
            'email' => 'required|email|max:100,|unique:users,email,' . $request->id,
            'password' => 'nullable|min:8|max:10',
        ]);

        $input = $request->all();

        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }
        $user = User::where('id', $request->id);
        $user->update($request->all());

        DB::table('model_has_roles')->where('model_id', $user)->delete(); */
        //dd($request);
        $user->roles()->sync($request->roles);
        return redirect()->route('users.index')->with('success', 'Se registró correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
