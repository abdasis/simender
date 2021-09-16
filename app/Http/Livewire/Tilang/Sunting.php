<?php

namespace App\Http\Livewire\Tilang;

use App\Models\Tilang;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Sunting extends Component
{

    public $nama_lengkap, $tanggal_lahir, $telepon, $waktu_sidang, $pasal_pelanggaran, $identitas_kendaraan, $nopol;
    public $tilang_id;

    public function mount($id)
    {
        $tilang = Tilang::find($id);
        $this->nama_lengkap = $tilang->nama_lengkap;
        $this->tanggal_lahir = $tilang->tanggal_lahir;
        $this->telepon = $tilang->telepon;
        $this->nopol = $tilang->nopol;
        $this->waktu_sidang = $tilang->waktu_sidang;
        $this->tempat_sidang = $tilang->tempat_sidang;
        $this->pasal_pelanggaran = $tilang->pasal_pelanggaran;
        $this->identitas_kendaraan = $tilang->identitas_kendaraan;
        $this->tilang_id  = $tilang->id;
    }
    public function rules()
    {
        return[
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'nopol' => 'required',
            'telepon' => 'required|numeric',
            'waktu_sidang' => 'date',
            'pasal_pelanggaran' => 'required',
            'identitas_kendaraan' => 'required',
        ];
    }

    public function simpan()
    {
        $this->validate();
        try {
            $tilang = Tilang::find($this->tilang_id);
            $tilang->nama_lengkap = $this->nama_lengkap;
            $tilang->tanggal_lahir = $this->tanggal_lahir;
            $tilang->telepon = $this->telepon;
            $tilang->nopol = $this->nopol;
            $tilang->waktu_sidang = $this->waktu_sidang;
            $tilang->tempat_sidang = $this->tempat_sidang;
            $tilang->pasal_pelanggaran = $this->pasal_pelanggaran;
            $tilang->identitas_kendaraan = $this->identitas_kendaraan;
            $tilang->save();
            $this->alert('success', 'Data berhasil diperbarui');
        }catch (QueryException $exception){
            $this->alert('error', 'Terjadi kesalahan saat menyimpan data');
        }
    }
    public function render()
    {
        return view('livewire.tilang.sunting');
    }
}
