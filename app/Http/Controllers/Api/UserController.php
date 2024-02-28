<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Traits\HttpResponses;
use App\Http\Requests\UserRequest;

use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{

    public function index(){
           $user = User::with('roles')->get();

           return response($user)->setStatusCode(200);

    }

    public function store(UserRequest $request)
    {
         $userData = User::create($request->validated());

         $userData->roles()->attach($request->selectedRoles);
         return response($userData)->setStatusCode(200);
    }
}
