@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <span>{{ __('Banners Homepage') }}</span>
</div>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Adicionar Banner')}}</h2>
                <!-- page title ends -->
                <p>Os seguintes banners serão apresentados na
                    <strong>Homepage</strong>
                </p>
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('banner_new' )}}" title="add banner" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Banner') }}
                    </a>
                </div>
                <!-- button to add new banner ends -->
                <div class="table-items">
                    <div class="row">
                        @foreach($banners as $banner)
                        <!-- banner item  -->
                        <div class="col-lg-3 col-sm-6 col-md-4 col-xs-12">
                            <div class="cart-thumb cart-thumb--detail" style="background-image: url({{isset($banner->banner_image) ? asset('storage/images/'.$banner->banner_image) : 'https://dummyimage.com/398x200/f3f3f3/000'}})">
                                <div class="cart-thumb__info">
                                    <h4>
                                        {{$banner->banner_title}}
                                    </h4>
                                    {!! $banner->banner_description !!}
                                    <div class="cart-thumb__actions">
                                        <form action="{{ route('banner_delete', ['id' => $banner->id]) }}" method="post">
                                            @csrf
                                            <button type="submit" name="remove_banner" title="Remove">
                                                <i class="far fa-trash-alt"></i>
                                            </button>
                                        </form>
                                        <a href="{{ route('banner_edit', ['id' => $banner->id]) }}" title="Edit">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- banner item ends -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection