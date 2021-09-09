<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
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
                                    <option value="">Pilih Status</option>
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

                            <div class="form-group">
                                <label for="">Tanggal Pendaftaran</label>
                                <input type="date" wire:model="tanggal_pendaftaran" name="" placeholder="Masukan Nama Lengkap" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Masa Berlaku</label>
                                <input type="date" wire:model="masa_berlaku" name="" placeholder="Masukan Nama Lengkap" class="form-control" id="">
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
