@extends('template')

@section('titre')
    Gamme
@endsection

@section('contenu')
<div class='col-md-4 col-md-offset-4'>

{!! Form::open(['url' => 'valid_edit_gamme']) !!}
 <div class="form-group">
    {!! Form::label('nom_gamme', 'Entrez le nom de la gamme : ') !!}

        {!! Form::text('nom_gamme',$gamme->Nom_Gamme) !!}
</div>

   

   <div class="form-group">
        {!! Form::label('prop_gamme', 'Entrez le propriétaire de la gamme : ') !!}

        {!! Form::text('prop_gamme', $gamme->Proprietaire_Gamme) !!}
</div>
   <div class="form-group">
        {!! Form::label('number', 'Entrez un prix : ') !!}

        {!! Form::number('prix_gamme', $gamme->Prix_Gamme) !!}
        </div>
   
   <div class="form-group">
  {!! Form::label('caract_gamme', 'Choisissez une caractéristique de gamme : ') !!}
         <select name="caract_gamme" id="caract_gamme" class="form-control">
      @foreach($caract_gamme as $uncaract_gamme)
   
        <option value="{{$uncaract_gamme->Id_CaracteristiquesGamme}}">{{$uncaract_gamme->Nom_Caracteristiques_Gamme}}</option>
      @endforeach
    </select>
</div>
        {!! Form::submit('Envoyer !') !!}
  
    {!! Form::close() !!}
</div>

@endsection