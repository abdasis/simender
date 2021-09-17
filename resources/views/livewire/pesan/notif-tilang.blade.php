<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div>
        {{-- Success is as dangerous as failure. --}}
        <div class="card card-primary card-outline">
            <div class="card-header">
                Custom Pesan Untuk STNK
            </div>
            <div class="card-body">
                <div class="callout callout-info">
                    <h5>Panduan Singkat!</h5>

                    untuk menampilkan data dinamis dari aplikasi sebagai berikut <code>:nama_lengkap</code> dan <code>:waktu_sidang</code> untuk menampilkan tanggal jatuh tempo
                    <code>:tempat_sidang</code>
                </div>
                <form wire:submit.prevent="simpan">
                    <div class="form-group">
                        <label for="">Pendaftaran</label>
                        <textarea name="" class="form-control" wire:model="pembukaan" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <label for="">Jatuh Tempo</label>
                        <textarea name="" class="form-control" wire:model="jatuh_tempo" id="" cols="30" rows="10"></textarea>
                    </div>

                    <div class="form-group">
                        <button class="btn btn-primary">Simpan Text Notif</button>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>
