@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <a href="{{ route('settings') }}" class="go-back">
        <i class="fas fa-angle-left"></i> {{ __('Definições') }}</a>
    <span>\</span>
    <a href="{{ route('notifications_settings') }}" class="go-back">
        {{ __('Notificações') }}</a>
    <span>\</span>
    <span>{{ __('Adicionar Notificação')}}</span>
</div>
<section class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Adicionar Notificação')}}</h2>
                <!-- page title ends -->
                <!-- form to add banner -->
                <form action="{{ route('notification_create')}}" method="post" class="row form" enctype="multipart/form-data">
                    @csrf @include('admin.setting.notifications._form')
                </form>
                <!-- form to add banner ends -->
            </div>
        </div>
    </div>
</section>
@endsection