<?php

namespace App\Http\Livewire\Pengguna;

use App\Http\Traits\AlertConfirm;
use App\Models\Pengguna;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Semua extends Component
{
    use AlertConfirm;
    public $keyword;

    protected $listeners = ['batal', 'delete'];

    public function delete()
    {
        
    }

}
