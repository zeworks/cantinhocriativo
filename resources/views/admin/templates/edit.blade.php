@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <a href="{{ route('templates') }}" class="go-back"><i class="fas fa-angle-left"></i> {{ __('Páginas') }}</a>
    <span>\</span>
    <span>{{ __('Editar Página')}}</span>
</div>
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Editar Página')}}</h2>
                <!-- page title ends -->
                <!-- form to add template -->
                <form action="{{route('template_update',['id' => $templatedata->id])}}" class="row form" method="post" enctype="multipart/form-data">
                    @include('admin.templates._form')
                </form>
                <!-- form to add template ends -->
            </div>
        </div>
    </div>
</section>
@endsection