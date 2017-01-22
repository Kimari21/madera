@extends('template')

@section('titre')
    Devi
@endsection

@section('contenu')
{!! Form::open(['url' => 'deviController@postadd']) !!}

        {!! Form::label('nom', 'Entrez votre nom : ') !!}

        {!! Form::text('nom') !!}

        {!! Form::submit('Envoyer !') !!}

    {!! Form::close() !!}
@endsection