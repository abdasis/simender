<?php

namespace App\Http\Livewire\Pesan;

use Livewire\Component;

class NotifSim extends Component
{
    public $pendaftaran, $satu_bulan, $satu_minggu, $jatuh_tempo;

    public function mount()
    {
        $notif = \App\Models\NotifSim::first();
        if (!empty($notif)){

            $this->pendaftaran = $notif->pendaftaran;
            $this->satu_bulan = $notif->satu_bulan;
            $this->satu_minggu   = $notif->satu_minggu;
            $this->jatuh_tempo = $notif->jatuh_tempo;
        }
    }
    public function simpan()
    {

        $notif = \App\Models\NotifSim::first();
        if (!empty($notif)){
            $notif->pendaftaran = $this->pendaftaran;
            $notif->satu_bulan = $this->satu_bulan;
            $notif->satu_minggu = $this->satu_minggu;
            $notif->jatuh_tempo = $this->jatuh_tempo;
            $notif->save();
            $this->alert('success', 'Data berhasil disimpan');
        }else{
            $notif = new \App\Models\NotifSim();
            $notif->pendaftaran = $this->pendaftaran;
            $notif->satu_bulan = $this->satu_bulan;
            $notif->satu_minggu = $this->satu_minggu;
            $notif->jatuh_tempo = $this->jatuh_tempo;
            $notif->save();
            $this->alert('success', 'Data berhasil disimpan');
        }
    }
    public function render()
    {
        return view('livewire.pesan.notif-sim');
    }
}
