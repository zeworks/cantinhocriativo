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
                teste
                <ul class="breadcrumb">
                    <li>
                        <a href="#home" title="home">Home</a>
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
<section>
    <div class="empty-space-80"></div>
   
</section>
<!-- /ABOUT -->
@endsection
