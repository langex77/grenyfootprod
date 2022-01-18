<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Profiler\Profile;

class ProfilController extends Controller
{

   
    public function show (User $user)
    {
           
            
            //return view('profiles.show',compact('user'));
            
            
    }


}
