<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;



class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $name;
    public $email;
    public $password;
    public $role;

    public function store()
    {
        $this->validate([
            'name'   => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',

        ]);

        $user = User::create([
            'name'     => $this->name,
            'email'   => $this->email,
            'password' => bcrypt($this->password),
            'role' => $this->role,
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Disimpan.');

        //redirect
        return redirect()->route('user.index');
    }

    public function destroy($userId)
    {
    $user = User::find($userId);

    if($user) {
     $user->delete();
    }

  //flash message
  session()->flash('message', 'Data Berhasil Dihapus.');

  //redirect
  return redirect()->route('user.index');

}

    public function render()
    {
        return view('livewire.user.index', [
            'users' => User::latest()->paginate(5)
        ]);
    }
}
