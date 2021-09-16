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
                            <label for="">Nomor Telepon</label>
                            <input type="text" class="form-control" wire:model="telepon" placeholder="081944xxxxxx" name="" id="">
                            <x-error-message error="telepon"/>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Identitas Kendaraan</label>
                                    <input type="text" class="form-control" placeholder="Identitas Kendaraan" wire:model="identitas_kendaraan" name="" id="">
                                    <x-error-message error="identitas_kendaraan"/>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nomor Polisi</label>
                                    <input type="text" class="form-control" placeholder="M 4515 JR " wire:model="nopol" name="" id="">
                                    <x-error-message error="nopol"/>

                                </div>
                            </div>
                        </div>

                       <div class="row">
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="">Pajak Tahunan</label>
                                   <input type="date" class="form-control" wire:model="pajak_tahunan" name="" id="">
                                   <x-error-message error="pajak_tahunan"/>

                               </div>
                           </div>
                           <div class="col-md-6">
                               <div class="form-group">
                                   <label for="">Pajak 5  Tahunan</label>
                                   <input type="date" class="form-control" wire:model="pajak_lima_tahun" name="" id="">
                                   <x-error-message error="pajak_lima_tahun"/>

                               </div>
                           </div>
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
                            <td>Identitas Kendaraan</td>
                            <td>:</td>
                            <td>{{$identitas_kendaraan}}</td>
                        </tr>

                        <tr>
                            <td>Pajak Tahunan</td>
                            <td>:</td>
                            <td>{{$pajak_tahunan}}</td>
                        </tr>

                        <tr>
                            <td>Pajak 5 Tahunan</td>
                            <td>:</td>
                            <td>{{$pajak_lima_tahun}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
