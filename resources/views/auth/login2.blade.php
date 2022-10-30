@extends('layouts.guest')

@section('css-content')
    <style>
        .card {
            border-radius: 0.15rem !important;
        }
        .card-header {
            border-radius: 0.15rem !important;
        }
        .form-control-1 {
            display: block;
            width: 100%;
            padding: 0.45rem 0.9rem;
            font-size: .9rem;
            font-weight: 400;
            line-height: 1.5;
            color: #6c757d;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #dee2e6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.25rem;
            -webkit-transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out, -webkit-box-shadow .15s ease-in-out;
        }

        .login-toggle-eye {
            margin-left: -25px;
            margin-top: -25px;
            cursor: pointer;
            float: right;
            position: relative;
            z-index: 2;
        }

        .bg-blue {
            background-color: #727cf5 !important;
        }

        .padding {
            padding-top: 72px !important;
        }

        .btn-primary {
            -webkit-box-shadow: 0 2px 6px 0 rgb(114 124 245 / 50%);
            box-shadow: 0 2px 6px 0 rgb(114 124 245 / 50%);
        }

        .btn-primary {
            border-radius: 0.15rem !important;
            color: #fff;
            background-color: #727cf5 !important;
            border-color: #727cf5 !important;
        }
    </style>
@endsection

@section('content')

    <div class="container">
        <div class="row justify-content-center px-2 padding">
            <div class="col-md-3 my-auto col-xxl-4 col-lg-4 col-sm-12">
                <div class="card login-card border-0 shadow-sm">

                    <div class="card-header py-4 text-center bg-blue">
                        <img src="{{ asset('icons/icons.png') }}" alt="" height="18">
                    </div>

                    <div class="card-body p-5">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                <p class="text-muted mb-4">Enter your email address and password to access admin
                                    panel.</p>
                            </div>

                            <!-- Email input -->
                            <div class="form-group mb-3">
                                <label for="email-address" class="form-label">Email address</label>
                                <input class="form-control-1" type="email" id="email-address"
                                       placeholder="Enter your email" name="email"
                                       value="{{ old('email') }}" autocomplete="email" autofocus>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <!-- Password input -->
                            <div class="form-group mb-5">
                                <label class="form-label" for="password">Password</label>
                                <input id="login-password" type="password"
                                       class="form-control-1 @error('password') is-invalid @enderror"
                                       name="password">
                                <i class="fa-solid fa-eye pe-2 login-toggle-eye" id="toggleLoginPassword"></i>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-center">
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
