<div>

<div class="card">
    <div class="card-body">
        <form wire:submit.prevent="store">
            <div class="form-group">
                <label>NAMA</label>
                <input type="text" wire:model="name" class="form-control @error('name') is-invalid @enderror" placeholder="Masukkan Title">
                @error('name')
                    <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                @enderror
            </div>

            <div class="form-group">
                <label>EMAIL</label>
                <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan Title">
                @error('email')
                    <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                @enderror
            </div>

            <div class="form-group">
                <label>PASSWORD</label>
                <input type="text" wire:model="password" class="form-control @error('password') is-invalid @enderror" placeholder="Masukkan Title">
                @error('password')
                    <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                @enderror
            </div>

            <div class="form-group">
                <label>STATUS</label>
                <select class="form-control" wire:model="role" id="exampleFormControlSelect1">
                    <option value="">Pilih</option>
                    <option value="dekan">Dekan</option>
                    <option value="pd1">Pembantu Dekan 1</option>
                    <option value="pd2">Pembantu Dekan 2</option>
                    <option value="pd3">Pembantu Dekan 3</option>
                    <option value="koord">Koordinator Administrasi</option>
                    </select>
                @error('role')
                    <span class="invalid-feedback">
                            {{ $message }}
                        </span>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">TAMBAH</button>
        </form>
    </div>
    </div>

    <table class="table table-bordered">
        <thead class="thead-dark">
            <tr>
                <th scope="col">USERNAME</th>
                <th scope="col">STATUS</th>
                <th scope="col">ACTION</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role }}</td>
                <td class="text-center">
                    <a href="{{ route('user.edit', $user->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                    <button wire:click="destroy({{ $user->id }})" class="btn btn-sm btn-danger">DELETE</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="margin-top: 10px; margin-bottom: -15px">
        {{ $daftar_surat->links() }}
    </div>
</div>
