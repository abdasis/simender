<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="card card-primary card-outline">
                <div class="card-header">
                    Tambah Data STNK
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control" wire:model="nama_lengkap" placeholder="Nama Lengkap" name="" id="">
                            <x-error-message error="nama_lengkap"/>
                        </div>
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control" wire:model="tanggal_lahir" name="" id="">
                            <x-error-message error="tanggal_lahir"/>

                        </div>

                        <div class="form-group">
                            <label for="">Telepon</label>
                            <input type="text" class="form-control" placeholder="081944xxxxxx" wire:model="telepon" name="" id="">
                            <x-error-message error="telepon"/>

                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Identitas Kendaraan</label>
                                    <input type="text" class="form-control" wire:model="identitas_kendaraan" name="" id="" placeholder="Identitas Kendaraan">
                                    <x-error-message error="identitas_kendaraan"/>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Polisi</label>
                                    <input type="text" class="form-control" wire:model="nopol" name="" id="" placeholder="Nomor Polisi">
                                    <x-error-message error="nopol"/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Waktu Sidang</label>
                                    <input type="date" class="form-control" wire:model="waktu_sidang" name="" id="">
                                    <x-error-message error="waktu_sidang"/>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tempat Sidang</label>
                                    <input type="text" class="form-control" wire:model="tempat_sidang" placeholder="Tempat sidang" name="" id="">
                                    <x-error-message error="tempat_sidang"/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="">Pasal Pelanggaran</label>
                            <input type="text" class="form-control" wire:model="pasal_pelanggaran" name="" id="" placeholder="Pasal Pelanggaran">
                            <x-error-message error="pasal_pelanggaran"/>
                        </div>

                        <div class="form-group">
                            <label for="">Briva</label>
                            <input type="text" class="form-control" wire:model="briva" name="" id="" placeholder="Masukan Briva">
                            <x-error-message error="pasal_pelanggaran"/>
                        </div>



                        <div class="form-group">
                            <button class="btn btn-primary"><i class="fa fa-save mr-1"></i>Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    Detail STNK
                </div>
                <div class="card-body">
                    <table class="table table-borderless table-sm">
                        <tr>
                            <td>Nama Lengkap</td>
                            <td>:</td>
                            <td>{{$nama_lengkap}}</td>
                        </tr>

                        <tr>
                            <td>Tanggal Lahir</td>
                            <td>:</td>
                            <td>{{$tanggal_lahir}}</td>
                        </tr>

                        <tr>
                            <td>Telepon</td>
                            <td>:</td>
                            <td>{{$telepon}}</td>
                        </tr>

                        <tr>
                            <td>Waktu Sidang</td>
                            <td>:</td>
                            <td>{{$waktu_sidang}}</td>
                        </tr>

                        <tr>
                            <td>Tempat Sidang</td>
                            <td>:</td>
                            <td>{{$tempat_sidang}}</td>
                        </tr>

                        <tr>
                            <td>Pasal Pelanggaran</td>
                            <td>:</td>
                            <td>{{$pasal_pelanggaran}}</td>
                        </tr>


                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
