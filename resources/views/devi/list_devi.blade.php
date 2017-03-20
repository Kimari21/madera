@extends('template')

@section('titre')
    Devi
@endsection
@section('contenu')

   
               
       



<div class="row">
<div class='col s6  offset-s3'>
      <ul class="collection with-header">
        <li class="collection-header"><h4>Liste devis</h4>
          <p>Utilisateurs &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  Clients &nbsp&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp &nbsp &nbsp  &nbsp  &nbsp  &nbsp Etat &nbsp &nbsp&nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp   &nbsp Prix</p>
        </li>
        @foreach ($devi as $undevi)
        <li class="collection-item"><div>
@foreach ($utilisateurs as $unutilisateur)
          @if (($undevi->Id_Utilisateurs) === ($unutilisateur->Id_Utilisateurs))
           {{$unutilisateur->Nom_Utilisateurs}} &nbsp &nbsp  &nbsp  {{$unutilisateur->Prenom_Utilisateurs}} 
           @endif
           @endforeach 

          &nbsp &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp 
@foreach ($client as $unclient)
          @if (($undevi->Id_Clients ) === ($unclient->Id_Clients))
           {{$unclient->Nom_Clients}}&nbsp &nbsp  &nbsp  {{$unclient->Prenom_Clients}}
           @endif
           
 @endforeach


          &nbsp  &nbsp  &nbsp &nbsp  &nbsp &nbsp &nbsp  &nbsp 
@foreach ($etat as $unetat)
          @if (($undevi->Id_Etat) === ($unetat->Id_Etat))
           {{$unetat->Description_Etat}}
           @endif
          
 @endforeach
          &nbsp  &nbsp {{$undevi->PrixTotal_Devis}}<div class='right hide-on-med-and-down'>
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




