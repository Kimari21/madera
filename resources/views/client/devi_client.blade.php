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

<div class="row">
<div class='col s4  offset-s4'>
{!! Form::open(['url' => 'devi_client', 'id' => 'form']) !!}

 <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Gamme</a></li>
    <li><a href="#tabs-2">Toit</a></li>
    <li><a href="#tabs-3">Mur</a></li>
     <li><a href="#tabs-4">Sol</a></li>
      <li><a href="#tabs-5">Terrasse</a></li>
  
  </ul>
  <div id="tabs-1">
<div class="form-group">
	{!! Form::label('gamme', 'Choisissez une gamme : ') !!}
    		 <select name="gamme" id="gamme" class="form-control gamme">
          <option></option>
    	@foreach($gamme as $unegamme)
        
      	<option value="{{$unegamme->Id_Gamme}}">{{$unegamme->Nom_Gamme}}</option>
    	@endforeach
    </select>
</div>

  </div>


  <div id="tabs-2">
     <div class="form-group">
	{!! Form::label('module_1', 'Choisissez un module : ') !!}
    		 <select name="module_1" id="module_1" class="form-control module">
          <option></option>
    	@foreach($module as $unmodule)
    @if($unmodule->Nature_Module == "Toit")
      	<option class="gamme-{{$unmodule->Id_Gamme}}" value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}   -  {{$unmodule->Prix_Module}}  euros</option>
        @endif
    	@endforeach
    </select>
</div>

    </div>



  <div id="tabs-3">
      <div class="form-group">
	{!! Form::label('module_2', 'Choisissez un module : ') !!}
    		 <select name="module_2" id="module_2" class="form-control module">
    	<option></option>
      @foreach($module as $unmodule)
       @if($unmodule->Nature_Module == "Mur")

        <option class="gamme-{{$unmodule->Id_Gamme}}" id="{{$unmodule->Id_Gamme}}" value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}   -  {{$unmodule->Prix_Module}} euros </option>
        @endif
    	@endforeach
    </select>
</div>


    </div>


    <div id="tabs-4">
    <div class="form-group">
	{!! Form::label('module_3', 'Choisissez un module : ') !!}
    		 <select name="module_3" id="module_3" class="form-control module">
          <option></option>
    	@foreach($module as $unmodule)
     @if($unmodule->Nature_Module == "Sol")
        <option class="gamme-{{$unmodule->Id_Gamme}}" id="{{$unmodule->Id_Gamme}}" value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}   -  {{$unmodule->Prix_Module}} euros </option>
        @endif
    	@endforeach
    </select>
</div>

  </div>


  <div id="tabs-5">
      <div class="form-group">
	{!! Form::label('module_4', 'Choisissez un module : ') !!}
  
    		 <select name="module_4" id="module_4" class="form-control module">
    	<option selected="selected"></option>
      @foreach($module as $unmodule)
     @if($unmodule->Nature_Module == "Terrasse")
        <option class="gamme-{{$unmodule->Id_Gamme}}" id="{{$unmodule->Id_Gamme}}" value="{{$unmodule->Id_Module}}">{{$unmodule->Nom_Module}}   -  {{$unmodule->Prix_Module}} euros </option>
        @endif
    	@endforeach
    </select>
</div>

    </div>


</div>
 {!! Form::submit('Envoyer !') !!}
    {!! Form::close() !!}
</div>
  </div>
<script>
  
    //$("option").filter(function( index ) {$( this ).attr( "id" ) === $('.gamme').value;}).style.display = 'none';
    var gamme = 1;
    $('#gamme').change(function(e){
      $('option.gamme-'+gamme).hide();
      gamme = $(this).val();
      $('option.gamme-'+gamme).show()
    });
  
</script>
@endsection