<?php

namespace App\Http\Livewire\Setting;

use Illuminate\Database\QueryException;
use Livewire\Component;

class Whatsapp extends Component
{
    public $token, $domain;

    public function mount()
    {
        $whatsapp = \App\Models\Whatsapp::first();
        if (!empty($whatsapp)){
            $this->token = $whatsapp->token;
            $this->domain = $whatsapp->domain;
        }
    }
    public function simpan()
    {
        try {
            $checkData = \App\Models\Whatsapp::first();
            if (empty($checkData)){
                $whatsapp = new \App\Models\Whatsapp();
                $whatsapp->token = $this->token;
                $whatsapp->domain = $this->domain;
                $whatsapp->save();
                $this->alert('success', 'Data berhasil disimpan');
            }else{
                $whatsapp = \App\Models\Whatsapp::first();
                $whatsapp->token = $this->token;
                $whatsapp->domain = $this->domain;
                $whatsapp->save();
                $this->alert('success', 'Perubahan Berhasil Disimpan');
            }
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.setting.whatsapp');
    }
}
