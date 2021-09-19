<?php

namespace App\Http\Livewire;

use App\Models\NotifPajakLima;
use App\Models\NotifStnk;
use App\Models\Stnk;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Livewire\Component;

class PendaftaranStnk extends Component
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

            /*membuat parameter untuk kebutuhan wablas*/
            $dua_bulan_tahunan = Carbon::parse($this->pajak_tahunan)->subMonths(2)->format('Y-m-d');
            $satu_bulan_tahunan = Carbon::parse($this->pajak_tahunan)->subMonth()->format('Y-m-d');
            $dua_minggu_tahunan = Carbon::parse($this->pajak_tahunan)->subWeeks(2)->format('Y-m-d');
            $jatuh_tempo_tahunan = Carbon::parse($this->pajak_tahunan)->format('Y-m-d');

            /*membuat parameter untuk kebutuhan wablas*/
            $dua_bulan_lima_tahun = Carbon::parse($this->pajak_lima_tahun)->subMonths(2)->format('Y-m-d');
            $satu_bulan_lima_tahun = Carbon::parse($this->pajak_lima_tahun)->subMonth()->format('Y-m-d');
            $dua_minggu_lima_tahun = Carbon::parse($this->pajak_lima_tahun)->subWeekdays(2)->format('Y-m-d');
            $jatuh_tempo_lima_tahun = Carbon::parse($this->pajak_lima_tahun)->format('Y-m-d');

            $waktu = Carbon::now()->format('H:i');

            $pesan_stnk = NotifStnk::first();
            $pesan_pajak = NotifPajakLima::first();

            $diganti = [
                ':jatuh_tempo' => $this->pajak_tahunan,
                ':nopol' => $this->nopol
            ];

            $pendaftaran = str_replace(array_keys($diganti), $diganti, $pesan_stnk->pendaftaran);

            $notif_stnk_dua_bulan = str_replace(array_keys($diganti),$diganti, $pesan_stnk->dua_bulan);
            $notif_stnk_satu_bulan = str_replace(array_keys($diganti),$diganti, $pesan_stnk->satu_bulan);
            $notif_stnk_dua_minggu = str_replace(array_keys($diganti),$diganti, $pesan_stnk->dua_minggu);
            $notif_stnk_jatuh_tempo = str_replace(array_keys($diganti),$diganti, $pesan_stnk->jatuh_tempo);

            $notif_pajak_dua_bulan = str_replace(array_keys($diganti),$diganti, $pesan_pajak->dua_bulan);
            $notif_pajak_satu_bulan = str_replace(array_keys($diganti),$diganti, $pesan_pajak->satu_bulan);
            $notif_pajak_dua_minggu = str_replace(array_keys($diganti),$diganti, $pesan_pajak->dua_minggu);
            $notif_pajak_jatuh_tempo = str_replace(array_keys($diganti),$diganti, $pesan_pajak->jatuh_tempo);


            kirimNotif($this->telepon, $pendaftaran);

            buatPengingat($this->telepon, $notif_stnk_dua_bulan , $dua_bulan_tahunan, $waktu );
            buatPengingat($this->telepon, $notif_stnk_satu_bulan , $satu_bulan_tahunan, $waktu );
            buatPengingat($this->telepon, $notif_stnk_dua_minggu , $dua_minggu_tahunan, $waktu );
            buatPengingat($this->telepon, $notif_stnk_jatuh_tempo , $jatuh_tempo_tahunan, $waktu );

            buatPengingat($this->telepon, $notif_pajak_dua_bulan , $dua_bulan_lima_tahun, $waktu );
            buatPengingat($this->telepon, $notif_pajak_satu_bulan , $satu_bulan_lima_tahun, $waktu );
            buatPengingat($this->telepon, $notif_pajak_dua_minggu , $dua_minggu_lima_tahun, $waktu );
            buatPengingat($this->telepon, $notif_pajak_jatuh_tempo , $jatuh_tempo_lima_tahun, $waktu );

            $this->reset();
        }catch (QueryException $exception){
            $this->alert('error', 'Terjadi kesalahan saat menambahkan data' . $exception->getMessage());
        }
    }
    public function render()
    {
        return view('livewire.pendaftaran-stnk')->layout('layouts.guest');
    }
}
