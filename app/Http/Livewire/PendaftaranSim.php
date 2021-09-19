<?php

namespace App\Http\Livewire;

use App\Models\NotifSim;
use App\Models\Pengguna;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;

class PendaftaranSim extends Component
{

    public $nama_lengkap, $jenis_sim, $tanggal_lahir, $telepon ,$masa_berlaku, $tanggal_pendaftaran, $layanan, $alamat;
    public function rules()
    {
        return [
            'nama_lengkap' => 'required',
            'tanggal_lahir' => 'required',
            'telepon' => 'required',
            'alamat' => 'required',
            'jenis_sim' => 'required_if:layanan,==,sim',
            'tanggal_pendaftaran' => 'required',
            'masa_berlaku' => 'required',
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
            $pengguna->alamat = $this->alamat;
            $pengguna->jenis_sim = $this->jenis_sim;
            $pengguna->tanggal_pendaftaran = $this->tanggal_pendaftaran;
            $pengguna->masa_berlaku = $this->masa_berlaku;
            $pengguna->save();
            $this->alert('success', 'Data berhasil disimpan');

            /*membuat parameter untuk kebutuhan wablas*/
            $satu_bulan = Carbon::parse($this->masa_berlaku)->subMonth()->format('Y-m-d');
            $dua_minggu = Carbon::parse($this->masa_berlaku)->subWeeks(2)->format('Y-m-d');
            $satu_minggu = Carbon::parse($this->masa_berlaku)->subWeeks(1)->format('Y-m-d');
            $jatuh_tempo = Carbon::parse($this->masa_berlaku)->format('Y-m-d');

            $waktu = Carbon::now()->format('H:i');

            $jenis_layanan = $this->jenis_sim ?? $this->layanan;

            $isi_pesan = NotifSim::first();

            $diganti = [
                ':jatuh_tempo' => $this->masa_berlaku,
                ':jenis_sim' => $this->jenis_sim,
                ':alamat' => $this->alamat,
                'jatuh_tempo' => $jatuh_tempo,
            ];


            $pesan_pendaftaran = str_replace(array_keys($diganti), $diganti, $isi_pesan->pendaftaran);

            $notif_satu_bulan = str_replace(array_keys($diganti), $diganti, $isi_pesan->satu_bulan);
            $notif_dua_minggu = str_replace(array_keys($diganti), $diganti, $isi_pesan->dua_minggu);
            $notif_satu_minggu = str_replace(array_keys($diganti), $diganti, $isi_pesan->satu_minggu);
            $notif_jatuh_tempo = str_replace(array_keys($diganti), $diganti, $isi_pesan->jatuh_tempo);


            kirimNotif($this->telepon, $pesan_pendaftaran);

            buatPengingat($this->telepon, $notif_satu_bulan , $satu_bulan, $waktu );
            buatPengingat($this->telepon, $notif_dua_minggu , $dua_minggu, $waktu );
            buatPengingat($this->telepon, $notif_satu_minggu , $satu_minggu, $waktu );
            buatPengingat($this->telepon, $notif_jatuh_tempo , $jatuh_tempo, $waktu );

            $this->reset();
        }catch (QueryException $exception){
            $this->alert('error', $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pendaftaran-sim')->layout('layouts.guest');
    }
}
