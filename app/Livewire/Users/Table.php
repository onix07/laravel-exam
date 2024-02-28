<?php

namespace App\Livewire\Users;

use Livewire\Component;

use App\Models\User;
use App\Models\Role;


class Table extends Component
{
    public $users;
    public $usersWithRoles;

    public function mount(){
        $this->users = User::all();
    }

    public function render(){
        
        $this->usersWithRoles = User::with('roles')->get();

        return view('livewire.users.table');
    }
}
