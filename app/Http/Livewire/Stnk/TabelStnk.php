<?php

namespace App\Http\Livewire\Stnk;

use App\Traits\AlertConfirm;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Stnk;

class TabelStnk extends DataTableComponent
{

    use AlertConfirm;

    protected $listeners = ['dihapus', 'batal'];

    public function dihapus()
    {
        Stnk::find($this->model_id)->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }
    public function columns(): array
    {
        return [
            Column::make('No', 'id'),
            Column::make('Nama Lengkap', 'nama_lengkap')->sortable(),
            Column::make('Tanggal Lahir', 'tanggal_lahir')->sortable(),
            Column::make('Masa Pajak Tahunan', 'pajak_tahunan')->sortable(),
            Column::make('Masa Pajak 5 Tahunan', 'pajak_lima_tahun')->sortable(),
            Column::make('Dibuat Oleh', 'dibuat_oleh')->sortable(),
            Column::make('Opsi', 'id')
                ->format(function ($value){
                    return view('_partials.tombol_opsi',[
                        'edit' => route('stnk.sunting', $value),
                        'hapus' => $value
                    ]);
                })
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Stnk::query();
    }
}
