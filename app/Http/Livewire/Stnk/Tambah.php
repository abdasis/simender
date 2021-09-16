<?php

namespace App\Http\Livewire\Stnk;

use App\Models\Stnk;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Tambah extends Component
{

    public $nama_lengkap,$tanggal_lahir, $identitas_kendaraan, $pajak_tahunan, $pajak_lima_tahun, $telepon, $nopol;

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

        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $stnk = new Stnk();
            $stnk->nama_lengkap = $this->nama_lengkap;
            $stnk->telepon = $this->telepon;
            $stnk->identitas_kendaraan = $this->identitas_kendaraan;
            $stnk->nopol = $this->nopol;
            $stnk->tanggal_lahir = $this->tanggal_lahir;
            $stnk->pajak_tahunan = $this->pajak_tahunan;
            $stnk->pajak_lima_tahun = $this->pajak_tahunan;
            $stnk->save();
            $this->alert('success', 'Data berhasil disimpan');
            $this->reset();
        }catch (QueryException $exception){
            $this->alert('error', 'Terjadi kesalahan saat menambahkan data' . $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.stnk.tambah');
    }
}
