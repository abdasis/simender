<?php

namespace App\Http\Livewire\Setting;

use App\Models\Setting;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Sistem extends Component
{
    use WithFileUploads;
    public $nama_aplikasi, $tagline, $logo, $text_footer, $preview;

    public function rules()
    {
        return[
            'nama_aplikasi' => 'required',
            'tagline' => 'required',
            'text_footer' => 'required'
        ];
    }

    public function updatedLogo()
    {
        $this->preview = $this->logo->getRealPath();
    }

    public function mount()
    {
        $pengaturan  = Setting::first();
        if (!empty($pengaturan)){
            $this->nama_aplikasi = $pengaturan->nama_aplikasi;
            $this->tagline = $pengaturan->tagline;
            $this->logo = $pengaturan->logo;
            $this->text_footer = $pengaturan->text_footer;
        }
    }
    public function simpan()
    {
        $this->validate();
        if ( !is_string($this->logo) && file_exists(public_path('icons/logo.png'))){
            \File::delete(public_path('icons/logo.png'));
        }

        if (!empty($this->logo) && !is_string($this->logo)){
            $this->logo->storeAs('icons', 'logo.png');
        }


        try {
            $pengaturan = Setting::first();
            if (empty($pengaturan))
            {
                $pengaturan = new Setting();
                $pengaturan->nama_aplikasi = $this->nama_aplikasi;
                $pengaturan->tagline = $this->tagline;
                $pengaturan->logo = 'icons/logo.png';
                $pengaturan->text_footer = $this->text_footer;
                $pengaturan->save();
            }else{
                $pengaturan = Setting::first();
                $pengaturan->nama_aplikasi = $this->nama_aplikasi;
                $pengaturan->tagline = $this->tagline;
                $pengaturan->logo = 'icons/logo.png';
                $pengaturan->text_footer = $this->text_footer;
                $pengaturan->save();
            }
            $this->alert('success', 'Pengaturan Berhasil Diperbarui');
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }

    }
    public function render()
    {
        return view('livewire.setting.sistem');
    }
}
