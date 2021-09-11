<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Pengguna;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Tambah extends Component
{
    public $nama_lengkap, $jenis_sim, $tanggal_lahir, $telepon ,$masa_berlaku, $tanggal_pendaftaran, $layanan;
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required',
            'jenis_sim' => 'required',
            'tanggal_pendaftaran' => 'required',
            'masa_berlaku' => 'required',
            'layanan' => 'required'
        ];
    }
    public function simpan()
    {
        try {
            /*menyimpan data pengguna*/
            $pengguna = new Pengguna();
            $pengguna->nama_lengkap = $this->nama_lengkap;
            $pengguna->tanggal_lahir = $this->tanggal_lahir;
            $pengguna->telepon = $this->telepon;
            $pengguna->layanan = $this->layanan;
            $pengguna->jenis_sim = $this->jenis_sim;
            $pengguna->tanggal_pendaftaran = $this->tanggal_pendaftaran;
            $pengguna->masa_berlaku = $this->masa_berlaku;
            $pengguna->save();
            $this->alert('success', 'Data berhasil disimpan');

            /*membuat parameter untuk kebutuhan wablas*/
            $tanggal = Carbon::parse($this->masa_berlaku)->subMonth()->format('Y-m-d');
            $waktu = Carbon::now()->format('H:i');

            $jenis_layanan = $this->jenis_sim ?? $this->layanan;

            kirimNotif($this->telepon, 'Hai ' . \Str::title($this->nama_lengkap) . ' ' . \Str::upper($jenis_layanan) . ' telah terdaftar di satpos 1329 Satlantas Polres Tegal Rembang masa berlaku ' . \Str::upper($jenis_layanan) . ' anda sampai dengan ' . Carbon::parse($this->masa_berlaku)->format('d F Y'));
            buatPengingat($this->telepon, 'Hai ' . \Str::title($this->nama_lengkap) . ' ' . \Str::upper($jenis_layanan) . ' telah terdaftar di satpos 1329 Satlantas Polres Tegal Rembang masa berlaku ' . \Str::upper($jenis_layanan) . ' anda sampai dengan ' . Carbon::parse($this->masa_berlaku)->format('d F y'), $tanggal, $waktu );
            $this->reset();
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pengguna.tambah');
    }
}
