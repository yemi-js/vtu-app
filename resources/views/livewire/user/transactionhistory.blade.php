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
                                    {{ __(' Transaction History') }}
                                </h2>
                                <div class="page-header-subtitle">Check all your prebius transactions</div>
                            </div>

                        </div>
                    </div>
                </div>
            </header>


            <div>
                <div class="container-xl px-4 py-4">
                    <div class="row h-auto">


                                @livewire("user-transactions-table")


                                <livewire:prices />

                            </div>
                        </div>
                    </div>
                </div>

            </div>



        </main>
    </div>

@endsection
