<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class Edit extends Component
{
    use WithPagination;

    public $userId;
    public $name;
    public $email;
    public $password;
    public $role;

    public function mount($id)
    {
        $user = User::find($id);
        
        if($user) {
            $this->userId   = $id;
            $this->name     = $user->name;
            $this->email    = $user->email;
            $this->password = $user->password;
            $this->role     = $user->role;

        }

    }
    public function update()
    {
        $this->validate([
            'name'   => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        if($this->userId) {

            $user = User::find($this->userId);
            
            if($user) {
                $user->update([
                    'name'     => $this->name,
                    'email'    => $this->email,
                    'password' => bcrypt($this->password),
                    'role'     => $this->role,
                ]);
            }
        }

        return redirect()->route('user.index');
    }
    public function render()
    {
        return view('livewire.user.edit');
    }
}
