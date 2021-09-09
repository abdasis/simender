<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Pengguna;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Tambah extends Component
{
    public $nama_lengkap, $jenis_sim, $tanggal_lahir, $telepon ,$masa_berlaku, $tanggal_pendaftaran;
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required',
            'jenis_sim' => 'required',
            'tanggal_pendaftaran' => 'required',
            'masa_berlaku' => 'required'
        ];
    }
    public function simpan()
    {
        try {
            $pengguna = new Pengguna();
            $pengguna->nama_lengkap = $this->nama_lengkap;
            $pengguna->tanggal_lahir = $this->tanggal_lahir;
            $pengguna->telepon = $this->telepon;
            $pengguna->jenis_sim = $this->jenis_sim;
            $pengguna->tanggal_pendaftaran = $this->tanggal_pendaftaran;
            $pengguna->masa_berlaku = $this->masa_berlaku;
            $pengguna->save();
            $this->alert('success', 'Data berhasil disimpan');
            kirimNotif($this->telepon, 'Hai bro pengajuan sim anda sudah dibuat');
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pengguna.tambah');
    }
}
