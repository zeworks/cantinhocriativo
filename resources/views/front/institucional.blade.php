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
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-5">
                <h1>Sobre Nós</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
            </div>
            <div class="col-sm-6 col-md-offset-1">
                <div class="bordered-image">
                    <img class="img-responsive" src="https://dummyimage.com/720x480/000/fff" alt="">
                </div>
            </div>
        </div>
        <div class="empty-space-80"></div>
        <div class="row">
            <div class="col-sm-6 col-md-5 col-sm-push-7">
                <h1>Nossa História</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo necessitatibus earum, aut odit temporibus doloribus
                    soluta incidunt voluptates et quae. Eligendi quia ipsam aliquid tenetur voluptatibus earum et enim repudiandae?</p>
            </div>
            <div class="col-sm-6 col-md-offset-1 col-sm-pull-6">
                <div class="bordered-image">
                    <img class="img-responsive" src="https://dummyimage.com/720x480/000/fff" alt="">
                </div>
            </div>
        </div>
        <div class="empty-space-80"></div>
    </div>
</section>
<!-- /ABOUT -->
@endsection
