<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;

 class UserController extends Controllers
 {
     public function index()
     {
         $alumnos=[
            "Mono",
            "Aylin",
            "Kuzo",
         ];
         return view('alumnos'. [
             'alumnos' =>$alumnos
         ]);
     }
 }
?>