@extends('template')

@section('titre')
    Module
@endsection
@section('contenu')

   <div class='col-md-12'>
        <div class='comment'>
            <table border="1px solid black">
              <th>caract</th>  <th>nom</th>      <th>prix</th>  <th>propriétaire</th>  
               @foreach ($module as $unmodule)
             
             <tr><th style="width:200px; height:50px;"> {{$unmodule->Id_CaracteristiquesGamme}}</th><th style="width:200px; height:50px;"> {{$unmodule->Nom_Gamme}}</th><th style="width:200px; height:50px;"> {{$unmodule->Prix_Gamme}}</th><th  style="width:200px; height:50px;">    {{$unmodule->Prix_Gamme}}   </th>
             <th>

{!! Form::open(['url' => 'deviController@postedit'], ['class' => 'form-horizontal well']) !!}

		{!! Form::hidden('invisible', '$unmodule->Id_Devis') !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

    <br>

{!! Form::open(['url' => 'deviController@postsupp'], ['class' => 'form-horizontal well']) !!}

{!! Form::hidden('invisible', '$unmodule->Id_Devis') !!}
        {!! Form::submit('Supprimer', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

               </th> </tr>
            
             @endforeach
            </table>
        </div>
</div>
@endsection




