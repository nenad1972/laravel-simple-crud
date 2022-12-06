<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
Use Hash;
class UserController extends Controller
{
    //
    public function index(){
        $user=User::all();
        return view('home',compact('user'));
    }
    public function edit(User $user){

        return view('edit',compact('user'));
    }
    public function update(User $user,Request $req){
      $this->validate($req,[
        'name'=>'required',
        'email'=>'required',
      ]);
        $user->update([
            $user->name=$req->name,
            $user->email=$req->email,
        ]);
        $user->save();
        return redirect()->route('home');
    }
    public function delete(User $user){
        $user->delete();
        return redirect()->route('home');
    }
    public function show(User $user){
        return view('show',compact('user'));
    }
    public function create(User $user,Request $req){
        $user->create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password),
        ]);
        return redirect()->route('home');
    }
}
