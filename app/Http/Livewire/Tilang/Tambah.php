<?php

namespace App\Http\Livewire\Tilang;

use App\Models\NotifPajakLima;
use App\Models\NotifSim;
use App\Models\NotifStnk;
use App\Models\NotifTilang;
use App\Models\Tilang;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;

class Tambah extends Component
{
    public $nama_lengkap, $tanggal_lahir, $telepon, $waktu_sidang, $pasal_pelanggaran, $identitas_kendaraan, $tempat_sidang, $nopol, $briva;

    public function rules()
    {
        return[
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'nopol' => 'required',
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
            $tilang->nopol = $this->nopol;
            $tilang->briva = $this->briva;
            $tilang->waktu_sidang = $this->waktu_sidang;
            $tilang->tempat_sidang = $this->tempat_sidang;
            $tilang->pasal_pelanggaran = $this->pasal_pelanggaran;
            $tilang->identitas_kendaraan = $this->identitas_kendaraan;
            $tilang->save();
            $this->alert('success', 'Data berhasil disimpan');


            $jatuh_tempo = Carbon::parse($this->waktu_sidang)->format('Y-m-d');

            $waktu = Carbon::now()->format('H:i');

            $pesan_tilang = NotifTilang::first();

            $diganti = [
                ':nama_lengkap' => $this->nama_lengkap,
                ':jatuh_tempo' => $this->waktu_sidang,
                ':tempat_sidang' => $this->tempat_sidang,
            ];

            $pendaftaran = str_replace(array_keys($diganti), $diganti, $pesan_tilang->pembukaan);

            $notif_tilang_jatuh_tempo = str_replace(array_keys($diganti),$diganti, $pesan_tilang->jatuh_tempo);

            kirimNotif($this->telepon, $pendaftaran);
            buatPengingat($this->telepon, $notif_tilang_jatuh_tempo , $jatuh_tempo, $waktu );

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
