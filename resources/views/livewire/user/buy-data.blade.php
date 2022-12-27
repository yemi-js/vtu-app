@extends('users.layouts.app')

@section('content')
    <div id="layoutSidenav_content">
        <main>
            <header class="page-header page-header-dark bg-dark ">
                <div class="container px-4">
                    <div class="page-header-content pt-2">
                        <div class="row align-items-center justify-content-between">
                            <div class="col-auto">
                                <h2 class="page-header-title">
                                    <div class="page-header-icon"><i data-feather="dollar-sign"></i></div>
                                    {{ __(' Buy Data') }}
                                </h2>
                                <div class="page-header-subtitle">Purchase Data of any network</div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>





            <div>
                <div class="container-xl px-4 py-4">
                    <div class="row h-auto">

                        <div class="card mb-4 col-xl-8">

                            <div class="card-body px-4">
                                {{-- <livewire:wallet-control /> --}}
                                <livewire:data />

                            </div>
                        </div>

                        <div class=" col-xl-4 mb-4 " style="height: 200px;">
                            <div class="card bg-primary text-white h-100">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="me-3">
                                            <div class="text-white-75 small">Wallet Balance</div>
                                            <div class="text-lg fw-bold">₦{{ Auth::user()->balance_int }}</div>
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
                    </div>
                </div>

            </div>



        </main>
    </div>

@endsection
