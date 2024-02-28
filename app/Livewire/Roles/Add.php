<?php

namespace App\Livewire\Roles;

use Livewire\Component;
use App\Models\Role;

class Add extends Component
{
    public $name;
     public function submit(){
        $this->validate([
            'name' => 'required|min:4',
        ]);

        $roles= Role::create([
            'name' => $this->name,
        ]);


        session()->flash('message', 'Roles successfully created.');

        $this->reset();
    }

    public function render()
    {
        return view('livewire.roles.add');
    }
}
