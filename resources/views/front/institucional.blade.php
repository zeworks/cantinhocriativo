@extends('layouts.default') @section('content')
<!-- banner - large -->
<section>
    <div class="institutional-banner">
        @foreach($template as $templ)
            <div class="image-bg" style="background-image: url('{{ asset('storage/images/'.$templ->featured_image) }}')"></div>
        @endforeach
    </div>
</section>
<!-- banner - large ends -->
<div class="empty-space-20"></div>
<!-- breadcrumb -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <ul class="breadcrumb">
                    <li>
                        <a href="../" title="home">Home</a>
                    </li>
                    <li>
                        @foreach($template as $templ)
                        <a href="{{$templ->slug}}" title="sobre">{{ $templ->title }}</a>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- /breadcrumb -->
<!-- ABOUT -->
@if($blocks)
<section>
    <div class="empty-space-80"></div>
    <div class="container">
        @foreach($blocks as $key => $block)
            <div class="row">
                @if($key%2)
                    <div class="col-sm-6 col-md-5 col-sm-push-7">
                        <h1>{{$block->blocks->title}}</h1>
                            {!! $block->blocks->description !!}    
                    </div>
                    <div class="col-sm-6 col-md-offset-1 col-sm-pull-6">
                        <div class="bordered-image">
                            <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$block->blocks->image),720,480,array('crop','')) }}" alt="">
                        </div>
                    </div>
                @else
                    <div class="col-sm-6 col-md-5">
                        <h1>{{$block->blocks->title}}</h1>
                        {!! $block->blocks->description !!}    
                    </div>
                    <div class="col-sm-6 col-md-offset-1">
                        <div class="bordered-image">
                            <img class="img-responsive" src="{{ Image::url(asset('storage/images/'.$block->blocks->image),720,480,array('crop','')) }}" alt="">
                        </div>
                    </div>
                @endif
            </div>
            <div class="empty-space-80"></div>
        @endforeach
    </div>
</section>
@endif
<!-- /ABOUT -->
@endsection
