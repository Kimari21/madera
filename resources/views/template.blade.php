<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>@yield('titre')</title>
 <!--     <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
 

Latest compiled and minified CSS
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

 Latest compiled and minified JavaScript 
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<meta name="viewport" content="width=device-width, initial-scale=1"> -->



      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  
</head>
<body>


      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
     
      
  <nav>
    <div class="nav-wrapper" style="background-color:#4db6ac;">
      <a href="{!! url('') !!}" class="brand-logo">Accueil</a>
      
      <ul class="right hide-on-med-and-down">
<li><a href="{!! url('list_devi') !!}">Devis </a></li>
        <li><a href="{!! url('list_client') !!}">Clients</a></li>
        <li><a href="{!! url('list_module') !!}">Module </a></li>
               <li><a href="{!! url('list_gamme') !!}">Gamme </a></li>
        <li><a href="{!! url('faq') !!}">FAQ </a></li>
      </ul>
        
        
      <ul class="side-nav" id="slide-out">
<li><a href="{!! url('list_devi') !!}">Devis </a></li>
        <li><a href="{!! url('list_client') !!}">Clients</a></li>
        <li><a href="{!! url('list_module') !!}">Module </a></li>
               <li><a href="{!! url('list_gamme') !!}">Gamme </a></li>
        <li><a href="{!! url('faq') !!}">FAQ </a></li>
      </ul>
      <a href="#" data-activates="slide-out" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
</nav>


<script type="text/javascript">
 $(document).ready(function(){

    //collpase for mobile button
    $(".button-collapse").sideNav();

});

  
        
</script>        

  

	@yield('contenu')
</body>
</html>