@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-12 col-12">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="d-flex mt-2 mb-5 text-center">
                            <button class="btn btn-primary me-1">Primary</button>
                            <button class="btn btn-info me-1">Info</button>
                            <button class="btn btn-success me-1">Success</button>
                            <button class="btn btn-warning me-1">Warning</button>
                            <button class="btn btn-danger me-1">Danger</button>
                            <button class="btn btn-secondary me-1">Secondary</button>
                            <button class="btn btn-dark me-1">Dark</button>
                        </div>

                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-dark">Dark</span>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
