@extends('template')

@section('titre')
    Module
@endsection

@section('contenu')

 <div class='col-md-4 col-md-offset-4'>
{!! Form::open(['url' => 'add_module']) !!}
 
     <div class="form-group">
    {!! Form::label('Nom_Module', 'Entrez le nom du module : ') !!}

        {!! Form::text('Nom_Module') !!}
</div>

   

   <div class="form-group">
        {!! Form::label('prop_module', 'Entrez le propriétaire de la module : ') !!}

        {!! Form::text('prop_module') !!}
</div>
   <div class="form-group">
        {!! Form::label('Nature_Module', 'Entrez une nature de module: ') !!}

        {!! Form::text('Nature_Module') !!}
        </div>
   
 <div class="form-group">
        {!! Form::label('Caracteristique_Module', 'Entrez une caractéristique de module : ') !!}

        {!! Form::text('Caracteristique_Module') !!}
</div>
   <div class="form-group">
        {!! Form::label('Unite_Module', 'Entrez une nature de module : ') !!}

        {!! Form::text('Unite_Module') !!}
        </div>
   
   <div class="form-group">
        {!! Form::label('Quantite_module', 'Quantité module : ') !!}

        {!! Form::number('Quantite_module') !!}
</div>
   <div class="form-group">
        {!! Form::label('Proprietaire_Module', 'Propriétaire module : ') !!}

        {!! Form::text('Proprietaire_Module') !!}
        </div>
   
 <div class="form-group">
        {!! Form::label('Hauteur_Module', 'Hauteur module : ') !!}

        {!! Form::number('Hauteur_Module') !!}
</div>
   <div class="form-group">
        {!! Form::label('Longueur_Module', 'Longueur module : ') !!}

        {!! Form::number('Longueur_Module') !!}
        </div>
   
 <div class="form-group">
        {!! Form::label('prop_module', 'Entrez le propriétaire de la module : ') !!}

        {!! Form::text('prop_module') !!}
</div>
   <div class="form-group">
        {!! Form::label('AngleEntrant_Module', 'Angle entrant : ') !!}

        {!! Form::number('AngleEntrant_Module') !!}
        </div>
   
   <div class="form-group">
        {!! Form::label('AngleSortant_Module', 'Angle sortant : ') !!}

        {!! Form::number('AngleSortant_Module') !!}
</div>
   <div class="form-group">
        {!! Form::label('number', 'Entrez un prix : ') !!}

        {!! Form::number('prix_module') !!}
        </div>
   
 <div class="form-group">
        {!! Form::label('Epaisseur_Module', 'Epaisseur module : ') !!}

        {!! Form::number('Epaisseur_Module') !!}
</div>


   <div class="form-group">
	{!! Form::label('Id_Gamme', 'Gamme : ') !!}
    		 <select name="Id_Gamme" id="Id_Gamme" class="form-control">
    	@foreach($gamme as $unegamme)
   
      	<option value="{{$unegamme->Id_Gamme}}">{{$unegamme->Id_Gamme}}</option>
    	@endforeach
    </select>
</div>
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
</div>
@endsection