<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminController extends Controller
{
    public function accounts(){
        $users = User::where('first_login' , true)->orderBy('created_at','asc')->paginate(3);
        return view('admin.accounts', compact('users'));
    }
}
