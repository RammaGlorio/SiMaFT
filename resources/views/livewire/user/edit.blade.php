<div>
    <div class="card">
        <div class="card-body">
            <form wire:submit.prevent="update">
                <input type="hidden" wire:model="postId">
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
                   <input type="email" wire:model="email" class="form-control @error('email') is-invalid @enderror" rows="4" placeholder="Masukkan Konten">
                   @error('email')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>PASSWORD</label>
                   <input type="password" wire:model="password" class="form-control @error('password') is-invalid @enderror" rows="4" placeholder="Masukkan Konten">
                   @error('password')
                        <span class="invalid-feedback">
                                {{ $message }}
                         </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label>STATUS</label>
                    <select class="form-control" wire:model="role" id="exampleFormControlSelect1">
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

                <button type="submit" class="btn btn-primary">UPDATE</button>
            </form>
        </div>
    </div>
</div>