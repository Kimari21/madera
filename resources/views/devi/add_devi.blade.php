@extends('template')

@section('titre')
    Devi
@endsection

@section('contenu')

 <div class='col-md-4 col-md-offset-4'>
{!! Form::open(['url' => 'add_devi]) !!}
 


   

   <div class="form-group">
              {!! Form::label('px_total', 'Entrez un prix : ') !!}

        {!! Form::number('px_total') !!}
</div>

      <div class="form-group">
    {!! Form::label('RemiseCommerciale_Devis', 'Remise commercial : ') !!}

        {!! Form::number('RemiseCommerciale_Devis') !!}
</div>  
   <div class="form-group">
	{!! Form::label('Id_Clients', 'Choisissez un client : ') !!}
    		 <select name="id_client" id="id_client" class="form-control">
    	@foreach($client as $unclient)
   
      	<option value="{{$unclient->Id_Clients}}">{{$unclient->Nom_Clients}}</option>
    	@endforeach
    </select>
</div>
        {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
</div>
@endsection