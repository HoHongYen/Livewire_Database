<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersTable extends Component
{
    use WithPagination;

    public $perPage = 5;
    public $search = "";
    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::search($this->search)->paginate($this->perPage),
        ]);
    }
}
