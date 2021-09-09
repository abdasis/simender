<?php

namespace App\Http\Livewire\Pengguna;

use App\Http\Traits\AlertConfirm;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Pengguna;

class PenggunaTable extends DataTableComponent
{

    use AlertConfirm;

    protected $listeners = ['delete', 'batal'];

    public function delete()
    {
        $pengguna = Pengguna::find($this->model_id);
        $pengguna->delete();
        $this->alert('success', 'Data berhasil dihapus');
    }
    public function columns(): array
    {
        return [
            Column::make('No', 'id')
                ->sortable()
                ->searchable(),


            Column::make('Nama Lengkap', 'nama_lengkap')
                ->sortable()
                ->searchable(),


            Column::make('Tanggal Lahir', 'tanggal_lahir')
                ->sortable()
                ->searchable(),


            Column::make('Telepon', 'telepon')
                ->sortable()
                ->searchable(),


            Column::make('Tanggal Pendaftaran', 'tanggal_pendaftaran')
                ->sortable()
                ->searchable(),


            Column::make('Masa Berlaku', 'masa_berlaku')
                ->sortable()
                ->searchable(),

            Column::make('Action' , 'id')
                ->sortable()
                ->format(function($value) {
                    return '
                    <a href="' . route('pengguna.sunting', $value) . '"><button class="btn btn-sm btn-warning"> Edit </button> </a>
                    <button wire:click.prevent="hapus(' .$value. ')" class="btn btn-sm btn-danger"> Hapus </button>
                    ';
                })
                ->asHtml(),

        ];
    }

    public function query(): Builder
    {
        return Pengguna::query();
    }
}
