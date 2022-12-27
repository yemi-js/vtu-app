@extends('users.layouts.app')

@section('content')

<div id="layoutSidenav_content">

    <main>
        <header class="page-header page-header-dark bg-black ">
            <div class="container px-4">
                <div class="page-header-content pt-2">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <h2 class="page-header-title">
                                <div class="page-header-icon"><i data-feather="activity"></i></div>
                                {{ Auth::user()->name . __("'s Dashboard") }}
                            </h2>
                            <div class="page-header-subtitle">All your activities are here </div>
                        </div>

                    </div>
                </div>
            </div>
        </header>


        {{-- First Row --}}
        <div class="container-xl px-4 py-4">
                @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <h5 class="alert-heading fw-bolder">Purchase Successful</h5>

            {{ session('message') }}
            <button class="btn-close" type="button" data-bs-dismiss="alert" aria-label="Close"></button>

        </div>
    @endif
            <div class="row">
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-primary text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Wallet Balance</div>
                                    <div class="text-lg fw-bold">₦{{ Auth::user()->balance_int }}.00</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">Transaction History</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-dark text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Fund Wallet</div>
                                    <div class="text-lg fw-bold"> Account Number:1230161532</div>
                                    <div class="text-md fw-bold"> Account Name: Ilesanmi abiodun Emmanuel</div>
                                    <div class="text-md fw-bold"> Bank: Access Bank</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="dollar-sign"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">View Referral Wallet</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-xl-4 mb-4">
                    <div class="card bg-success text-white h-100">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="me-3">
                                    <div class="text-white-75 small">Number of Referrals</div>
                                    <div class="text-lg fw-bold">24</div>
                                    <div class="text-sm fw-medium">Referral
                                        link:<br>{{ Auth::user()->getReferralLink() }}</div>
                                </div>
                                <i class="feather-xl text-white-50" data-feather="users"></i>
                            </div>
                        </div>
                        <div class="card-footer d-flex align-items-center justify-content-between small">
                            <a class="text-white stretched-link" href="#!">View Referrals List</a>
                            <div class="text-white"><i class="fas fa-angle-right"></i></div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- third row --}}
            <h2 class="page-header-title text-md pt-4">
                Perform Transactions
                <hr>
            </h2>


            <div class="row mt-4">
                <div class="col-lg-3 col-sm-4 col-6 mb-4">
                    <!-- Billing card 1-->
                    <div class="card h-100 lift border-start-lg border-start-primary border-end-blue cursor">

                        <div class="card-body d-flex">
                            <div class="d-flex mr-4">
                                <i class="feather-xl text-secondary" data-feather="dollar-sign"></i>
                            </div>
                            <div class="d-flex flex-column">
                                <div class="h3 flex">Airtime</div>


                                {{-- <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">Launch Vertically Centered Modal</button> --}}


                                <a class="text-arrow-icon large fw-bold" type="button" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalCenter">
                                    Buy Now
                                    <i data-feather="arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6 mb-4">
                    <!-- Billing card 2-->
                    <div class="card h-100 lift-sm border-start-lg border-start-black">
                        <div class="card-body">

                            <div class="h3">Data</div>
                            <a class="text-arrow-icon large fw-bold" type="button" data-bs-toggle="modal"
                                    data-bs-target="#dataModalCenter">
                                Buy Now
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6 mb-4">
                    <!-- Billing card 1-->
                    <div class="card h-100 lift border-start-lg border-start-danger cursor">

                        <div class="card-body ">

                            <div class="h3">Electricity Bill</div>
                            <a class="text-arrow-icon large fw-bold" href="#! ">
                                Pay Now
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-4 col-6 mb-4 ">
                    <!-- Billing card 2-->
                    <div class="card h-100 lift border-start-lg border-start-secondary">
                        <div class="card-body">

                            <div class="h3">Cable Subscription</div>
                            <a class="text-arrow-icon large fw-bold" href="#!">
                                Buy Now
                                <i data-feather="arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            {{-- Transaction History table --}}

            <h2 class="page-header-title text-md pt-4">
                Latest Transactions
                <hr>
            </h2>

            @livewire("user-transactions-table")
           
        </div>

    </main>
</div>

<!-- Airtime Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-white" id="exampleModalCenterTitle">Hi, {{ Auth::user()->name . " Your " }}  </h5>
                <h5 class="modal-title text-white right" id="exampleModalCenterTitle">Wallet Balance is <span class="text-lg fw-bold">N{{ Auth::user()->balance}}.00</span> </h5>
                <button class="btn-close bg-danger" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                 <livewire:airtime />
                {{-- <livewire:user.buy-airtime /> --}}
            </div>
            <div class="modal-footer"> ABGOLD SUB - Purchase Airtime</div>
        </div>
    </div>

</div>

<!-- Data Modal -->
<div class="modal fade" id="dataModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header bg-black ">
                <h5 class="modal-title text-light" id="exampleModalCenterTitle">Hi, {{ Auth::user()->name . " Your " }}  </h5>
                <h5 class="modal-title text-light float-right" id="exampleModalCenterTitle">Wallet Balance is <span class="text-lg fw-bold">N{{ Auth::user()->balance}}.00</span> </h5>
                <button class="btn-close bg-danger" type="button" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body p-4">
                 <livewire:data />
                {{-- <livewire:user.buy-airtime /> --}}
            </div>
            {{-- <div class="modal-footer"> ABGOLD SUB - Purchase Data</div> --}}
        </div>
    </div>
</div>

@endsection
