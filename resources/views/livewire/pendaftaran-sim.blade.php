<div>
    {{-- The whole world belongs to you. --}}
    <div class="jumbotron" id="header">
        <div class="container">
        </div>
    </div>

    <div class="container" id="form-wrapper">
        <div class="row justify-content-center">
            <div class="col-md-8 col-sm-12">
                <div class="card card-outline card-danger">
                    <div class="card-header text-center">
                        Pendaftaran SIM Online
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="simpan">
                            <div class="form-group">
                                <label for="">Nama Lengkap</label>
                                <input type="text" wire:model="nama_lengkap" name="" placeholder="Masukan Nama Lengkap" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Tanggal Lahir</label>
                                <input type="date" wire:model="tanggal_lahir" name="" placeholder="Masukan Tanggal Lahir" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Telepon</label>
                                <input type="text" name="" wire:model="telepon" placeholder="Masukan Telepon" class="form-control" id="">
                                <small class="text-muted">*Nomor digunakan untuk pemberitahuan whatsapp</small>
                            </div>

                            <div class="form-group">
                                <label for="">Jenis SIM</label>
                                <select wire:model="jenis_sim" name="" class="form-control" id="">
                                    <option value="">Pilih Jenis SIM</option>
                                    <option value="sim a">SIM A</option>
                                    <option value="sim b1">SIM B1</option>
                                    <option value="sim b2">SIM B2</option>
                                    <option value="sim c">SIM C</option>
                                    <option value="sim d">SIM D</option>
                                    <option value="sim a umum">SIM A Umum</option>
                                    <option value="sim b1 umum">SIM B1 Umum</option>
                                    <option value="sim b2 umum">SIM B2 Umum</option>
                                </select>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Tanggal Pendaftaran</label>
                                        <input type="date" wire:model="tanggal_pendaftaran" name="" placeholder="Masukan Nama Lengkap" class="form-control" id="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Masa Berlaku</label>
                                        <input type="date" wire:model="masa_berlaku" name="" placeholder="Masukan Nama Lengkap" class="form-control" id="">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="">Alamat</label>
                                <textarea name="" class="form-control" wire:model="alamat" id="" cols="30" rows="10"></textarea>
                            </div>

                            <div class="form-group">
                                <button class="btn btn-danger">Reset</button>
                                <button class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

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
