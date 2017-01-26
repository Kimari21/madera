@extends('template')

@section('titre')
    Editer Client
@endsection

@section('contenu')
<div class='col-md-4 col-md-offset-4'>
  
{!! Form::open(['url' => 'valid_edit_client']) !!}
 {!! Form::hidden('Id_Clients', $client->Id_Clients) !!}
     <div class="form-group">
    {!! Form::label('Nom_Clients', 'Entrez le nom du client : ') !!}

        {!! Form::text('Nom_Clients', $client->Nom_Clients) !!}
</div>

   

   <div class="form-group">
        {!! Form::label('Prenom_Clients', 'Entrez le prenom : ') !!}

        {!! Form::text('Prenom_Clients', $client->Prenom_Clients) !!}
</div>
   <div class="form-group">
        {!! Form::label('Mail_Clients', 'Entrez le mail : ') !!}

        {!! Form::text('Mail_Clients', $client->Mail_Clients) !!}
        </div>
      <div class="form-group">
    {!! Form::label('TelephoneDomicile_Clients', 'Entrez le numéro de domicile : ') !!}

        {!! Form::number('TelephoneDomicile_Clients', $client->TelephoneDomicile_Clients) !!}
</div>
 <div class="form-group">
       {!! Form::label('TelephonePortable_Clients', 'Entrez le numéro de portable : ') !!}

        {!! Form::number('TelephonePortable_Clients', $client->TelephonePortable_Clients) !!}
</div>
   <div class="form-group">
           <label for="Adresse_Clients">Adresse client:  </label>    
  
      <input name="Adresse_Clients" type="text" id="Adresse_Clients" value="{{$client->Adresse_Clients}}">   </input>         
</div>
   <div class="form-group">
        <label for="Ville_Clients">Entrez la ville :  </label>    
  
      <input name="Ville_Clients" type="text" id="Ville_Clients" value="{{$client->Ville_Clients}}">   </input>    
        </div>  
  

     <div class="form-group">
        {!! Form::label('CodePostal_Clients', 'Entrez le code postal : ') !!}

        {!! Form::number('CodePostal_Clients', $client->CodePostal_Clients) !!}
        </div>  


        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
</div>
  
@endsection