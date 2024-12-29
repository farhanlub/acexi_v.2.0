@extends('layouts.guest')
 
@section('content') 
 
<section class="breadcrumb-wrapper" data-bg-image="https://png.pngtree.com/thumb_back/fh260/background/20210115/pngtree-original-hand-painted-spring-outing-green-public-account-cover-background-image_519746.jpg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-content-area">
                    <div class="breadcrumb-heading">
                        <h1 class="breadcrumb-title m-0">Halo {{ Auth::user()->name }}!</h1>
                         <!-- Logout Form -->
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="fa fa-arrow-left me-2"></i> Logout</button>
                        </form>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</section>   
@endsection 
