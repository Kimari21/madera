@extends('template')

@section('titre')
    Gamme
@endsection

@section('contenu')

 <div class='col-md-4 col-md-offset-4'>
{!! Form::open(['url' => 'add_client']) !!}
 
     <div class="form-group">
    {!! Form::label('nom_client', 'Entrez le nom du client : ') !!}

        {!! Form::text('nom_client') !!}
</div>

   

   <div class="form-group">
        {!! Form::label('prenom_client', 'Entrez le prenom : ') !!}

        {!! Form::text('prenom_client') !!}
</div>
   <div class="form-group">
        {!! Form::label('mail_client', 'Entrez le mail : ') !!}

        {!! Form::text('mail_client') !!}
        </div>
      <div class="form-group">
    {!! Form::label('tel_domicile', 'Entrez le numéro de domicile : ') !!}

        {!! Form::number('tel_domicile') !!}
</div>
 <div class="form-group">
       {!! Form::label('tel_portable', 'Entrez le numéro de portable : ') !!}

        {!! Form::number('tel_portable') !!}
</div>
   <div class="form-group">
           <label for="adresse_client">Adresse client:  </label>    
  
      <input name="adresse_client" type="text" id="adresse_client">   </input>         
</div>
   <div class="form-group">
        <label for="ville_client">Entrez la ville :  </label>    
  
      <input name="ville_client" type="text" id="ville_client">   </input>    
        </div>  
  

     <div class="form-group">
        {!! Form::label('code_postal', 'Entrez le code postal : ') !!}

        {!! Form::number('code_postal') !!}
        </div>  


        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
</div>
@endsection