@extends('layouts.default') @section('content')
<div class="empty-space-20"></div>
<!-- SUCCESS -->
<section>
    <div class="container">
        <div class="row">
            <div class="col-xs-12 text-center">
                @if($creation)
                    <h2>Newsletter subscrita com sucesso!</h2>
                    <br>
                    <h3><strong>{{$input}}</strong></h3>
                    <p>Agradeçemos a sua subscrição na <strong>Just For You</strong>, a partir de agora receberá as nossas notícias, fique atento!</p>
                @else
                    <h2>Erro ao tentar subscrever a newsletter!</h2>
                    <br>
                    <h3><strong>{{$input}}</strong></h3>
                    <p>Este email já existe na nossa base de dados</p>
                @endif
            </div>
        </div>
    </div>
</section>
<!-- /SUCCESS -->
@endsection
