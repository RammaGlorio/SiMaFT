<div>
    <section class="content">
        <div class="container-fluid">
            <div class=" pl-2 pr-2 pt-3">

                @if(Auth::user()->role == 'Umum')    
                    @livewire('dashboard.umum')
                @elseif(Auth::user()->role == 'Dekan')
                    @livewire('dashboard.dekan')
                @elseif(Auth::user()->role == 'PD1')
                    @livewire('dashboard.pd1')
                @elseif(Auth::user()->role == 'PD3')
                    @livewire('dashboard.pd3')
                @elseif(Auth::user()->role == 'Kabag')
                    @livewire('dashboard.kabag')
                @elseif(Auth::user()->role == 'Pendidikan')
                    @livewire('dashboard.pendidikan')
                @elseif(Auth::user()->role == 'Kemahasiswaan')
                    @livewire('dashboard.kemahasiswaan')
                @endif

            </div>
        </div>
    </section>
</div>
