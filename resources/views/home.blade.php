@extends('layouts.app')

@section('content')
    <div class="container-fluid">

        <div class="row mb-4">
            <div class="col-xl-3 col-lg-4 col-12 col-md-3 my-1">
                <!--start card-->
                <div class="card shadow-lg p-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase mt-0 fw-semibold">Active Users</h6>
                            <i class="fa-solid fa-users fa-xl"></i>
                        </div>
                        <h2 class="my-2" id="active-users-count">121</h2>

                        <p class="mb-0 text-muted">
                            <span class="text-color-success me-2"><i
                                    class="fa-sharp fa-solid fa-arrow-up"></i> 5.27%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
                <!--end card-->
            </div>

            <div class="col-xl-3 col-lg-4 col-12 col-md-3 my-1">
                <!--start card-->
                <div class="card shadow-lg p-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase mt-0 fw-semibold">VIEWS PER MINUTE</h6>
                            <i class="fa-solid fa-window-restore fa-xl"></i>
                        </div>
                        <h2 class="my-2" id="active-users-count">305</h2>

                        <p class="mb-0 text-muted">
                                <span class="text-color-danger me-2"><i
                                        class="fa-sharp fa-solid fa-arrow-down"></i> 1.07%</span>
                            <span class="text-nowrap">Since previous week</span>
                        </p>
                    </div>
                </div>
                <!--end card-->
            </div>

            <div class="col-xl-3 col-lg-4 col-12 col-md-3 my-1">
                <!--start card-->
                <div class="card shadow-lg p-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase mt-0 fw-semibold">Customer</h6>
                            <i class="fa-solid fa-user-alt fa-xl"></i>
                        </div>
                        <h2 class="my-2" id="active-users-count">36,254</h2>

                        <p class="mb-0 text-muted">
                                <span class="text-color-success me-2"><i
                                        class="fa-sharp fa-solid fa-arrow-up"></i> 18.7%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
                <!--end card-->
            </div>

            <div class="col-xl-3 col-lg-4 col-12 col-md-3 my-1">
                <!--start card-->
                <div class="card shadow-lg p-2">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="text-uppercase mt-0 fw-semibold">Order</h6>
                            <i class="fa-solid fa-circle-dollar-to-slot fa-xl"></i>
                        </div>
                        <h2 class="my-2" id="active-users-count">5,543</h2>

                        <p class="mb-0 text-muted">
                                <span class="text-color-danger me-2"><i
                                        class="fa-sharp fa-solid fa-arrow-down"></i> 0.4%</span>
                            <span class="text-nowrap">Since last month</span>
                        </p>
                    </div>
                </div>
                <!--end card-->
            </div>
        </div>


        <div class="row">
            <div class="col-md-6 col-12 my-1">
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
            </div>

            <div class="col-md-6 col-12 my-1">
                <div class="card shadow-lg">
                    <div class="card-body p-2">
                        <div class="table-responsive">
                            <table class="table table-centered mb-0">
                                <thead>
                                <tr>
                                    <th>Product</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-end">Amount</th>
                                    <th class="text-center">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>ASOS Ridley High Waist</td>
                                    <td class="text-end">$79.49</td>
                                    <td class="text-center"><span class="badge badge-info">82 Pcs</span></td>
                                    <td class="text-end">$6,518.18</td>
                                    <td class="text-danger text-center"><i class="fa-solid fa-trash-alt"></i></td>
                                </tr>
                                <tr>
                                    <td>Marco Lightweight Shirt</td>
                                    <td class="text-end">$128.50</td>
                                    <td class="text-center"><span class="badge badge-info">37 Pcs</span></td>
                                    <td class="text-end">$4,754.50</td>
                                    <td class="text-danger text-center"><i class="fa-solid fa-trash-alt"></i></td>
                                </tr>
                                <tr>
                                    <td>Half Sleeve Shirt</td>
                                    <td class="text-end">$39.99</td>
                                    <td class="text-center"><span class="badge badge-info">64 Pcs</span></td>
                                    <td class="text-end">$2,559.36</td>
                                    <td class="text-danger text-center"><i class="fa-solid fa-trash-alt"></i></td>
                                </tr>
                                <tr>
                                    <td>Lightweight Jacket</td>
                                    <td class="text-end">$20.00</td>
                                    <td class="text-center"><span class="badge badge-info">184 Pcs</span></td>
                                    <td class="text-end">$3,680.00</td>
                                    <td class="text-danger text-center"><i class="fa-solid fa-trash-alt"></i></td>
                                </tr>
                                <tr>
                                    <td>Marco Shoes</td>
                                    <td class="text-end">$28.49</td>
                                    <td class="text-center"><span class="badge badge-info">69 Pcs</span></td>
                                    <td class="text-end">$1,965.81</td>
                                    <td class="text-danger text-center"><i class="fa-solid fa-trash-alt"></i></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-12 my-1">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table mb-0 table-bordered">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Phone Number</th>
                                    <th>Date of Birth</th>
                                    <th>Active?</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="table-active">
                                    <td>Risa D. Pearson</td>
                                    <td>336-508-2157</td>
                                    <td>July 24, 1950</td>
                                    <td>
                                        <!-- Switch-->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   id="flexSwitchCheckDefault" checked>
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Ann C. Thompson</td>
                                    <td>646-473-2057</td>
                                    <td>January 25, 1959</td>
                                    <td>
                                        <!-- Switch-->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   id="flexSwitchCheckDefault" checked>
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul J. Friend</td>
                                    <td>281-308-0793</td>
                                    <td>September 1, 1939</td>
                                    <td>
                                        <!-- Switch-->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td scope="row">Linda G. Smith</td>
                                    <td colspan="2" class="table-active">606-253-1207</td>
                                    <td>
                                        <!-- Switch-->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   id="flexSwitchCheckDefault">
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Paul J. Friend</td>
                                    <td>281-308-0793</td>
                                    <td>September 1, 1939</td>
                                    <td>
                                        <!-- Switch-->
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" role="switch"
                                                   id="flexSwitchCheckDefault" checked>
                                            <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection
