<?php


namespace App\Http\Traits;


trait AlertConfirm
{


    public $model_id;
    public function batal()
    {
        $this->alert('info', 'Batal menghapus data');
    }

    public function hapus($id)
    {
        $this->confirm('Yakin untuk hapus data ini?', [
            'text' => 'Data yang dihapus tidak dapat dikembalikan',
            'toast' => false,
            'position' => 'center',
            'showConfirmButton' => true,
            'cancelButtonText' => 'Batal',
            'onConfirmed' => 'delete',
            'onCancelled' => 'batal'
        ]);

        $this->model_id = $id;
    }
}
