<?php

namespace App\Http\Livewire\Pesan;

use Livewire\Component;

class NotifTilang extends Component
{

    public $pembukaan,$jatuh_tempo;

    public function mount()
    {
        $notif = \App\Models\NotifTilang::first();
        if (!empty($notif)){

            $this->pembukaan = $notif->pembukaan;
            $this->jatuh_tempo = $notif->jatuh_tempo;
        }
    }
    public function simpan()
    {

        $notif = \App\Models\NotifTilang::first();
        if (!empty($notif)){
            $notif->pembukaan = $this->pembukaan;
            $notif->jatuh_tempo = $this->jatuh_tempo;
            $notif->save();
            $this->alert('success', 'Data berhasil disimpan');
        }else{
            $notif = new \App\Models\NotifTilang();
            $notif->pembukaan = $this->pembukaan;
            $notif->jatuh_tempo = $this->jatuh_tempo;
            $notif->save();
            $this->alert('success', 'Data berhasil disimpan');
        }
    }
    public function render()
    {
        return view('livewire.pesan.notif-tilang');
    }
}
