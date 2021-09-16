<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PendaftaranStnk extends Component
{
    public function render()
    {
        return view('livewire.pendaftaran-stnk')->layout('layouts.guest');
    }
}
