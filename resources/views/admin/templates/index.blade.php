@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <span>{{ __('Páginas')}}</span>
</div>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Páginas') }}</h2>
                <!-- page title ends -->
                <span>Aqui define o banner, titulo e texto (opcional) que quer mostrar no bloco principal na página.</span>
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('template_new' )}}" title="add page" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Página') }}
                    </a>
                </div>
                <!-- button to add new banner ends -->
                <div class="table-items">
                    <!-- search -->
                    <form method="post" action="" class="search search--users active">
                        @csrf
                        <input type="text" name="search" placeholder="Procurar..." class="form-control search__input">
                        <button type="submit" class="search__btn">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                    <br>
                    <br>
                    <!-- search ends -->
                    <!-- templates list -->
                    <table class="table-items__table with--image">
                        <tr>
                            <th></th>
                            <th>{{ __('Página') }}</th>
                            <th>{{ __('Data de Registo') }}</th>
                            <th>{{ __('Estado') }}</th>
                            <th></th>
                        </tr>
                        @foreach($templatedata as $template)
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('template_edit',['id' => $template->id]) }}" class="go-back">
                                @isset($template->featured_image)
                                <img src="{{ asset('storage/images/'.$template->featured_image) }}" class="rounded" width="40" height="40" alt="template image {{$template->id}}">
                                @endisset
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('template_edit',['id' => $template->id]) }}" class="go-back">{{$template->title}}</a>
                            </td>
                            <td>{{$template->created_at}}</td>
                            <td>
                                @if($template->status == 'on')
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
                                <form action="{{ route('template_delete',['id' => $template->id]) }}" method="post">
                                    @csrf
                                    <button type="submit" name="remove_publication_btn" class="link" title="Remover">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <!-- templates list ends -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection