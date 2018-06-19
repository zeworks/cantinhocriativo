@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <a href="{{ route('banners') }}" class="go-back"><i class="fas fa-angle-left"></i> {{ __('Banners') }}</a>
    <span>\</span>
    <span>{{ __('Editar Banner')}}</span>
</div>
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Editar Banner')}}</h2>
                <!-- page title ends -->
                <!-- form to add banner -->
                <form action="{{ route('banner_update',['id' => $banners->id]) }}" method="post" class="row form" enctype="multipart/form-data">
                    @csrf
                    @include('admin.banners._form')
                </form>
                <!-- form to add banner ends -->
            </div>
        </div>
    </div>
</section>
@endsection