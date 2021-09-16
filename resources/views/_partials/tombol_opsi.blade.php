<div class="btn-group btn-group-sm">
    @if(!empty($edit))
        <a href="{{$edit}}">
            <button type="button" class="btn btn-xs btn-warning">
                <i class="fas fa-pen-alt"></i>
            </button>
        </a>
    @endif

    @if(!empty($detail))
        <a href="{{$detail}}">
            <button type="button" class="btn btn-xs btn-info">
                <i class="fas fa-eye"></i>
            </button>
        </a>
    @endif

    @if(!empty($hapus))
        <a href="">
            <button type="button" wire:click.prevent="hapus({{$hapus}})" class="btn btn-xs btn-danger">
                <i class="fas fa-trash-alt"></i>
            </button>
        </a>
    @endif
</div>
