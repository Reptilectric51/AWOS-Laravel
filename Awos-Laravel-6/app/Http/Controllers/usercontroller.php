<?php

namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Alumnos;
 use APP\Alumnos as ProductCreateRequest;

 class UserController extends Controllers
 {
public function __construct (Alumnos $Alumnos){
    $this->Alumnos = Alumnos;
}

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