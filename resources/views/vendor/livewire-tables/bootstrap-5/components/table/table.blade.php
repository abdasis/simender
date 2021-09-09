<div class="table-responsive">
    <table {{ $attributes->except('wire:sortable') }} class="table table-sm table-striped table-hover">
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
