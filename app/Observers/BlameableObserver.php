<?php

namespace App\Observers;

use Illuminate\Database\Eloquent\Model;

class BlameableObserver
{
    public function creating(Model $model)
    {
        $model->dibuat_oleh = \Auth::user()->name ?? 'Umum';
        $model->diupdate_oleh = \Auth::user()->name ?? 'Umum';
    }

    public function updating(Model $model)
    {
        $model->diupdate_oleh = \Auth::user()->name;
    }
}
