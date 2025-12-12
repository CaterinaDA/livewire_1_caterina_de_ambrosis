<x-layout title="Welcome">

    {{-- Header --}}
    <header class="container text-center py-5">

        <h1 class="display-3 fw-bold mb-3">
            Contatore Livewire
        </h1>
        <p class="lead text-muted">
            Aggiorna il valore in tempo reale con i pulsanti.
        </p>

    </header>

    {{-- Counter --}}
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6 d-flex justify-content-center">
                <livewire:counter />
            </div>
        </div>
    </section>

    {{-- Search --}}
    <section class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <livewire:search-posts />
            </div>
        </div>
    </section>


</x-layout>
