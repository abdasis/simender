<?php

namespace App\Http\Livewire\Pesan;

use Livewire\Component;

class NotifPajak extends Component
{

    public $pendaftaran, $dua_bulan, $satu_bulan , $dua_minggu, $jatuh_tempo;

    public function mount()
    {
        $notif = \App\Models\NotifPajakLima::first();
        if (!empty($notif)){

            $this->pendaftaran = $notif->pendaftaran;
            $this->dua_bulan = $notif->dua_bulan;
            $this->satu_bulan   = $notif->satu_bulan;
            $this->dua_minggu   = $notif->dua_minggu;
            $this->jatuh_tempo = $notif->jatuh_tempo;
        }
    }
    public function simpan()
    {

        $notif = \App\Models\NotifPajakLima::first();
        if (!empty($notif)){
            $notif->pendaftaran = $this->pendaftaran;
            $notif->dua_bulan = $this->dua_bulan;
            $notif->satu_bulan = $this->satu_bulan;
            $notif->dua_minggu = $this->dua_minggu;
            $notif->jatuh_tempo = $this->jatuh_tempo;
            $notif->save();
            $this->alert('success', 'Data berhasil disimpan');
        }else{
            $notif = new \App\Models\NotifPajakLima();
            $notif->pendaftaran = $this->pendaftaran;
            $notif->dua_bulan = $this->dua_bulan;
            $notif->satu_bulan = $this->satu_bulan;
            $notif->dua_minggu = $this->dua_minggu;
            $notif->jatuh_tempo = $this->jatuh_tempo;
            $notif->save();
            $this->alert('success', 'Data berhasil disimpan');
        }
    }

    public function render()
    {
        return view('livewire.pesan.notif-pajak');
    }
}
