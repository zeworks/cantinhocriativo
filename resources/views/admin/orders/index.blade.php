@extends('layouts.admin') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Encomendas') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('order_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Encomenda') }}
                    </a>
                </div>
                <!-- button to add new banner ends -->
                <div class="table-items">
                    <!-- search -->
                    <form method="post" action="" class="search search--users active">
                        <input type="text" name="search" placeholder="Procurar..." class="form-control search__input">
                        <button type="submit" class="search__btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <br>
                    <br>
                    <!-- search ends -->
                    <!-- templates list -->
                    <table class="table-items__table">
                        <tr>
                            <th>Ref. Enc</th>
                            <th>Data de Registo</th>
                            <th>Cliente</th>
                            <th>Estado de Entrega</th>
                            <th>Estado de Pagamento</th>
                            <th>Estado de Encomenda</th>
                            <th>Total</th>
                        </tr>
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('order_edit') }}" class="go-back">#122</a>
                            </td>
                            <td>20:53 19/01/2017</td>
                            <td>José Nogueira</td>
                            <td>
                                <div class="status status--warn">
                                    Pendente
                                </div>
                            </td>
                            <td>
                                <div class="status status--sucss">
                                    Pago
                                </div>
                            </td>
                            <td>
                                <div class="status status--warn">
                                    Pendente
                                </div>
                            </td>
                            <td>
                                55.00€
                            </td>
                        </tr>
                    </table>
                    <!-- templates list ends -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection