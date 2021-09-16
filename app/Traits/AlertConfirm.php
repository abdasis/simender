<?php

namespace App\Traits;

trait AlertConfirm
{
    public $model_id;
    public function hapus($id)
    {
        $this->confirm('Yakin hapus data  ini?', [
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'confirmButtonText' => 'Yakin',
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'dihapus',
            'onCancelled' => 'batal'
        ]);

        $this->model_id = $id;
    }

    public function batal()
    {
        $this->alert('info', 'Data tidak jadi dihapus');
    }
}
