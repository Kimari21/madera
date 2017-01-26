@extends('template')

@section('titre')
    Editer Devis
@endsection

@section('contenu')

  
 <div class='col-md-4 col-md-offset-4'>

{!! Form::open(['url' => 'valid_edit_devi']) !!}

{!! Form::hidden('Id_Devis', $devi->Id_Devis) !!}
 <div class="form-group">
    {!! Form::label('PrixTotal_Devis', 'Entrez le prix total : ') !!}

        {!! Form::number('PrixTotal_Devis',$devi->PrixTotal_Devis) !!}
</div>

   

   <div class="form-group">
        {!! Form::label('RemiseCommerciale_Devis', 'Entrez la remise commerciale : ') !!}

        {!! Form::number('RemiseCommerciale_Devis', $devi->RemiseCommerciale_Devis) !!}
</div>
    <div class="form-group">
  {!! Form::label('Id_Clients', 'Choisissez le client : ') !!}
         <select name="Id_Clients" id="Id_Clients" class="form-control">
      @foreach($client as $unclient)
          @if($devi->Id_Clients==$unclient->Id_Clients)
        <option value="{{$unclient->Id_Clients}}" selected>{{$unclient->Nom_Clients}}</option>
        @else
        <option value="{{$unclient->Id_Clients}}">{{$unclient->Nom_Clients}}</option>
        @endif
      @endforeach
    </select>
</div>

   <div class="form-group">
  {!! Form::label('Id_Etat', 'Choisissez un etat : ') !!}
         <select name="Id_Etat" id="Id_Etat" class="form-control">
      @foreach($etat as $unetat)
          @if($devi->Id_Etat==$unetat->Id_Etat)
        <option value="{{$unetat->Id_Etat}}" selected>{{$unetat->Description_Etat}}</option>
        @else
        <option value="{{$unetat->Id_Etat}}">{{$unetat->Description_Etat}}</option>
        @endif
      @endforeach
    </select>
</div>
   
   <div class="form-group">
  {!! Form::label('Id_Statut', 'Choisissez un statut : ') !!}
         <select name="Id_Statut" id="Id_Statut" class="form-control">
      @foreach($statut as $unstatut)
          @if($devi->Id_Statut==$unstatut->Id_Statut)
        <option value="{{$unstatut->Id_Statut}}" selected>{{$unstatut->Description_Statut}}</option>
        @else
        <option value="{{$unstatut->Id_Statut}}">{{$unstatut->Description_Statut}}</option>
        @endif
      @endforeach
    </select>
</div>
        {!! Form::submit('Envoyer !') !!}
  
    {!! Form::close() !!}
</div>

@endsection