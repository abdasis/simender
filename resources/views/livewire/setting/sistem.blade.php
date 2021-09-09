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
                                <label for="">Nama Aplikasi</label>
                                <input type="text" wire:model="nama_aplikasi" name="" placeholder="Masukan Nama Aplikasi" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <label for="">Tagline</label>
                                <input type="text" wire:model="tagline" name="" placeholder="Masukan Tagline Aplikasi" class="form-control" id="">
                            </div>

                            @if(!is_string($logo) && !empty($logo))
                                <img class="img-thumbnail" src="{{$logo->temporaryUrl()}}" alt="">
                            @else
                                <img class="img-thumbnail" src="{{asset($logo)}}" alt="">
                            @endif

                            <div class="form-group">
                                <label for="">Logo</label>
                                <div class="custom-file">
                                    <input wire:model="logo" type="file" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label" for="customFile">Pilih Logo</label>
                                </div>
                                @error('logo')
                                    <div class="text-danger">{{$message}}</div>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="">Text Footer</label>
                                <input type="text" wire:model="text_footer" name="" placeholder="Masukan Nama Lengkap" class="form-control" id="">
                            </div>

                            <div class="form-group">
                                <button class="btn btn-danger">Reset</button>
                                <button class="btn btn-primary">Perbarui Pengaturan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
