<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use App\Models\Role;

class Table extends Component
{

    public $roles;

    public function mount(){
        $this->roles = Role::all();
    }

    public function render()
    {
        return view('livewire.roles.table');
    }
}
