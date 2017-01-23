@extends('template')

@section('titre')
    Clients
@endsection
@section('contenu')

   <div class='col-md-12'>
        <div class='comment'>
            <table border="1px solid black">
              <th>Nom</th>  <th>Prenom</th>      <th>mail</th> 
               @foreach ($client as $unclient)
             
             <tr><th style="width:200px; height:50px;"> {{$unclient->Nom_Clients}}</th><th style="width:200px; height:50px;"> {{$unclient->Prenom_Clients}}</th><th style="width:200px; height:50px;"> {{$unclient->Mail_Clients}}</th>
             <th>

{!! Form::open(['url' => 'edit_client'], ['class' => 'form-horizontal well']) !!}

		{!! Form::hidden('invisible', $unclient->Id_Clients) !!}
        {!! Form::submit('Modifier', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

    <br>

{!! Form::open(['url' => 'supp_client'], ['class' => 'form-horizontal well']) !!}

{!! Form::hidden('invisible', $unclient->Id_Clients) !!}
        {!! Form::submit('Supprimer', array('class'=> 'btn btn-Danger')) !!}

    {!! Form::close() !!}

               </th> </tr>
            
             @endforeach
            </table>
        </div>
        {!! Form::open(['url' => 'add_client', 'method' =>'GET'], ['class' => 'form-horizontal well']) !!}

        {!! Form::submit('Ajouter un client', array('class'=> 'btn')) !!}

    {!! Form::close() !!}
</div>



@endsection




