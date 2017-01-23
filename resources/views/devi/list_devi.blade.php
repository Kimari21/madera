@extends('template')

@section('titre')
    Devi
@endsection
@section('contenu')

   <div class='col-md-12'>
        <div class='comment'>
            <table border="1px solid black">
              <th>utilisateur</th>  <th>client</th>      <th>etat</th>  <th>prix</th>  
               @foreach ($devi as $undevi)
             
             <tr><th style="width:200px; height:50px;"> {{$undevi->Id_Utilisateurs}}</th><th style="width:200px; height:50px;"> {{$undevi->Id_Clients}}</th><th style="width:200px; height:50px;"> {{$undevi->Id_Etat}}</th><th  style="width:200px; height:50px;">    {{$undevi->PrixTotal_Devis}}   </th>
             <th>

{!! Form::open(['url' => 'edit_devi'], ['class' => 'form-horizontal well']) !!}

		{!! Form::hidden('invisible', '$undevi->Id_Devis') !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

    <br>

{!! Form::open(['url' => 'supp_devi'], ['class' => 'form-horizontal well']) !!}

{!! Form::hidden('invisible', '$undevi->Id_Devis') !!}
        {!! Form::submit('Supprimer', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

               </th> </tr>
            
             @endforeach
            </table>
        </div>
        {!! Form::open(['url' => 'add_devi', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter un devi', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>



@endsection




