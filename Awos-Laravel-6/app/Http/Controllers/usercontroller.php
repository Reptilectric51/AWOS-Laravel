<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Alumnos;

 class UserController extends Controllers
 {
     public function index()
     {       
            $alumnos          =   alumnos::all();
            return Response::json(  
                array(
                        'user'      =>  $alumnos,
                ),200);
     }
 }
?>