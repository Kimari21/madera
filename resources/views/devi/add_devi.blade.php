@extends('template')

@section('titre')
    Devi
@endsection

@section('contenu')



 <div class='col-md-4 col-md-offset-4'>

 

    <form method="POST" action="{!! url('add_devi') !!}" accept-charset="UTF-8">

       <input type="hidden" name="_token" value="{{ csrf_token() }}">
 <div class="form-group">
        <label for="px_total">Entrez un prix : </label>    

        <input name="px_total" type="number" id="px_total">    
</div>

 <div class="form-group">
        <label for="remise_commercial">Remise commercial : </label>    

        <input name="remise_commercial" type="number" id="remise_commercial">    
</div>


       


   
   <div class="form-group">
	 <label for="Id_Clients">Choisir un client : </label>   
    		 <select name="id_client" id="id_client" class="form-control">
    	@foreach($client as $unclient)
   
      	<option value="{{$unclient->Id_Clients}}">{{$unclient->Nom_Clients}}</option>
    	@endforeach
    </select>
</div>
        <input type="submit" value="Envoyer !">  
     </form>   
</div>
@endsection