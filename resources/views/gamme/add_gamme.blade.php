@extends('template')

@section('titre')
    Gamme
@endsection

@section('contenu')
<div class="row">
 <div class='col s4  offset-s4'>

{!! Form::open(['url' => 'add_gamme']) !!}
 
     <div class="form-group">
    {!! Form::label('nom_gamme', 'Entrez le nom de la gamme : ') !!}

        {!! Form::text('nom_gamme','',['required']) !!}
</div>

   

   <div class="form-group">
        {!! Form::label('prop_gamme', 'Entrez le propriétaire de la gamme : ') !!}

        {!! Form::text('prop_gamme','',['required']) !!}
</div>
   <div class="form-group">
        {!! Form::label('number', 'Entrez un prix : ') !!}

        {!! Form::number('prix_gamme','',['required']) !!}
        </div>
   <div class="row">
   <div class="input-field col s4">
      {!! Form::label('caract_gamme', 'Choisissez une caractéristique de gamme : ') !!}
     </div>
          </div>
          <br>
         <div class="row">
   <div class="input-field col s4">
 
             <select name="caract_gamme" id="caract_gamme" class="browser-default" required>
      @foreach($caract_gamme as $uncaract_gamme)
   
        <option value="{{$uncaract_gamme->Id_CaracteristiquesGamme}}">{{$uncaract_gamme->Nom_Caracteristiques_Gamme}}</option>
      @endforeach
    </select>
     
</div></div>
 
        {!! Form::submit('Envoyer !', array('class'=> 'btn')) !!}
    {!! Form::close() !!}
</div>
<div>
@endsection