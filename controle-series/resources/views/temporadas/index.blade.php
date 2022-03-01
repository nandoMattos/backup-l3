@extends('layout')


@section('cabecalho')
    Temporadas de {{ $serie->nome }}
@endsection

@section('conteudo')
    <ul class="list-group">
        @foreach($temporadas as $temporada)
        <li class="list-group-item d-flex align-items-center">
            <a href="/temporadas/{{$temporada->id}}/episodios">
                Temporada {{$temporada->numero}}
            </a> 
        <span class="badge badge-secondary ml-5">
            {{ $temporada->getEpisodiosAssistidos()->count(); }} / {{$temporada->episodios->count()}}
        </span>
        </li>

        @endforeach
    </ul>
@endsection