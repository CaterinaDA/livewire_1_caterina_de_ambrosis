<div class="card shadow-sm w-100">
    <div class="card-body">

        <h2 class="h5 mb-3 text-center">Ricerca Post</h2>

        {{-- Search --}}
        <div class="mb-3">
            <input type="text" class="form-control" placeholder="Cerca per titolo o contenuto..."
                wire:model.live.debounce.300ms="search">
        </div>

        {{-- Risultati --}}
        @if ($posts->isEmpty())
            <p class="text-muted text-center">Nessun post trovato.</p>
        @else
            <ul class="list-group">
                @foreach ($posts as $post)
                    <li class="list-group-item">
                        <h5 class="mb-1">{{ $post->title }}</h5>
                        <p class="mb-0 text-muted small">
                            {{ Str::limit($post->body, 120) }}
                        </p>
                    </li>
                @endforeach
            </ul>
        @endif

    </div>
</div>
