<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="row">
        <div class="col-md-7 col-sm-12">
            @if(session()->has('whatsappError'))
                <div class="alert alert-danger">
                    {{session()->get('whatsappError')}}
                </div>
            @endif
            <div class="card card-outline card-blue">
                <div class="card-header">
                    Tambah Pengguna
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
        <div class="col-md-5">
            <div class="card card-outline card-primary">
                <div class="card-header">
                    Detail Pengguna
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama</td>
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
                            <td>Jenis SIM</td>
                            <td>:</td>
                            <td>{{$jenis_sim}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Pendaftaran</td>
                            <td>:</td>
                            <td>{{$tanggal_pendaftaran}}</td>
                        </tr>
                        <tr>
                            <td>Masa Berlaku</td>
                            <td>:</td>
                            <td>{{$masa_berlaku}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
