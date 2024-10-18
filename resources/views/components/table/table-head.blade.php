<th
        {{
            $attributes->merge([
                "class" => "pe-3 py-2"
            ])
        }}
>
    <div class="d-flex align-items-center text-sm">
        {{ $column ?? ''}}
        @if($orderable)
            <button class="btn py-0 px-1"
                    wire:click="changeOrder('{{ strtolower($column) }}')">
                @if($orderByColumn === strtolower($column))
                    @if($orderByDirection === 'asc')
                        <x-bootstrapComponents::icons.caret-up/>
                    @else
                        <x-bootstrapComponents::icons.caret-down/>
                    @endif
                @else
                    <svg fill="#000000" width="22px" height="22px" viewBox="-96 0 512 512"
                         xmlns="http://www.w3.org/2000/svg">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier"><title>caret</title>
                            <path d="M160 96L256 208 64 208 160 96ZM64 304L256 304 160 416 64 304Z"></path>
                        </g>
                    </svg>
                @endif
            </button>
        @endif
    </div>
</th>
