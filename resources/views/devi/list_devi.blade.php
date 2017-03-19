@extends('template')

@section('titre')
    Devi
@endsection
@section('contenu')

   
               
       



<div class="row">
<div class='col s6  offset-s3'>
      <ul class="collection with-header">
        <li class="collection-header"><h4>Liste devis</h4></li>
        @foreach ($devi as $undevi)
        <li class="collection-item"><div>{{$undevi->Id_Utilisateurs}} &nbsp {{$undevi->Id_Clients}}  &nbsp  &nbsp  &nbsp  &nbsp  {{$undevi->Id_Etat}}&nbsp  &nbsp {{$undevi->PrixTotal_Devis}}<div class='right hide-on-med-and-down'>
{!! Form::open(['url' => 'edit_devi'], ['class' => 'form-horizontal well']) !!}

        {!! Form::hidden('modifier', $undevi->Id_Devis) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}
   
{!! Form::open(['url' => 'supp_devi'], ['class' => 'form-horizontal well']) !!}

{!! Form::hidden('supprimer', $undevi->Id_Devis) !!}
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
       {!! Form::open(['url' => 'add_devi', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter un devi', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>

</div>

@endsection




