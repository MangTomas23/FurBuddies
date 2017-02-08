<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function DisplayName() {
      $name = "PornBoy";
      return view('profile',['name' => $name]);
    }
}
