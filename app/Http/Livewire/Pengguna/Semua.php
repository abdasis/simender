<?php

namespace App\Http\Livewire\Pengguna;

use App\Models\Pengguna;
use Livewire\Component;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Semua extends Component
{
    public $keyword;
    public function columns(): array
    {
        return [
            Column::make('Name')
                ->sortable()
                ->searchable(),
            Column::make('E-mail', 'email')
                ->sortable()
                ->searchable(),
            Column::make('Verified', 'email_verified_at')
                ->sortable(),
        ];
    }

    public function query(): Builder
    {
        return Pengguna::query();
    }

}
