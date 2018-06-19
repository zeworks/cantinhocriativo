@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <a href="{{ route('settings') }}" class="go-back"><i class="fas fa-angle-left"></i> {{ __('Definições') }}</a>
    <span>\</span>
    <span>{{ __('Geral')}}</span>
</div>
<section class="main-content settings_page">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-title">{{ __('Geral') }}</h2>
            </div>
            <div class="col-xs-12">
                <form action="{{ route('settings_general_edit') }}" method="post" class="row form edit_general_settings_page" name="edit_general_settings_form"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-xs-12">
                        @foreach ($websitesettings as $websitesetting)
                        <div class="table-items">
                            <div class="row divided">
                                <div class="col-xs-12">
                                    <div class="fright">
                                        <h4 class="strong fleft">{{ __('Modo Loja')}}</h4>
                                        &nbsp;&nbsp;&nbsp;
                                        <input type="hidden" name="status_hidden" class="status_hidden">
                                        <div class="switch fright  {{ $websitesetting -> website_mode_store == 'on' ? 'checked' : '' }}">
                                            <input type="checkbox" class="btsp-check" name="website_mode_store"  {{ $websitesetting -> website_mode_store == 'on' ? 'checked' : '' }}>
                                            <span class="toggle toggle--round"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row divided">
                                <div class="col-lg-5">
                                    <h4 class="strong">{{ __('Dados do Website') }}</h4>
                                    <small>{{ __('Seus clientes vao usar estes dados para te contactar') }}</small>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-field">
                                        <label for="platform_name">{{ __('Nome do Website') }}</label>
                                        <input type="text" id="platform_name" name="platform_name" class="form-control" value="{{ $websitesetting -> website_name }}">
                                    </div>
                                    <br>
                                    <div class="form-field">
                                        <label for="account_email">{{ __('Conta de Email') }}</label>
                                        <input type="email" id="account_email" name="account_email" class="form-control" value="{{ $websitesetting -> website_account_email }}">
                                    </div>
                                    <br>
                                    <div class="form-field">
                                        <label for="desc_website">{{ __('Descrição do Website') }}</label>
                                        <textarea name="desc_website" id="desc_website" class="form-control">{{ $websitesetting -> website_desc }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row divided">
                                <div class="col-lg-5">
                                    <h4 class="strong">{{ __('Endereços do Website') }}</h4>
                                    <small>Este endereço irá aparecer nas suas faturas.
                                        <br>Os restantes dados poderam estar disponiveis para os seus clientes</small>
                                </div>
                                <div class="col-lg-7">
                                    <div class="form-field">
                                        <label for="legal_name_business">{{ __('Nome legal do negócio') }}</label>
                                        <input type="text" id="legal_name_business" name="legal_name_business" class="form-control" value="{{ $websitesetting -> website_legal_name }}">
                                    </div>
                                    <br>
                                    <div class="form-field">
                                        <label for="phone_business">{{ __('Telefone') }}</label>
                                        <input type="text" id="phone_business" name="phone_business" class="form-control" value="{{ $websitesetting -> website_phone }}">
                                    </div>
                                    <br>
                                    <div class="form-field">
                                        <label for="street">{{ __('Rua') }}</label>
                                        <input type="text" id="street" name="street" class="form-control" value="{{ $websitesetting -> website_street }}">
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-12 col-xs-12">
                                            <br>
                                            <div class="form-field">
                                                <label for="city">{{ __('Cidade') }}</label>
                                                <input type="text" id="city" name="city" class="form-control" value="{{ $websitesetting -> website_city }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-xs-12">
                                            <br>
                                            <div class="form-field">
                                                <label for="postal_code">{{ __('Código Postal') }}</label>
                                                <input type="text" id="postal_code" name="postal_code" class="form-control" value="{{ $websitesetting -> website_postal_code }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-xs-12">
                                            <br>
                                            <div class="form-field">
                                                <label for="country">{{ __('País') }}</label>
                                                <input type="text" id="country" name="country" class="form-control" value="{{ $websitesetting -> website_country }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-12 col-xs-12">
                                            <br>
                                            <div class="form-field">
                                                <label for="region">{{ __('Região') }}</label>
                                                <input type="text" id="region" name="region" class="form-control" value="{{ $websitesetting -> website_region }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if($websitesettings[0]->website_mode_store)
                            <div class="row divided">
                                <div class="col-lg-5">
                                    <h4 class="strong">{{ __('Padrões e Formatos') }}</h4>
                                    <small>Padrões e formatos são usados para calcular preços de produtos, pesos de envio e pedidosvezes.</small>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-lg-6 col-sm-6 col-xs-12">
                                            <div class="form-field">
                                                <label for="currency">Moeda</label>
                                                <select name="currency" id="currency" class="form-control">
                                                    <option value="€" {{ $websitesetting -> website_currency == '€' ? 'selected' : '' }}>Euro(EUR)</option>
                                                    <option value="$" {{ $websitesetting -> website_currency == '$' ? 'selected' : '' }}>Dolar(USD)</option>
                                                    <option value="£" {{ $websitesetting -> website_currency == '£' ? 'selected' : '' }}>Libra(GBP)</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12">
                                            <div class="form-field">
                                                <label for="nif_iban">NIF/IBAN</label>
                                                <input type="text" name="nif_iban" id="nif_iban" class="form-control" value="{{ $websitesetting -> website_iban }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <h5 class="strong">{{ __('Editar formato ID das encomendas') }}</h5>
                                            <small>{{ __('Os números de encomenda começam em #1 por padrão. Enquanto você não pode
                                                mudar o número do pedido, pode adicionar um prefixo ou sufixo para criar
                                                IDs como "EN1" ou "1001-A"') }}</small>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12">
                                            <div class="form-field">
                                                <label for="prefix_order">Prefixo</label>
                                                <input type="text" id="prefix_order" name="prefix_order" class="form-control" value="{{ $websitesetting -> website_order_prefix }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-sm-6 col-xs-12">
                                            <div class="form-field">
                                                <label for="suffix_order">Sufixo</label>
                                                <input type="text" id="suffix_order" name="suffix_order" class="form-control" value="{{ $websitesetting -> website_order_suffix }}">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <small>{{ __('Seu ID de encomenda irá aparecer como') }} #1001, #1002, #1003 ...</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endif
                            <div class="row divided">
                                <div class="col-lg-5">
                                    <h4 class="strong">
                                        {{ __('Redes Sociais') }}</h4>
                                    <small>{{ __('Use as redes sociais para mostrar os seus produtos!') }}</small>
                                </div>
                                <div class="col-lg-7">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="form-field input-group clearfix">
                                                <label for="social_facebook" class="input-group-addon">
                                                    <span>
                                                        <i class="fab fa-facebook-f"></i>
                                                    </span>
                                                </label>
                                                <input type="text" name="social_facebook" id="social_facebook" class="form-control fleft" placeholder="Facebook url..." value="{{ $websitesetting -> website_url_facebook }}">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-field input-group clearfix">
                                                <label for="social_twitter" class="input-group-addon">
                                                    <span>
                                                        <i class="fab fa-twitter"></i>
                                                    </span>
                                                </label>
                                                <input type="text" name="social_twitter" id="social_twitter" class="form-control fleft" placeholder="Twitter url..." value="{{ $websitesetting -> website_url_twitter }}">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-field input-group clearfix">
                                                <label for="social_instagram" class="input-group-addon">
                                                    <span>
                                                        <i class="fab fa-instagram"></i>
                                                    </span>
                                                </label>
                                                <input type="text" name="social_instagram" id="social_instagram" class="form-control fleft" placeholder="Instagram url..."
                                                    value="{{ $websitesetting -> website_url_instagram }}">
                                            </div>
                                        </div>
                                        <div class="col-xs-12">
                                            <div class="form-field input-group clearfix">
                                                <label for="social_google_plus" class="input-group-addon">
                                                    <span>
                                                        <i class="fab fa-google-plus-g"></i>
                                                    </span>
                                                </label>
                                                <input type="text" name="social_google_plus" id="social_google_plus" class="form-control fleft" placeholder="Google Plus url..."
                                                    value="{{ $websitesetting -> website_url_google }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="buttons-top buttons-top-absolute">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-sm-8 col-lg-10">
                                    <span id="status-info">Dados por guardar</span>
                                </div>
                                <div class="col-sm-2 col-lg-1">
                                    <a href="#" title="Cancelar" class="btn btn-default decline">Cancelar</a>
                                </div>
                                <div class="col-sm-2 col-lg-1">
                                    <button type="submit" title="Guardar" name="save_data" class="btn btn-primary save">Guardar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection