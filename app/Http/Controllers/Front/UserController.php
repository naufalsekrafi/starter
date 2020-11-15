<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function showAdminName()
    {
        return 'Nawfel Sekrafi';
    }

    public function indexOf()
    {
        $da = [];
        $da['name'] = 'nawfel';
        $da['id'] = '53500110';
        $data = [];

       /*$obj = new \stdClass();
       $obj->name = 'sofiane';
       $obj->id=28218308;*/

       return view('welcome',compact('data'));
   }
}
