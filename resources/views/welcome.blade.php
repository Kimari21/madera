@extends('template')

@section('titre')
    Home
@endsection

@section('contenu')
    <p>Bienvenue sur le projet madera</p>
    <br>
    <p> Si vous souhaitez commencer à planifier une maison et ainsi créer un devis cliquez sur le bouton.</p>


{!! Form::open(['url' => 'devi_client', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Créer votre maison modulaire', array('class'=> 'btn')) !!}

    {!! Form::close() !!}

@endsection