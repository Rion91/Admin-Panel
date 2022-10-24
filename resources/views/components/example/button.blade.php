<div class="card shadow-lg">
    <div class="card-header">{{ __('Button and Badge') }}</div>

    <div class="card-body">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <div class="mt-2 mb-5">
            <button class="btn btn-primary me-1 my-1">Primary</button>
            <button class="btn btn-info me-1 my-1">Info</button>
            <button class="btn btn-success me-1 my-1">Success</button>
            <button class="btn btn-warning me-1 my-1">Warning</button>
            <button class="btn btn-danger me-1 my-1">Danger</button>
            <button class="btn btn-secondary me-1 my-1">Secondary</button>
            <button class="btn btn-dark me-1 my-1">Dark</button>
        </div>

        <span class="badge badge-primary my-1">Primary</span>
        <span class="badge badge-info my-1">Info</span>
        <span class="badge badge-success my-1">Success</span>
        <span class="badge badge-warning my-1">Warning</span>
        <span class="badge badge-danger my-1">Danger</span>
        <span class="badge badge-secondary my-1">Secondary</span>
        <span class="badge badge-dark my-1">Dark</span>

    </div>
</div>
