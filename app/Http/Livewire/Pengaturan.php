<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\Password;
use App\Models\User;   
use Auth;

class Pengaturan extends Component
{
    use WithFileUploads;

    public $data_user, $email, $password, $tanda_tangan;

    public function mount()
    {
        $this->data_user = User::where('id', Auth::id())->first();

        $this->email = $this->data_user ? $this->data_user->email : null;

        if(!$this->data_user) return abort(404);
    }

    public function simpan_ttd()
    {
        $this->validate(
            [
                'tanda_tangan' => 'required|mimes:jpeg'
            ],
            [
                'tanda_tangan.required' => 'Tidak boleh kosong.',
                'tanda_tangan.mimes' => 'Tidak sesuai format.' 
            ]
        );

        //menyimpan gambar tanda tangan
        if($this->data_user && $this->tanda_tangan)
        {
            //menghapus file gambar    
            Storage::delete($this->data_user->tanda_tangan);

            //menyimpan file gambar
            $nama_file = uniqid() . '.' . $this->tanda_tangan->getClientOriginalExtension();
            $path = $this->tanda_tangan->storeAs('tanda-tangan', $nama_file);
        
            $this->data_user->update([
                'tanda_tangan' => $path
            ]);
        }

        session()->flash('message', 'Berhasil disimpan.');

        return redirect()->route('pengaturan-pengguna');
    }

    public function simpan_akun()
    {
        $this->validate(
            [
                'email' => 'required|email|unique:users,email,' .$this->data_user->id,
            ],
            [
                'email.required' => 'Tidak boleh kosong.',
                'email.email' => 'Tidak sesuai format email.',
                'email.unique' => 'Email telah digunakan.'
            ]
        );

        if($this->password)
        {
            $this->validate([
                'password' => [
                    Password::min(6)
                    ->mixedCase()
                    ->letters()
                    ->numbers()
                    ->symbols()
                ],
            ]);

            $this->data_user->update([
                'email' => $this->email,
                'password' => bcrypt($this->password)
            ]);
        }
        else
        {
            $this->data_user->update([
                'email' => $this->email
            ]);
        }

        session()->flash('message', 'Berhasil disimpan.');

        return redirect()->route('pengaturan-pengguna');
    }

    public function render()
    {
        return view('livewire.pengaturan');
    }
}
