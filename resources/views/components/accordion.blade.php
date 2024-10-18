<div x-data="{expanded: $wire.entangle('{{ $entangle }}').live}">
    <div class="accordion-item border-bottom-0 rounded-bottom-0 border-primary-subtle focus-ring-primary">
        <h5 class="accordion-header">
            <button
                    wire:click="{{ $click }}"
                    type="button"
                    class="accordion-button collapsed"
            >
                <span class="fw-semibold">{{ $tableName }}</span>
            </button>
        </h5>
        <div
                x-show="expanded"
                class="accordion-collapse collapse show">
            <div class="accordion-body">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>