<div class="table-responsive">
    <table {{ $attributes->except('wire:sortable') }} class="table table-sm table-striped">
        <thead>
            <tr>
                {{ $head }}
            </tr>
        </thead>

        <tbody {{ $attributes->only('wire:sortable') }}>
            {{ $body }}
        </tbody>
    </table>
</div>
