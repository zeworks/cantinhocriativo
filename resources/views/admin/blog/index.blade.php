@extends('layouts.admin') @section('content')
<div class="breadcrumb">
    <span>{{ __('Blog')}}</span>
</div>
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <!-- page title -->
                <h2 class="page-title">{{ __('Blog') }}</h2>
                <!-- page title ends -->
                <span>Aqui estão suas publicações mais recentes do seu blog</span>
                <!-- button to add new banner -->
                <div class="buttons-top fright">
                    <a href="{{ route('blog_new' )}}" title="add post" class="btn btn-primary">
                        <i class="fas fa-plus"></i>
                        {{ __('Adicionar Post') }}
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
                    <table class="table-items__table with--image">
                        <tr>
                            <th>
                                <!-- image if exist -->
                            </th>
                            <th>Título</th>
                            <th>Data de Registo</th>
                            <th>Estado</th>
                            <th></th>
                        </tr>
                        @foreach($blogs as $blog)
                        <tr class="item-table">
                            <td>
                                <a href="{{ route('blog_edit',['id' => $blog->id]) }}" class="go-back">
                                @isset($blog->featured_image)
                                <img src="{{ asset('storage/images/'.$blog->featured_image) }}" class="rounded" width="40" height="40" alt="blog image {{$blog->id}}">
                                @endisset
                                </a>
                            </td>
                            <td>
                                <a href="{{ route('blog_edit',['id' => $blog->id]) }}" class="go-back">{{$blog->title}}</a>
                            </td>
                            <td>{{$blog->created_at}}</td>
                            <td>
                                @if($blog->status == 'on')
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
                                <form action="{{ route('blog_delete',['id' => $blog->id]) }}" method="post">
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