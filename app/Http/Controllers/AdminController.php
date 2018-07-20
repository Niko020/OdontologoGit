<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;
use DB;
class AdminController extends Controller
{
    /* Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::where('user_roles', '=','1')->get();
         $user_list = [];
        foreach ($users as $key => $user) {
            $nombre = $user->name;
            $email = $user->email;
            //CONSIGO EL ROL
            $auxUserRole = DB::table('roles')
                        ->where('id', '=', $user->user_roles)->get();
            $userRole = $auxUserRole[0]->name;
            $aux_list =  array(
                "nombre" => $nombre,
                "email" => $email,
                "rol" => $userRole
            );
            array_push($user_list,$aux_list);
    	}
         return view('panelAdmin', compact('user_list') );
    }

}
