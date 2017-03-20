@extends('template')

@section('titre')
    Devi
@endsection

@section('contenu')


<div class="row">
 <div class='col s4  offset-s4'>

 

    <form method="POST" action="{!! url('add_devi') !!}" accept-charset="UTF-8">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
        <label for="px_total">Entrez un prix : </label>    

        <input name="px_total" type="number" id="px_total" required>    
</div>

 <div class="form-group">
        <label for="remise_commercial">Remise commercial : </label>    

        <input name="remise_commercial" type="number" id="remise_commercial" required>    
</div>
</div>

       


   <div class="row">
   <div class="input-field col s4 offset-s4">
 <label for="Id_Clients">Choisir un client : </label>    
  </div>
</div>
<br>
<div class="row">
   <div class="input-field col s4 offset-s4">
  
    		 <select name="id_client" id="id_client" class="browser-default" required>
    	@foreach($client as $unclient)
   
      	<option value="{{$unclient->Id_Clients}}">{{$unclient->Nom_Clients}}</option>
    	@endforeach
    </select>
</div></div>
<div class="row">
   <div class="input-field col s4 offset-s4">
        <input type="submit" class="btn" value="Envoyer !">  
     </div></div></form>   
</div>
@endsection