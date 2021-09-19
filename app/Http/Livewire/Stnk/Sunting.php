<?php

namespace App\Http\Livewire\Stnk;

use App\Models\Stnk;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Sunting extends Component
{
    public $nama_lengkap,$tanggal_lahir, $identitas_kendaraan, $pajak_tahunan, $pajak_lima_tahun, $telepon, $nopol,$alamat;
    public $stnk_id;

    public function mount($id)
    {
        $stnk = Stnk::find($id);
        $this->nama_lengkap = $stnk->nama_lengkap;
        $this->telepon = $stnk->telepon;
        $this->tanggal_lahir = $stnk->tanggal_lahir;
        $this->identitas_kendaraan = $stnk->identitas_kendaraan;
        $this->pajak_tahunan = $stnk->pajak_tahunan;
        $this->pajak_lima_tahun = $stnk->pajak_lima_tahun;
        $this->stnk_id = $stnk->id;
        $this->nopol = $stnk->nopol;
        $this->alamat = $stnk->alamat;
    }

    public function rules()
    {
        return[
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'identitas_kendaraan' => 'required',
            'pajak_tahunan' => 'required',
            'pajak_lima_tahun' => 'required',
            'telepon' => 'required',
            'nopol' => 'required',
            'alamat' => 'required'
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $stnk = Stnk::find($this->stnk_id);
            $stnk->nama_lengkap = $this->nama_lengkap;
            $stnk->identitas_kendaraan = $this->identitas_kendaraan;
            $stnk->nopol = $this->nopol;
            $stnk->telepon = $this->telepon;
            $stnk->alamat = $this->alamat;
            $stnk->tanggal_lahir = $this->tanggal_lahir;
            $stnk->pajak_tahunan = $this->pajak_tahunan;
            $stnk->pajak_lima_tahun = $this->pajak_tahunan;
            $stnk->save();
            $this->alert('success', 'Data berhasil diupdate');
        }catch (QueryException $exception){
            $this->alert('error', 'Terjadi kesalahan saat menambahkan data');
        }
    }
    public function render()
    {
        return view('livewire.stnk.sunting');
    }
}
