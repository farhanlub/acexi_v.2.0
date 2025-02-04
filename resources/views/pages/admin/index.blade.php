@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-sm-6">
                    <h3>Dashboard </h3>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid default-dashboard">
        <div class="row">
            <div class="col-xl-4">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round secondary">
                                <div class="bg-round">
                                     <i class="fa fa-user-shield"></i> <!-- Ikon untuk 'Pengurus' -->
                                </div>
                            </div>
                            <div>
                                <h4><span>{{ $pengurus }}</span></h4><span class="f-light">Pengurus</span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round secondary">
                                <div class="bg-round">
                                     <i class="fa fa-user-friends"></i> <!-- Ikon untuk 'Member' -->
                                </div>
                            </div>
                            <div>
                                <h4><span>{{ $member }}</span></h4><span class="f-light">Member</span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card widget-1">
                    <div class="card-body">
                        <div class="widget-content">
                            <div class="widget-round secondary">
                                <div class="bg-round">
                                     <i class="fa fa-handshake"></i> <!-- Ikon untuk 'Mitra' -->
                                </div>
                            </div>
                            <div>
                                <h4><span>{{ $mitra }}</span></h4><span class="f-light">Mitra</span>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
