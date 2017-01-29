  @extends('template')

@section('titre')
    Home
@endsection

@section('contenu')


  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>

<div class='col-md-4 col-md-offset-4'>
{!! Form::open(['url' => 'devi_client']) !!}
 <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Gamme</a></li>
    <li><a href="#tabs-2">Module 1</a></li>
    <li><a href="#tabs-3">Module 2</a></li>
     <li><a href="#tabs-4">Module 3</a></li>
      <li><a href="#tabs-5">Module 4</a></li>
       <li><a href="#tabs-6">Module 5</a></li>
  </ul>
  <div id="tabs-1">
<div class="form-group">
	{!! Form::label('gamme', 'Choisissez une gamme : ') !!}
    		 <select name="caract_gamme" id="caract_gamme" class="form-control">
    	@foreach($gamme as $unegamme)
   
      	<option value="{{$unegamme->Id_Gamme}}">{{$unegamme->Nom_Gamme}}</option>
    	@endforeach
    </select>
</div>

  </div>


  <div id="tabs-2">
     <div class="form-group">
	{!! Form::label('module_1', 'Choisissez un module : ') !!}
    		 <select name="module_1" id="module_1" class="form-control">
    	@foreach($module as $unmodule)
   
      	<option value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}</option>
    	@endforeach
    </select>
</div>

    </div>



  <div id="tabs-3">
      <div class="form-group">
	{!! Form::label('module_2', 'Choisissez un module : ') !!}
    		 <select name="module_2" id="module_2" class="form-control">
    	@foreach($module as $unmodule)
   
      	<option value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}</option>
    	@endforeach
    </select>
</div>


    </div>


    <div id="tabs-4">
    <div class="form-group">
	{!! Form::label('module_3', 'Choisissez un module : ') !!}
    		 <select name="module_3" id="module_3" class="form-control">
    	@foreach($module as $unmodule)
   
      	<option value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}</option>
    	@endforeach
    </select>
</div>

  </div>


  <div id="tabs-5">
      <div class="form-group">
	{!! Form::label('module_4', 'Choisissez un module : ') !!}
    		 <select name="module_4" id="module_4" class="form-control">
    	@foreach($module as $unmodule)
   
      	<option value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}</option>
    	@endforeach
    </select>
</div>

    </div>



  <div id="tabs-6">
    <div class="form-group">
	{!! Form::label('module_5', 'Choisissez un module : ') !!}
    		 <select name="module_5" id="module_5" class="form-control">
    	@foreach($module as $unmodule)
   
      	<option value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}</option>
    	@endforeach
    </select>
</div>


    </div>
</div>
 {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
</div>
  

@endsection