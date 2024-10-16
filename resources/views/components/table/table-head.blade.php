<th class="px-6 py-3">@if($orderable)
            <button wire:click="changeOrder('{{ strtolower($column) }}')">
                @if($orderByColumn === strtolower($column))
                    @if($orderByDirection === 'asc')
                        <x-icons.triangle-up class="w-2 h-2"/>
                    @else
                        <x-icons.triangle-down class="w-2 h-2"/>
                    @endif
                @else
                    <x-icons.triangle-up class="w-2 h-2"/>
                    <x-icons.triangle-down class="w-2 h-2"/>
                @endif
            </button>
        @endif
    <div class="d-flex align-items-center">
        {{ $column ?? ''}}
        {{ $order ?? '' }}
    </div>
</th>
