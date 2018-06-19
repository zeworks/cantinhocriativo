@extends('layouts.admin') 
@section('content')
<div class="breadcrumb">
    <span>{{ __('Definições')}}</span>
</div>
<section class="main-content settings_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-title">{{ __('Definições') }}</h2>
            </div>
            <div class="col-xs-12">
                <div class="table-items">
                    <div class="row row-equal-height">
                        <div class="col-lg-3 col-sm-6 col-xs-12 settings_page__item">
                            <a href="{{ route('general') }}" class="settings_page__link">
                                <i class="fas fa-cog"></i>
                                <div class="settings_page__item-text">
                                    <span>{{ __('Geral') }}</span>
                                    <p>{{ __('Visualize e atualize as suas definições gerais') }}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 settings_page__item">
                            <a href="{{ route('account') }}" class="settings_page__link">
                                <i class="fas fa-user"></i>
                                <div class="settings_page__item-text">
                                    <span>{{ __('Conta') }}</span>
                                    <p>{{ __('Configure sua conta e permissões') }}</p>
                                </div>
                            </a>
                        </div>
                        @if($websitesettings[0]->website_mode_store)
                        <div class="col-lg-3 col-sm-6 col-xs-12 settings_page__item">
                            <a href="processador/modal.php?page=checkout" class="settings_page__link">
                                <i class="fas fa-shopping-cart"></i>
                                <div class="settings_page__item-text">
                                    <span>{{ __('Carrinho') }}</span>
                                    <p>{{ __('Altere as definições do carrinho de compras') }}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 settings_page__item">
                            <a href="{{ route('shipping_settings') }}" class="settings_page__link">
                                <i class="fas fa-shipping-fast"></i>
                                <div class="settings_page__item-text">
                                    <span>{{ __('Envios') }}</span>
                                    <p>{{ __('Configure os seus métodos de envio') }}</p>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-3 col-sm-6 col-xs-12 settings_page__item">
                            <a href="#" class="settings_page__link">
                                <i class="fas fa-hand-holding-usd"></i>
                                <div class="settings_page__item-text">
                                    <span>{{ __('Taxas') }}</span>
                                    <p>{{ __('Configure como as suas taxas são aplicadas') }}</p>
                                </div>
                            </a>
                        </div>
                        @endif
                        <div class="col-lg-3 col-sm-6 col-xs-12 settings_page__item">
                            <a href="{{ route('notifications_settings') }}" class="settings_page__link">
                                <i class="fas fa-envelope"></i>
                                <div class="settings_page__item-text">
                                    <span>{{ __('Notificações') }}</span>
                                    <p>{{ __('Configure aqui suas notificações para seus clientes') }}</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
