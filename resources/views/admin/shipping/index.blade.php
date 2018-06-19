@extends('layouts.admin') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Envios') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <!-- <div class="buttons-top fright">
                    <a href="{{ route('shipping_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Envio') }}
                    </a>
                </div> -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="edit_shipping_address" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close fright" data-dismiss="modal">
                    <i class="icon-cross"></i>
                </button>
                <h4 class="strong">Edit shipping address</h4>
            </div>
            <div class="modal-body">
                <div class="col-xs-12">
                    <div class="table-items">
                        <p>Suggested shipping address for your Website:</p>
                        <small>Largo Luís de Camões, Edifício Rainha, Piso 12, Oliveira de Azeméis, 3720 Aveiro, Portugal</small>
                        <div class="row">
                            <div class="col-lg-6 col-sm-6 col-xs-12">
                                <a href="#" title="use this address" class="btn btn-default">Use this address</a>
                            </div>
                        </div>
                    </div>
                </div>
                <form action="" name="form_edit_shipping_address" method="post" class="form_edit_shipping_address container">
                    <div class="row">
                        <div class="col-xs-12">
                            <small>Enter the address from which you ship orders to customers.</small>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-field clearfix">
                                <label for="legal_name">Address</label>
                                <input type="text" id="legal_name" name="legal_name" class="form-control">
                            </div>
                            <div class="form-field clearfix">
                                <label for="phone">Phone</label>
                                <input type="text" id="phone" name="phone" class="form-control">
                            </div>
                            <div class="form-field">
                                <label for="street">Street</label>
                                <input type="text" id="street" name="street" class="form-control">
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-field">
                                        <label for="city">City</label>
                                        <input type="text" id="city" name="city" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-field">
                                        <label for="postal_code">Postal / ZIP Code</label>
                                        <input type="text" id="postal_code" name="postal_code" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-field">
                                        <label for="country">Country</label>
                                        <input type="text" id="country" name="country" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-sm-12 col-xs-12">
                                    <div class="form-field">
                                        <label for="region">Region</label>
                                        <input type="text" id="region" name="region" class="form-control">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-6">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection