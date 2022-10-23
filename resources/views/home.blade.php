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

                            <img src="{{ asset('favicon/user.png') }}" width="100" height="100" alt="">
                        <div class="d-flex mt-2">
                            <button class="btn btn-primary me-1">Primary</button>
                            <button class="btn btn-info me-1">Info</button>
                            <button class="btn btn-success me-1">Success</button>
                            <button class="btn btn-warning me-1">Warning</button>
                            <button class="btn btn-danger me-1">Danger</button>
                            <button class="btn btn-secondary me-1">Secondary</button>
                            <button class="btn btn-dark me-1">Dark</button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
