@extends('layouts.guest')

@section('css-content')
    <style>
        .login-card {
            background-image: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/1462889/pat.svg');
            background-position: bottom center;
            background-repeat: no-repeat;
            background-size: 300%;
        }

        .login-toggle-eye {
            margin-left: -25px;
            margin-top: -25px;
            cursor: pointer;
            float: right;
            position: relative;
            z-index: 2;
        }
    </style>
@endsection

@section('content')
    <div class="container-fluid bg-secondary">
        <div class="row vh-100 justify-content-center">
            <div class="col-md-3 my-auto">
                <div class="card login-card border-0 shadow-sm">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="d-flex align-items-center justify-content-center mb-3">
                                <img src="{{ asset('favicon/user.png') }}" alt="bob-logo" height="100" width="100">
                            </div>
                            <h4 class="mx-0 my-4 text-center">LOGIN</h4>

                            <!-- Email input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="email">Email address</label>
                                <input type="text" class="form-control @error('email') is-invalid @enderror"
                                       name="email" id="email"
                                       value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-group mb-4">
                                <label class="form-label" for="password">Password</label>
                                <input id="login-password" type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       name="password">
                                <i class="fa-solid fa-eye pe-2 login-toggle-eye" id="toggleLoginPassword"></i>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button type="submit" class="btn btn-primary">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('script')
    <script>
        const toggleLoginPassword = document.querySelector("#toggleLoginPassword");
        const loginPassword = document.querySelector("#login-password");
        toggleLoginPassword.addEventListener("click", function () {
            const login_type = loginPassword.getAttribute("type") === "password" ? "text" : "password";
            loginPassword.setAttribute("type", login_type);

            if (login_type !== "password") {
                this.classList.remove("fa-eye");
                this.classList.toggle("fa-eye-slash");
            } else {
                this.classList.remove("fa-eye-slash");
                this.classList.toggle("fa-eye");
            }
        });
    </script>
@endpush
