<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class FirstController extends Controller
    {   public function __construct(){
        $this->middleware('auth')->except('showIt2');
    }
    public function showIt1(){
        return 'show it 1';
    }
    public function showIt2(){
        return 'show it 2';
    }
    public function showIt3(){
        return 'show it 3';
    }
    public function showIt4(){
        return 'show it 4';
    }

}
