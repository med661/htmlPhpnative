<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
class userController extends Controller
{
    //

    /**
* Store a newly created resource in storage.
*
* @param \Illuminate\Http\Request $request
* @return \Illuminate\Http\Response
*/
public function store(Request $req)
{
$Users= new \App\Models\Users();
$Users->nom=$req->input('nom');
$Users->prenom=$req->input('prenom');
$Users->actif=$req->input('actif');
$Users->email=$req->input('email');
$Users->save();

return redirect()->action([userController::class, 'index']);
}
    
        /**
        * Display a listing of the resource.
        *
        * @return \Illuminate\Http\Response
        */
        public function index()
        {
       /* $Users = Users::latest()->paginate(5);
        return view('Users.index', compact('Users'))
        ->with('i', (request()->input('page', 1) - 1) * 5);*/
        $users = Users::latest()->paginate(5);
    
        return view('users.index',compact('users'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
        }

        /**
        * Display the specified resource.
        *
        * @param \App\Models\Users $Users
        * @return \Illuminate\Http\Response
        */
        public function show(Users $Users)
        {
        return view('users.show', compact('Users'));
        }
            /**
            * Remove the specified resource from storage.
            *
            * @param \App\Models\Users $Users
            * @return \Illuminate\Http\Response
            */
    public function destroy(Users $Users)
            {
            $Users->delete();
            return redirect()->action([userController::class, 'index']);
            }

            /**
* Show the form for creating a new resource.
*
* @return \Illuminate\Http\Response
*/
public function create()
{
        return view('users.create');
}


/**
* Update the specified resource in storage.
*
* @param \Illuminate\Http\Request $request
* @param \App\Models\Users $Users
* @return \Illuminate\Http\Response
*/
public function update(Request $req)
{
//$Personne= Personne::find($Personne);
$Users= Users::find($req->input('idh'));
$Users->id=$req->input('idh');
$Users->nom=$req->input('nom');
$Users->prenom=$req->input('prenom');
$Users->actif=$req->input('actif');
$Users->email=$req->input('email');
$Users->save();
return redirect()->action([userController::class, 'index']);
}

/**
* Show the form for editing the specified resource.
*
* @param \App\Models\Users $Users
* @return \Illuminate\Http\Response
*/
public function edit(Users $Users)
{
return view('users.edit', compact('Users'));
}
}
