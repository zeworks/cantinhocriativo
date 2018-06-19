@extends('layouts.admin') @section('content')
<?php
    $date = new DateTime('now', new DateTimeZone('Europe/Lisbon'));
    $pieces = explode(":",$date->format('H:i:s'));
    $full_date = $date->format('H:i:s');
    $time_text = "";

    if($full_date >= "12:00:00" && $full_date <= "23:59:59"){
        $time_text = "Boa tarde";
    }else{
        $time_text = "Bom dia";
    }
?>
    <div class="breadcrumb">
        <span>{{ __('Dashboard') }}</span>
    </div>
    <div class="main-content dashboard">
        <div class="container-fluid">
            <div class="row">
                <div class="{{$websitesettings[0]->website_mode_store == 'on' ? 'col-lg-10' : 'col-lg-12' }}">
                    <!-- dashboard -->
                    <!-- user info -->
                    <div class="row">
                        <div class="col-lg-12">
                            <h3>{{$time_text}},
                                <strong>{{ Auth::user()->name }}</strong>
                            </h3>
                            <p>{{ __('Veja o que está a acontecer neste momento no seu website!') }}</p>
                        </div>
                    </div>
                    <!-- user info ends -->
                    <br>
                    <!-- <h2 class="page-title">{{ __('Painel de Controlo') }}</h2> -->
                    @if($websitesettings[0]->website_mode_store)
                    <!-- website status -->
                    <div class="row match-height">
                        <!-- total sales -->
                        <div class="col-sm-3">
                            <div class="cart">
                                <h3 class="cart__title">
                                    Total Sales
                                </h3>
                                <p class="cart__percentage">85</p>
                                <img class="img-responsive cart__image" src="{{ asset('/img/sales.png') }}" alt="sales">
                            </div>
                        </div>
                        <!-- total sales ends -->
                        <!-- total orders -->
                        <div class="col-sm-3">
                            <div class="cart">
                                <h3 class="cart__title">
                                    Total Orders
                                </h3>
                                <p class="cart__percentage">85</p>
                                <img class="img-responsive cart__image" src="{{ asset('/img/cart.png') }}" alt="orders">
                            </div>
                        </div>
                        <!-- total orders ends -->
                    </div>
                    <!-- website status ends -->
                    @endif
                    <!-- messages and orders -->
                    <div class="row match-height">
                        @if($websitesettings[0]->website_mode_store)
                        <!-- orders -->
                        <div class="col-xs-12 col-sm-6">
                            <h2 class="page-title">{{ __('Orders & Payments') }}</h2>
                            <div class="table-items">
                                <a href="#" class="go-back">
                                    <strong>
                                        <i class="fas fa-shopping-cart"></i>
                                        1 Order</strong> Pending</a>
                                <hr>
                                <a href="#" class="go-back">
                                    <strong>
                                        <i class="far fa-credit-card"></i> 1 Payment</strong> Pending</a>
                                <hr>
                                <a href="#" class="go-back">
                                    <strong>
                                        <i class="fas fa-truck"></i> 1 Delivery</strong> Pending
                                </a>
                            </div>
                        </div>
                        <!-- /orders ends -->
                        @endif
                    </div>
                    <!-- messages and orders ends -->
                    <!-- mailing list -->
                    <div class="row">
                        <div class="col-xs-12">
                            <h2 class="page-title">
                                {{ __('Subscritores')}}
                                <small class="caps">[{{ __('Total')}}:
                                    <strong>1</strong>]</small>
                            </h2>
                            <p>Sua lista de emails permite que você entre em contato com clientes ou visitantes interessados
                                no seu site. Chegar a eles com ofertas exclusivas ou atualizações sobre seus produtos.</p>
                            <br>
                            <div class="table-items">
                                <form method="post" action="" class="search search--users active">
                                    <input type="text" name="search" placeholder="{{ __('Search') }}..." class="form-control search__input">
                                    <button type="submit" class="search__btn">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </form>
                                <br>
                                <br>
                                <table class="table-items__table">
                                    <tr>
                                        <th>
                                            Email do subscritor
                                        </th>
                                        <th>
                                            Date
                                        </th>
                                    </tr>
                                    @foreach($subscribers as $subscriber)
                                    <tr class="item-table">
                                        <td>
                                            <p>
                                                {{$subscriber->email}}
                                            </p>
                                        </td>
                                        <td>
                                            {{$subscriber->created_at}}
                                        </td>
                                    </tr>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- mailing list ends -->
                    <!-- dashboard ends -->
                </div>
                @if($websitesettings[0]->website_mode_store)
                <div class="col-lg-2">
                    <div class="right-asidebar">
                        <section>
                            <h2 class="sub-title">
                                Your Last Activity
                            </h2>
                            <div class="activity">
                                <label>
                                    Autor
                                </label>
                                <p>
                                    enabled Stripe as a payment provider
                                </p>
                                <small>20:53 19/01/2017</small>
                            </div>
                            <div class="activity">
                                <label>
                                    Autor
                                </label>
                                <p>
                                    enabled Stripe as a payment provider
                                </p>
                                <small>20:53 19/01/2017</small>
                            </div>
                        </section>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
    @endsection