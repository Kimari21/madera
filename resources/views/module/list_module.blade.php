@extends('template')

@section('titre')
    Module
@endsection
@section('contenu')



<div class="row">
<div class='col s6  offset-s3'>
      <ul class="collection with-header">
        <li class="collection-header"><h4>Liste module</h4></li>
           @foreach ($module as $unmodule)
             
        <li class="collection-item"><div>{{$unmodule->Nom_Module}} &nbsp {{$unmodule->Nature_Module}} &nbsp  &nbsp{{$unmodule->Caracteristique_Module}}  
          <div class='right hide-on-med-and-down'>
{!! Form::open(['url' => 'edit_module'], ['class' => 'form-horizontal well']) !!}

    {!! Form::hidden('modifier', $unmodule->Id_Module) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

   
{!! Form::open(['url' => 'supp_module'], ['class' => 'form-horizontal well']) !!}

{!! Form::hidden('supprimer', $unmodule->Id_Module) !!}
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
{!! Form::open(['url' => 'add_module', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter un module', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>

</div>

@endsection




