<div>
    {{-- The whole world belongs to you. --}}
    <div class="jumbotron" id="header">
        <div class="container">
        </div>
    </div>

    <div class="container" id="form-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card card-danger card-outline">
                    <div class="card-header text-center">
                        Pendaftaran STNK Online
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
        </div>
        <footer class="footer bg-white py-3">
            <div class="container">
                <span class="text-muted">2021 SIMENDER by <a href="https://facebook.com/abdasispif">King Aziz</a>.</span>
            </div>
        </footer>
    </div>
</div>

@push('css')
    <style>
        body{
            background: #f1f1f1;
        }
        #header{
            background: url(https://polrestegal.id/wp-content/uploads/2021/08/7447e91a-4c9f-4d5e-90bb-b5dba6265f4c.jpg) no-repeat;
            background-size: cover;
            min-height: 700px;
            background-position: top;
            background-origin: border-box;
        }

        #form-wrapper{
            margin-top: -120px;
        }

    </style>
@endpush
