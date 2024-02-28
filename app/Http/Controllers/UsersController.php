<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {
        return view('page.user.index');
    }

    public function add() {
        return view('page.user.add');
    }

}
