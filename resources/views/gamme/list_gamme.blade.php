@extends('template')

@section('titre')
    Gamme
@endsection
@section('contenu')

   <div class='col-md-4 col-md-offset-4'>
        <div class='comment'>
            <table border="1px solid black">
              <th>caract</th>  <th>nom</th>      <th>prix</th>  <th>propriétaire</th>  
               @foreach ($gamme as $unegamme)
             
             <tr><th style="width:200px; height:50px;"> {{$unegamme->Id_CaracteristiquesGamme}}</th><th style="width:200px; height:50px;"> {{$unegamme->Nom_Gamme}}</th><th style="width:200px; height:50px;"> {{$unegamme->Prix_Gamme}}</th><th  style="width:200px; height:50px;">    {{$unegamme->Proprietaire_Gamme}}   </th>
             <th>

{!! Form::open(['url' => 'edit_gamme'], ['class' => 'form-horizontal well']) !!}

		{!! Form::hidden('modifier', $unegamme->Id_Gamme) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

    <br>

{!! Form::open(['url' => 'supp_gamme'], ['class' => 'form-horizontal well']) !!}

	{!! Form::hidden('supprimer', $unegamme->Id_Gamme) !!}
        {!! Form::submit('Supprimer', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

               </th> </tr>
            
             @endforeach
            </table>
        </div>
        {!! Form::open(['url' => 'add_gamme', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter une gamme', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>




@endsection




