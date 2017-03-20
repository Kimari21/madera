@extends('template')

@section('titre')
    Editer Devis
@endsection

@section('contenu')

  <div class="row">
 <div class='col s4  offset-s4'>

 
{!! Form::open(['url' => 'valid_edit_devi']) !!}

{!! Form::hidden('Id_Devis', $devi->Id_Devis) !!}
 <div class="form-group">
    {!! Form::label('PrixTotal_Devis', 'Entrez le prix total : ') !!}

        {!! Form::number('PrixTotal_Devis',$devi->PrixTotal_Devis,'',['required']) !!}
</div>

   

   <div class="form-group">
        {!! Form::label('RemiseCommerciale_Devis', 'Entrez la remise commerciale : ') !!}

        {!! Form::number('RemiseCommerciale_Devis', $devi->RemiseCommerciale_Devis,'',['required']) !!}
</div>

<div class="row">
   <div class="input-field col s4">
  {!! Form::label('Id_Clients', 'Choisissez le client : ') !!}
  </div>
</div>
<br>
<div class="row">
   <div class="input-field col s4">
 
         <select name="Id_Clients" id="Id_Clients" class="browser-default" required>
      @foreach($client as $unclient)
          @if($devi->Id_Clients==$unclient->Id_Clients)
        <option value="{{$unclient->Id_Clients}}" selected>{{$unclient->Nom_Clients}}</option>
        @else
        <option value="{{$unclient->Id_Clients}}">{{$unclient->Nom_Clients}}</option>
        @endif
      @endforeach
    </select>
</div></div>


<div class="row">
   <div class="input-field col s4">
  {!! Form::label('Id_Etat', 'Choisissez un etat : ') !!}
  </div>
</div>
<br>
<div class="row">
   <div class="input-field col s4">

  
         <select name="Id_Etat" id="Id_Etat" class="browser-default" required>
      @foreach($etat as $unetat)
          @if($devi->Id_Etat==$unetat->Id_Etat)
        <option value="{{$unetat->Id_Etat}}" selected>{{$unetat->Description_Etat}}</option>
        @else
        <option value="{{$unetat->Id_Etat}}">{{$unetat->Description_Etat}}</option>
        @endif
      @endforeach
    </select>
</div>
   </div>

   <div class="row">
   <div class="input-field col s4">
  {!! Form::label('Id_Statut', 'Choisissez un statut : ') !!}
  </div>
</div>
<br>
<div class="row">
   <div class="input-field col s4">

 
         <select name="Id_Statut" id="Id_Statut" class="browser-default" required>
      @foreach($statut as $unstatut)
          @if($devi->Id_Statut==$unstatut->Id_Statut)
        <option value="{{$unstatut->Id_Statut}}" selected>{{$unstatut->Description_Statut}}</option>
        @else
        <option value="{{$unstatut->Id_Statut}}">{{$unstatut->Description_Statut}}</option>
        @endif
      @endforeach
    </select>
</div></div>
        {!! Form::submit('Envoyer !', array('class'=> 'btn')) !!}
  
    {!! Form::close() !!}
</div>
</div>
@endsection