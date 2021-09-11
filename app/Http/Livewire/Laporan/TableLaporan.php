<?php

namespace App\Http\Livewire\Laporan;

use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;
use App\Models\Pengguna;

class TableLaporan extends DataTableComponent
{

    public function columns(): array
    {
        return [
            Column::make('No', 'id')->sortable(),
            Column::make('Nama Penerima', 'nama_lengkap')->sortable(),
            Column::make('Telepon', 'telepon')->sortable(),
            Column::make('Tanggal Terkirim', 'created_at')->sortable(),

        ];


    }

    public function query(): Builder
    {
        return Pengguna::query();
    }
}
