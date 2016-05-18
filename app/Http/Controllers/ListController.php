<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\View\View;

class ListController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('list.index', compact('users'));
    }
    
}
