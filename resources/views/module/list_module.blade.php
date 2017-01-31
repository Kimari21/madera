@extends('template')

@section('titre')
    Module
@endsection
@section('contenu')

   <div class='col-md-4 col-md-offset-4'>
        <div class='comment'>
            <table border="1px solid black">
              <th>NOM</th>  <th>caractéristique</th>      <th>nature</th> 
               @foreach ($module as $unmodule)
             
             <tr><th style="width:200px; height:50px;"> {{$unmodule->Nom_Module}}</th><th style="width:200px; height:50px;"> {{$unmodule->Nature_Module}}</th><th style="width:200px; height:50px;"> {{$unmodule->Caracteristique_Module}}</th>
             <th>

{!! Form::open(['url' => 'edit_module'], ['class' => 'form-horizontal well']) !!}

		{!! Form::hidden('modifier', $unmodule->Id_Module) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

    <br>

{!! Form::open(['url' => 'supp_module'], ['class' => 'form-horizontal well']) !!}

{!! Form::hidden('supprimer', $unmodule->Id_Module) !!}
        {!! Form::submit('Supprimer', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}



               </th> </tr>
            
             @endforeach
            </table>
        </div>
{!! Form::open(['url' => 'add_module', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter un module', array('class'=> 'btn')) !!}

    {!! Form::close() !!}

@endsection




