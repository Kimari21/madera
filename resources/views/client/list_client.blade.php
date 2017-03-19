@extends('template')

@section('titre')
    Clients
@endsection
@section('contenu')
<div class="row">
<div class='col s6  offset-s3'>
      <ul class="collection with-header">
        <li class="collection-header"><h4>Liste clients</h4></li>
        @foreach ($client as $unclient)
        <li class="collection-item"><div>{{$unclient->Nom_Clients}} &nbsp {{$unclient->Prenom_Clients}}  &nbsp  &nbsp  &nbsp  &nbsp  {{$unclient->Mail_Clients}}<div class='right hide-on-med-and-down'>{!! Form::open(['url' => 'edit_client'], ['class' => 'material-icons']) !!}

        {!! Form::hidden('modifier', $unclient->Id_Clients) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

    {!! Form::open(['url' => 'supp_client'], ['class' => 'material-icons']) !!}

{!! Form::hidden('supprimer', $unclient->Id_Clients) !!}
        {!! Form::submit('Supprimer', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}</div>
</i></a></div> <br><br></li>
        
     
            
   
        
             @endforeach
          </ul>
        </div>
</div>
        <br>
        <br>

   
<div class="row">
<div class='col s6  offset-s3'>
        {!! Form::open(['url' => 'add_client', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter un client', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>

</div>

@endsection




