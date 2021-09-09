<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="card card-outline card-blue">
                    <div class="card-header">
                        Update Pengaturan Aplikasi
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="simpan">
                            <div class="form-group">
                                <label for="">Domain API</label>
                                <input type="text" wire:model="domain" name="" placeholder="Masukan Nama Aplikasi" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Token</label>
                                <input type="text" wire:model="token" name="" placeholder="Masukan Tagline Aplikasi" class="form-control" id="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger">Reset</button>
                                <button class="btn btn-primary">Perbarui Pengaturan</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card card-outline card-blue">
                    <div class="card-header">Scan Whatsapp</div>
                    <div class="card-body">
                        <div class="form-group">
                            <a target="_blank" href="https://cepogo.wablas.com/generate/index.php?token=7f7okJISNmplDdGKCbpUsmkkCWDZwTR8VkdSA1xRJuZOGKt4WFyTgt0dm2v5h2l9&url=aHR0cHM6Ly9jZXBvZ28ud2FibGFzLmNvbQ==">
                                <button type="button" class="btn btn-success btn-block">
                                    <i class="far fa-whatsapp"></i>
                                    Scan Whatsapp
                                </button>
                            </a>
                            <small class="text-muted">Memuat scan whatsapp membutuhkan waktu harap bersabar</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
