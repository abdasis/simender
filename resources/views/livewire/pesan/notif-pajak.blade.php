<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card card-primary card-outline">
        <div class="card-header">
            Custom Pesan Untuk Pajak 5 Tahun
        </div>
        <div class="card-body">
            <div class="callout callout-info">
                <h5>Panduan Singkat!</h5>

                untuk menampilkan data dinamis dari aplikasi sebagai berikut <code>:nama_lengkap</code> untuk memanggil nama lengkap, <code>:alamat</code>
                untuk menampilkan alamat lengkap, <code>:nopol</code> untuk nomor polisi, dan <code>:jatuh_tempo</code> untuk menampilkan tanggal jatuh tempo

            </div>
            <form wire:submit.prevent="simpan">
               {{-- <div class="form-group">
                    <label for="">Pendaftaran</label>
                    <textarea name="" class="form-control" wire:model="pendaftaran" id="" cols="30" rows="10"></textarea>
                </div>--}}

                <div class="form-group">
                    <label for="">Dua Bulan</label>
                    <textarea name="" class="form-control" wire:model="dua_bulan" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Satu Bulan</label>
                    <textarea name="" class="form-control" wire:model="satu_bulan" id="" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <label for="">Dua Minggu</label>
                    <textarea name="" class="form-control"  wire:model="dua_minggu" id="" cols="30" rows="10"></textarea>
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
