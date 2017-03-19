@extends('template')

@section('titre')
   Editer Module
@endsection

@section('contenu')
<div class="row">
 <div class='col s5  offset-s4'>

{!! Form::open(['url' => 'valid_edit_module']) !!}
 {!! Form::hidden('Id_Module', $module->Id_Module) !!}
 <div class="row">
     <div class="input-field col s4">
    {!! Form::label('Nom_Module', 'Entrez le nom du module : ') !!}
</div></div>
      <div class="row">
     <div class="input-field col s4">


        {!! Form::text('Nom_Module', $module->Nom_Module) !!}
</div>
</div>
   

<div class="row">
   <div class="input-field col s4">
  {!! Form::label('Nature_Module', 'Entrez une nature de module: ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
      

        {!! Form::text('Nature_Module', $module->Nature_Module) !!}
        </div></div>
   
   <div class="row">
 <div class="input-field col s4">
    {!! Form::label('Caracteristique_Module', 'Entrez une caractéristique de module : ') !!}
</div></div>
  <div class="row">
     <div class="input-field col s4">
    

        {!! Form::text('Caracteristique_Module', $module->Caracteristique_Module) !!}
</div></div>
<div class="row">
   <div class="input-field col s4">
    {!! Form::label('Unite_Module', 'Entrez une nature de module : ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
    

        {!! Form::text('Unite_Module', $module->Unite_Module) !!}
        </div></div>
   
   <div class="row">
   <div class="input-field col s4">
  {!! Form::label('Quantite_module', 'Quantité module : ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
      

        {!! Form::number('Quantite_module', $module->Quantite_Module) !!}
</div></div>
<div class="row">
   <div class="input-field col s4">
  {!! Form::label('Proprietaire_Module', 'Propriétaire module : ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
      

        {!! Form::text('Proprietaire_Module', $module->Proprietaire_Module) !!}
        </div></div>
   
   <div class="row">
 <div class="input-field col s4">
    {!! Form::label('Hauteur_Module', 'Hauteur module : ') !!}
</div></div>
  <div class="row">
     <div class="input-field col s4">
    

        {!! Form::number('Hauteur_Module', $module->Hauteur_Module) !!}
</div>
</div>
<div class="row">
   <div class="input-field col s4">
   {!! Form::label('Longueur_Module', 'Longueur module : ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
     

        {!! Form::number('Longueur_Module', $module->Longueur_Module) !!}
        </div></div>
   
<div class="row">
   <div class="input-field col s4">
    {!! Form::label('AngleEntrant_Module', 'Angle entrant : ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
    

        {!! Form::number('AngleEntrant_Module', $module->AngleEntrant_Module) !!}
        </div></div>
   
   <div class="row">
   <div class="input-field col s4">
     {!! Form::label('AngleSortant_Module', 'Angle sortant : ') !!}
</div></div>
    <div class="row">
     <div class="input-field col s4">
   

        {!! Form::number('AngleSortant_Module', $module->AngleSortant_Module) !!}
</div></div>

   <div class="row">
 <div class="input-field col s4">
 {!! Form::label('Epaisseur_Module', 'Epaisseur module : ') !!}
 </div></div>
  <div class="row">
     <div class="input-field col s4">
       

        {!! Form::number('Epaisseur_Module', $module->Epaisseur_Module) !!}
</div></div>

    <div class="row">
     <div class="input-field col s4">
  {!! Form::label('Id_Gamme', 'Gamme : ') !!}
  </div>
</div>
<div class="row">
   <div class="input-field col s4">
         <select name="Id_Gamme" id="Id_Gamme" class="browser-default" >
      @foreach($gamme as $unegamme)
          @if($module->Id_Gamme==$unegamme->Id_Gamme)
         <option value="{{$unegamme->Id_Gamme}}" selected>{{$unegamme->Id_Gamme}}</option>
        @else
        <option value="{{$unegamme->Id_Gamme}}">{{$unegamme->Id_Gamme}}</option>
        @endif
       
      @endforeach
    </select>
</div></div>
   
<br>
<br>
 
<div class="row">
        {!! Form::submit('Envoyer !', array('class'=> 'btn')) !!}
    {!! Form::close() !!}
</div></div>

@endsection