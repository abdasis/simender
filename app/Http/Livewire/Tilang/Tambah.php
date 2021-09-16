<?php

namespace App\Http\Livewire\Tilang;

use App\Models\Tilang;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Tambah extends Component
{
    public $nama_lengkap, $tanggal_lahir, $telepon, $waktu_sidang, $pasal_pelanggaran, $identitas_kendaraan, $tempat_sidang;

    public function rules()
    {
        return[
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required|numeric',
            'waktu_sidang' => 'date',
            'tempat_sidang' => 'required',
            'pasal_pelanggaran' => 'required',
            'identitas_kendaraan' => 'required',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $tilang = new  Tilang();
            $tilang->nama_lengkap = $this->nama_lengkap;
            $tilang->tanggal_lahir = $this->tanggal_lahir;
            $tilang->telepon = $this->telepon;
            $tilang->waktu_sidang = $this->waktu_sidang;
            $tilang->tempat_sidang = $this->tempat_sidang;
            $tilang->pasal_pelanggaran = $this->pasal_pelanggaran;
            $tilang->identitas_kendaraan = $this->identitas_kendaraan;
            $tilang->save();
            $this->alert('success', 'Data berhasil disimpan');
            $this->reset();
        }catch (QueryException $exception){
            $this->alert('error', 'Terjadi kesalahan saat menyimpan data');
        }
    }
    public function render()
    {
        return view('livewire.tilang.tambah');
    }
}
