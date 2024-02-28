<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RolesController extends Controller
{
    public function index() {
        return view('page.role.index');
    }

    public function add() {
        return view('page.role.add');
    }

}
