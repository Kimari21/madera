@extends('template')

@section('titre')
    Ajout Client
@endsection

@section('contenu')

<div class="row">
 <div class='col s4 offset-s4'>
{!! Form::open(['url' => 'add_client']) !!}
 
     <div class="form-group">
    {!! Form::label('nom_client', 'Entrez le nom du client : ') !!}
 <i class="material-icons prefix">account_circle</i>
        {!! Form::text('nom_client','',['required']) !!}
</div>

   

   <div class="form-group">
        {!! Form::label('prenom_client', 'Entrez le prenom : ') !!}
 <i class="material-icons prefix">account_circle</i>
        {!! Form::text('prenom_client','',['required']) !!}
</div>
   <div class="form-group">
        {!! Form::label('mail_client', 'Entrez le mail : ') !!}

        {!! Form::text('mail_client','',['required']) !!}
        </div>
      <div class="form-group">
    {!! Form::label('tel_domicile', 'Entrez le numéro de domicile : ') !!}
<i class="material-icons prefix">phone</i>
        {!! Form::number('tel_domicile','',['required']) !!}
</div>
 <div class="form-group">
       {!! Form::label('tel_portable', 'Entrez le numéro de portable : ') !!}
<i class="material-icons prefix">phone</i>
        {!! Form::number('tel_portable','',['required']) !!}
</div>
   <div class="form-group">
           <label for="adresse_client">Adresse client:  </label>    
  
      <input name="adresse_client" type="text" id="adresse_client" required>   </input>         
</div>
   <div class="form-group">
        <label for="ville_client">Entrez la ville :  </label>    
  
      <input name="ville_client" type="text" id="ville_client" required>   </input>    
        </div>  
  

     <div class="form-group">
        {!! Form::label('code_postal', 'Entrez le code postal : ') !!}

        {!! Form::number('code_postal','',['required']) !!}
        </div>  


        {!! Form::submit('Envoyer !', array('class'=> 'btn')) !!}
    {!! Form::close() !!}
</div>
</div>
@endsection