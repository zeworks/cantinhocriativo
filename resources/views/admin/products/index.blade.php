@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <span>{{ __('Produtos')}}</span>
</div>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Produtos') }}</h2>
                <!-- page title ends -->
                <span>Seus produtos</span>
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('product_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Produto') }}
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
                    <table class="table-items__table with--image">
                        <tr>
                            <th>
                                <!-- image if exist -->
                            </th>
                            <th>Produto</th>
                            <th>Referência</th>
                            <th>Data de Registo</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        @foreach($products as $product)
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('product_edit',['id' => $product->id]) }}" class="go-back">
                                @isset($product->featured_image)
                                    <img src="{{ asset('storage/images/'.$product->featured_image) }}" class="rounded" width="40" height="40" alt="product image {{$product->id}}">
                                @endisset
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('product_edit',['id' => $product->id]) }}" class="go-back">{{$product->title}}</a>
                            </td>
                            <td>
                            <strong class="link">{{$product->reference}}</strong>
                            </td>
                            <td>{{$product->created_at}}</td>
                            <td>
                                @if($product->status == 'on')
                                    <div class="status status--sucss">
                                        Activo
                                    </div>
                                @else
                                    <div class="status status--warn">
                                        Inactivo
                                    </div>
                                @endif
                            </td>
                            <td class="last-item-table">
                                <form action="{{ route('product_delete',['id' => $product->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" name="remove_publication_btn" class="link" title="Remover">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <!-- blog list ends -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection