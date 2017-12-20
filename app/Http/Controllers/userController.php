<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\flight;
use App\user;
class userController extends Controller
{
    //
     function flights($id)
    {
        $flights=user::find($id)->flights;
        return $flights;
        
    }
}
