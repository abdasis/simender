<?php

namespace App\Http\Livewire\Tilang;

use App\Http\Traits\AlertConfirm;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Tilang;

class TabelTilang extends DataTableComponent
{
    use AlertConfirm;

    protected $listeners = ['dihapus', 'batal'];

    public function dihapus()
    {
        if ($this->model_id){
            Tilang::find($this->model_id)->delete();
            $this->alert('success', 'Data berhasil dihapus');
        }
    }
    public function columns(): array
    {
        return [
            Column::make('No', 'id'),
            Column::make('Nama Lengkap', 'nama_lengkap')->sortable(),
            Column::make('Tanggal Lahir', 'tanggal_lahir')->sortable(),
            Column::make('Telepon', 'telepon')->sortable(),
            Column::make('Waktu Sidang', 'waktu_sidang')->sortable(),
            Column::make('Pasal Pelanggaran', 'pasal_pelanggaran')->sortable(),
            Column::make('Status Pengambilan', 'diambil')
                ->format(function ($value){
                    if ($value == 0){
                        return "<div class='badge badge-warning'>Belum</div>";
                    }else{
                        return "<div class='badge badge-success'>Sudah</div>";
                    }
                })->asHtml(),
            Column::make('Opsi', 'id')
                ->format(function ($value){
                    return view('_partials.tombol_opsi',[
                        'hapus' => $value,
                        'edit' => route('tilang.sunting', $value)
                    ]);
                }),
        ];
    }

    public function query(): Builder
    {
        return Tilang::query();
    }
}
