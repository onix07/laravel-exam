<?php

namespace App\Livewire\Users;

use Livewire\Component;
use App\Models\User;
use App\Models\Role;

class Add extends Component
{
    public $name;
    public $email;
    public $selectedRoles = [];

    public function submit(){
        $this->validate([
            'name' => 'required|min:2',
            'email' => 'required|email|unique:users,email',
            'selectedRoles' => 'required|array',
        ]);

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
        ]);

        $user->roles()->attach($this->selectedRoles);

        session()->flash('message', 'User successfully created.');

        $this->reset();
    }


 public function render()
    {
        $roles = Role::all();

        return view('livewire.users.add', compact('roles'));
    }

}

