@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <span>{{ __('Notificações Enviadas')}}</span>
</div>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Notificações Enviadas') }}</h2>
                <!-- page title ends -->
                <span>Suas notificações enviadas para os seus subscritores</span>
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('notification_send') }}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Enviar Notificação') }}
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
                    <!-- products list -->
                    <table class="table-items__table">
                        <tr>
                            <th>Nome da Notificação</th>
                            <th>Destinatário(s)</th>
                            <th>Data de Envio</th>
                            <th>Estado</th>
                        </tr>
                        <tr class="item-table">
                            <td>
                                <a href="" class="go-back">Caixa Eplosiva</a>
                            </td>
                            <td>josenogueira@email.com</td>
                            <td>12/06/2018</td>
                            <td>
                                <div class="status status--sucss">
                                    Activo
                                </div>
                                <div class="status status--warn">
                                    Inactivo
                                </div>
                            </td>
                        </tr>
                    </table>
                    <!-- blog list ends -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection