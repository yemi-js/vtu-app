@extends('layouts.app')

@section('content')


<div id="layoutSidenav_content">
                <main>
                    <header class="page-header page-header-dark bg-dark ">
                        <div class="container px-4">
                            <div class="page-header-content pt-4">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col-auto">
                                        <h1 class="page-header-title">
                                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                                           {{ __('user list') }}
                                        </h1>
                                        <div class="page-header-subtitle">A List of all your users </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </header>

                    <div class="container-xl px-4 py-4">

 {{-- <livewire:users-table /> --}}


                        {{-- table --}}
                        <div class="card mb-4">
                            <div class="card-header">Users List</div>
                            <div class="card-body">
                                @livewire('user-table')

                            </div>
                        </div>
                        {{ Auth::id()}}

 {{-- @livewire('wallet-control') --}}

@livewire('wallet-control')


                         
                    </div>
                    </div>

                    {{-- table --}}
                </main>
@endsection
