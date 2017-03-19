@extends('template')

@section('titre')
    Module
@endsection

@section('contenu')

<script type="text/javascript">

  $(document).ready(function() {
    $('select').material_select();
  });
            
</script>
<div class="row">
 <div class='col s5  offset-s4'>

{!! Form::open(['url' => 'add_module']) !!}
 <div class="row">
     <div class="input-field col s4">
{!! Form::label('Nom_Module', 'Entrez le nom du module : ') !!}
</div>
</div>

       <div class="row">
   <div class="input-field col s4">
    

        {!! Form::text('Nom_Module') !!}
</div></div>

   

 <div class="row">
   <div class="input-field col s4">
  {!! Form::label('Nature_Module', 'Entrez une nature de module: ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
      

        {!! Form::text('Nature_Module') !!}
        </div>
   </div>
   <div class="row">
 <div class="input-field col s4">
{!! Form::label('Caracteristique_Module', 'Entrez une caractéristique : ') !!}
</div>
</div>

   <div class="row">
   <div class="input-field col s4">
        

        {!! Form::text('Caracteristique_Module') !!}
</div></div>
<div class="row">
   <div class="input-field col s4">
{!! Form::label('Unite_Module', 'Entrez une unité de module : ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
        

        {!! Form::text('Unite_Module') !!}
        </div></div>
   
   <div class="row">
   <div class="input-field col s4">
 {!! Form::label('Quantite_module', 'Quantité module : ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
       

        {!! Form::number('Quantite_module') !!}
</div></div>

<div class="row">
   <div class="input-field col s4">
{!! Form::label('Proprietaire_Module', 'Propriétaire module : ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
        

        {!! Form::text('Proprietaire_Module') !!}
        </div></div>
   
   <div class="row">
 <div class="input-field col s4">
  {!! Form::label('Hauteur_Module', 'Hauteur module : ') !!}
</div>
</div>

   <div class="row">
   <div class="input-field col s4">
      

        {!! Form::number('Hauteur_Module') !!}
</div></div> 

<div class="row">
   <div class="input-field col s4">
    {!! Form::label('Longueur_Module', 'Longueur module : ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
    

        {!! Form::number('Longueur_Module') !!}
        </div></div>
   

<div class="row">
   <div class="input-field col s4">
  {!! Form::label('AngleEntrant_Module', 'Angle entrant : ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
      

        {!! Form::number('AngleEntrant_Module') !!}
        </div></div>
     <div class="row">
   <div class="input-field col s4">
   {!! Form::label('AngleSortant_Module', 'Angle sortant : ') !!}
</div>
</div>

     <div class="row">
   <div class="input-field col s4">
     

        {!! Form::number('AngleSortant_Module') !!}
</div></div>

   <div class="row">
 <div class="input-field col s4">
  {!! Form::label('Epaisseur_Module', 'Epaisseur module : ') !!}

</div>
</div>

   <div class="row">
   <div class="input-field col s4">
      
        {!! Form::number('Epaisseur_Module') !!}
</div>
</div>



     <div class="row">
   <div class="input-field col s4">
	{!! Form::label('Id_Gamme', 'Gamme : ') !!}
  </div>
</div>
<div class="row">
   <div class="input-field col s4">
    		 <select name="Id_Gamme" id="Id_Gamme" class="browser-default" >
    	@foreach($gamme as $unegamme)
   
      	<option value="{{$unegamme->Id_Gamme}}">{{$unegamme->Id_Gamme}}</option>
    	@endforeach
    </select>
</div></div>
<br>
<br>
 
<div class="row">
        {!! Form::submit('Envoyer !', array('class'=> 'btn')) !!}
    {!! Form::close() !!}
</div></div>
</div>
@endsection