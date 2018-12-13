<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Validation\Rule;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Carbon;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $migalhas = json_encode([
            ["titulo"=>"Admin","url"=>route('home')],
            ["titulo"=>"Lista de Usuários","url"=>""]

        ]);

        $usuarios = User::select('id','name','email')->paginate(3);
        return view('admin.usuarios.index',compact('usuarios','migalhas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $validacao = $request->validate([
            'password' =>   ['required','string','min:6'],
            'name' =>   ['required','string','max:250'],
            'birth_at' =>   ['required','date','date_format:Y-m-d'],
            'email' =>   ['required','string','email','unique:users']
        ]);


        $data['password'] = bcrypt($data['password']);

        User::create($data);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user,$id)
    {   
        $user = User::find($id);

        return $user;
    }
   public function all(User $user)
    {   
        $users = User::select('id','name','email')->get();

        return $users;
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $data = $request->all();

        if(isset($data['password']) && $data['password'] != ''){
            $validacao = $request->validate([
                'password' =>   ['required','string','min:6'],
                'name' =>   ['required','string','max:250'],
                'email' =>   ['required','string','email',Rule::unique('users')->ignore($id)],
                'birth_at' =>   ['required','date']
            ]);
            $data['password'] = bcrypt($data['password']);
        }else{
           $validacao = $request->validate([
            'name' =>   ['required','string','max:250'],
            'email' =>   ['required','string','email',Rule::unique('users')->ignore($id)],
            'birth_at' =>   ['required','date']
        ]);
        unset($data['password']);   
       }

       User::find($id)->update($data);

       return redirect()->back();
   }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user,$id)
    {
        User::find($id)->delete();

        return redirect()->back();
    }
}
