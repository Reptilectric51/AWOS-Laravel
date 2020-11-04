<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;

 class UserController extends Controllers
 {
     public function index()
     {       
            $Alumnos          =   Alumnos::all();
            return Response::json(  
                array(
                        'user'      =>  $Alumnos,
                ),200);
     }
 }
?>