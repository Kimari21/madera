@extends('template')

@section('titre')
    Gamme
@endsection
@section('contenu')

  


<div class="row">
<div class='col s6  offset-s3'>
      <ul class="collection with-header">
        <li class="collection-header"><h4>Liste gamme</h4></li>
         @foreach ($gamme as $unegamme)
        <li class="collection-item"><div>{{$unegamme->Id_CaracteristiquesGamme}} &nbsp {{$unegamme->Nom_Gamme}} &nbsp  &nbsp  &nbsp  &nbsp  {{$unegamme->Prix_Gamme}}<div class='right hide-on-med-and-down'>
{!! Form::open(['url' => 'edit_gamme'], ['class' => 'form-horizontal well']) !!}

        {!! Form::hidden('modifier', $unegamme->Id_Gamme) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

   
{!! Form::open(['url' => 'supp_gamme'], ['class' => 'form-horizontal well']) !!}

    {!! Form::hidden('supprimer', $unegamme->Id_Gamme) !!}
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
        {!! Form::open(['url' => 'add_gamme', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter une gamme', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>

</div>

@endsection




