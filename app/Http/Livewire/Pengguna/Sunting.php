<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Pengguna;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Sunting extends Component
{

    public $nama_lengkap, $jenis_sim, $tanggal_lahir, $telepon ,$masa_berlaku, $tanggal_pendaftaran, $layanan;
    public $pengguna_id;

    public function mount($id)
    {
        $pengguna = Pengguna::find($id);
        $this->nama_lengkap = $pengguna->nama_lengkap;
        $this->jenis_sim = $pengguna->jenis_sim;
        $this->tanggal_lahir = $pengguna->tanggal_lahir;
        $this->telepon = $pengguna->telepon;
        $this->masa_berlaku = $pengguna->masa_berlaku;
        $this->tanggal_pendaftaran = $pengguna->tanggal_pendaftaran;
        $this->pengguna_id = $pengguna->id;

    }
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required',
            'jenis_sim' => 'required_if:layanan,==,sim',
            'tanggal_pendaftaran' => 'required',
            'masa_berlaku' => 'required',
        ];
    }
    public function simpan()
    {
        try {
            $pengguna = Pengguna::find($this->pengguna_id);
            $pengguna->nama_lengkap = $this->nama_lengkap;
            $pengguna->tanggal_lahir = $this->tanggal_lahir;
            $pengguna->telepon = $this->telepon;
            $pengguna->jenis_sim = $this->jenis_sim;
            $pengguna->tanggal_pendaftaran = $this->tanggal_pendaftaran;
            $pengguna->masa_berlaku = $this->masa_berlaku;
            $pengguna->save();
            $this->alert('success', 'Perubahan Berhasil Disimpan');
            kirimNotif($this->telepon, 'Hai bro pengajuan sim anda sudah dibuat');
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.pengguna.sunting');
    }
}
