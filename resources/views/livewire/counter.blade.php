<div class="card shadow-sm w-100">
    <div class="card-body text-center">

        <h2 class="h4 mb-3">Counter</h2>

        {{-- Valore attuale --}}
        <p class="display-5 fw-bold mb-4">
            {{ $count }}
        </p>

        {{-- +1 / -1 --}}
        <div class="d-flex justify-content-center gap-2 flex-wrap mb-3">
            <button wire:click="decrement" class="btn btn-outline-danger">
                -1
            </button>

            <button wire:click="increment" class="btn btn-outline-success">
                +1
            </button>
        </div>

        <hr>

        {{-- +X / -X --}}
        <p class="mb-2 small text-muted">
            Operazioni con X (valore: {{ $value }})
        </p>

        <div class="d-flex justify-content-center gap-2 flex-wrap">
            <button wire:click="decrementByX({{ $value }})" class="btn btn-warning">
                -{{ $value }}
            </button>

            <button wire:click="incrementByX({{ $value }})" class="btn btn-primary">
                +{{ $value }}
            </button>
        </div>

    </div>
</div>
