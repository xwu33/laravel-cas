<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Cas;

class AccessController extends Controller
{
    //
    public function access()
   {

       return view('access');
   }

   // public function link()
   // {
   //
   //     return view('link');
   // }


   public function link()
 {
     $roles = Role::all();//->except(Role::findByName('Admin')->id);//Get all roles
     return view('link')->with(['roles'=>$roles]);
 }

 public function username()
{
  $query = DB::table('users');
  return 'username';
}

public function store(request $request)
 {

     $username=Cas::getCurrentUser();
     //echo DB::INSERT('insert into users(id, uername) values(?)',[null,$username]);
     return $username;
 }

 public function select()
 {
     return view('select');
 }

}
