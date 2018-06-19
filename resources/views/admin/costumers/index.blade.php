@extends('layouts.admin') @section('content')
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Clientes') }}</h2>
                <!-- page title ends -->
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('costumer_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Cliente') }}
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
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('costumer_edit') }}" class="go-back">Nome do Cliente</a>
                            </td>
                            <td>0 Encomendas</td>
                            <td>0,00€ Gasto</td>
                            <td class="last-item-table">
                                <form action="" method="post">
                                    <input type="hidden" class="form-control" name="id_product" value="">
                                    <button type="submit" name="remove_publication_btn" class="link" title="Remover">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
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