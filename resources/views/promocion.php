<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEo4khsOygdOzs1wsVtcz1t6_uPd0CAs0"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">

        <script   src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.js"></script>
</head>
<body>
<style type="text/css">
#input{
		top:20px;
	}


#nav li {
	float: left;
}
#nav li a {
	display: block;
	color: white;
	text-align: center;
	padding: 20px 16px;
	text-decoration: none;
}
#myCarousel {
	width: 100%;
	height: 100%;
}
#contenedor {
	padding-left: 1cm;
	padding-right: 1cm;
}
#calendarios {
	margin-top: 20px;

}
#card2 {
	box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	margin-bottom: 15px;
	border: #E6E6E6 1px solid;
	margin-left: 1cm;
}
#carrusel {
	padding-top: 1cm;
}
#tabs {
	padding-top: 1cm;
}
#cantactanos {
	background-color: black;
	color: white;
}
.nav {
margin-top: 10px;
font-family: 'Lobster';
font-size: 15px;
margin-left: 20px;
box-shadow:none;

}
.navbar-header button {
	background-color: #d9d9d9;
}
.icon-bar {
	background-color: white;
}
#contacto {
	margin-top : 4cm;
	display: inline-block;
    margin: 1em;
    
    box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);
}
#imagen {
	border-right: #bfbfbf 1px solid;
}
#descripcion {
	border-right: #bfbfbf 1px solid;
}
button.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
}

/* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
button.accordion.active, button.accordion:hover {
    background-color: #ddd;
}

/* Style the accordion panel. Note: hidden by default */
div.panel {
    padding: 0 18px;
    background-color: white;
    display: none;
}

/* The "show" class is added to the accordion panel when the user clicks on one of the buttons. This will show the panel content */
div.panel.show {
    display: block;
}
</style>
<div class="row" id="cantactanos">
	<center><p>(55) 2454-9691  Atenciòn al cliente</p></center>
	<center><a><span class="glyphicon glyphicon-user"></span>Terminos y Condiciones</a></center>
</div>
<div class="row">
	<div class="col-xs-12 col-md-12">
		<nav class="navbar ">
  <div class="container-fluid">
    <div class="navbar-header" >
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar" >
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a><img src="http://casasvacacionales.com.mx/images/brand/logo-200x70.png"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li><a href="/">Inicio</a></li>
        <li class="dropdown">
       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">Estados
       		<span class="caret"></span></a>
	        <ul class="dropdown-menu" id="estado">
	        </ul>
      	</li>
        <li class="dropdown">
       		<a class="dropdown-toggle" data-toggle="dropdown" href="#">ciudades
       		<span class="caret"></span></a>
	        <ul class="dropdown-menu" id="ciudad">
	        </ul>
      	</li>
        <li><a href="#">Ver casas Disponibles</a></li>
        <li><a href="#">Promociones</a></li>
        <li><a href="#">Casas Nuevas</a></li>
        <li><a href="#">Busqueda Avanzada</a></li>
        <li><a href="#">Ver tags</a></li>
        <li><a href="#">Mis casas</a></li>
      </ul>
      
    </div>
  </div>
</nav>
			
		</div>
	</div>
	<br>
<div class="row" id="contenedor">
	<div class="col-md-12">
		<div class="row" style="background-color: #F5F5F5">
			
		<!--<div class="row" id="carrusel" style="background-color: #F5F5F5;">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
    
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      
				    </ol>

    
    			<div class="carousel-inner" role="listbox">
				     	<div class="item active">
				        	<img src="http://casasvacacionales.com.mx/images/sliders/dafnep-morelos.jpg" alt="Chania" width="100%" height="100%">
				     	</div>

				      <div class="item">
				        <img src="http://casasvacacionales.com.mx/images/sliders/antonietap-morelos.jpg" alt="Chania" width="100%" height="100%">
				      </div>
    
				      <div class="item">
				        <img src="http://casasvacacionales.com.mx/images/sliders/ashleyp-morelos.jpg" alt="Flower" width="100%" height="100%">
				      </div>

				      
				    </div>

				 
				    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
				      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				      <span class="sr-only">Previous</span>
				    </a>
				    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
				      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				      <span class="sr-only">Next</span>
				    </a>
				  </div>
			</div>
		</div> -->
		<!--<div class="row" id="tabs">
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="estados">
        
          
        </ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" >
				<div class="col-md-6">
				<ul class="list-group" id="ciudades">
				    <!--<li class="list-group-item">Cuernavaca<span class="badge">12</span></li>
				    <li class="list-group-item"><a  href="/Tequesquitengo" onclick="teques()">Tequesquitengo </a><span class="badge">5</span></li>
				    <li class="list-group-item">Cocoyoc<span class="badge">3</span></li>
				    <li class="list-group-item">Tepoztlan<span class="badge">3</span></li>
				    <li class="list-group-item">Cuautla<span class="badge">3</span></li>
				    <li class="list-group-item">Temixco<span class="badge">3</span></li>
				    <li class="list-group-item">Xochitepec<span class="badge">3</span></li>-->
  				<!--</ul>
  				</div>
  				<div class="col-md-6">
				<ul class="list-group">
				   <!-- <li class="list-group-item">Tlayacapan<span class="badge">12</span></li>
				    <li class="list-group-item">Tezoyuca<span class="badge">5</span></li>
				    <li class="list-group-item">Alpuyeca<span class="badge">3</span></li>
				    <li class="list-group-item">Atotonilco<span class="badge">3</span></li>-->
				   
  				<!--</ul>
  				</div>
			</div>
		</div>
	-->
		<div class="row">
		<div class="col-md-3">
			<ul class="nav nav-pills nav-stacked" id="estados">
			    
			    	
			</ul>
		</div>
		<div class="col-md-8">
		<center><h1>Todas las Promociones que tenemos: </h1></center>
			<div id="promociones"></div>
		</div>
		</div>
	</div>
	<div class="row">
	<div class="col-xs-12 col-md-12">
	<h1 style="font-family: 'Lobster' ">Oficinas para infromes y Contrataciones.</h1>
		<div class="col-md-4">
		<div id="contacto">
			<div class="col-md-12" id="contenedor2"><div class="card">
			<div id="mapa" style="width: 100%;height: 300px;box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);"></div>
			<div class="card-block"><h4 class="card-title">World Trade Center</h4>
				<strong><p class="card-text">Horarios : Lunes a Viernes de 09:00 a 14:00 hrs y 15:00 a 19:00 hrs.</p></strong><p>Telefonos :  2454-9691 <br> 9000-5757</p><p>Montecito No.38 Piso 16 oficina 28, World Trade Center Ciudad de México, Col. Nápoles. Del. Benito Juarez, C.P. 03810 Ciudad de México</p>
				
			</div>
			</div>
			</div>
		</div>
		</div>
		<div class="col-md-4">
		<div id="contacto">
			<div class="col-md-12" id="contenedor2"><div class="card">
			<div id="mapa2" style="width: 100%;height: 300px;box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);"></div>
			<div class="card-block"><h4 class="card-title">Perisur</h4>
				<strong><p class="card-text">Horarios : Lunes a Viernes de 09:00 a 14:00 hrs y 15:00 a 19:00 hrs.</p></strong><p>Telefonos :  2454-9691 <br> 9000-5757</p><p>Sur 5264 Piso, Anillo Perif. Blvd. Adolfo López Mateos 1, Pedregal de Carrasco, 04700 Ciudad de México, D.F.</p>
				
			</div>
			</div>
			</div>
		</div>
		</div>
		<div class="col-md-4">
		<div id="contacto">
			<div class="col-md-12" id="contenedor2"><div class="card">
			<div id="mapa3" style="width: 100%;height: 300px;box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);"></div>
			<div class="card-block"><h4 class="card-title">Santa Fe</h4>
				<strong><p class="card-text">Horarios : Lunes a Viernes de 09:00 a 14:00 hrs y 15:00 a 19:00 hrs.</p></strong><p>Telefonos :  2454-9691 <br> 9000-5757</p><p>Piso 4 Oficina 4B, Juan Salvador Agraz 97, Santa Fe, Las Tinajas, 05300 Ciudad de México, D.F.</p>
				
			</div>
			</div>
			</div>
		</div>
		</div>
		
	</div>
</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		var map = new GMaps({
            el: '#mapa',
            lat: 19.393664,
            lng: -99.1745978,
            zoom: 13
          });
		map.addMarker({
			lat: 19.393664,
            lng: -99.1745978,
            title: 'World Trace Center',
            infoWindow:{
            	
            }
		});
		var map2 = new GMaps({
            el: '#mapa2',
            lat: 19.30315,
            lng: -99.1759637,
            zoom: 13
          });
		map2.addMarker({
			lat: 19.30315,
            lng: -99.1759637,
            title: 'Perisur',
            infoWindow:{
            	
            }
           });
            var map3 = new GMaps({
            el: '#mapa3',
            lat: 19.358124,
            lng: -99.2802177,
            zoom: 13
          });
		map3.addMarker({
			lat: 19.358124,
            lng: -99.2802177,
            title: 'Santa Fe',
            infoWindow:{
            	
            }
		});
$('#datepicker').datepicker();
$('#datepicker2').datepicker();

 	$.ajax({
 		url : '/estados',
 		dataType: 'JSON',
 		success: function(data){
 			var lista = '';
 			var menu = '';
              $.each(data, function(index, value){
              	lista = lista + '<button class="accordion" onclick="ciudad('+value.idestado+')">'+value.nombre+'</button><div class="panel"></div>'

		 		//lista = lista + '<li><a id="'+value.nombre+'"  onClick="ciudad(this)">'+value.nombre+'</a></li>'
		 		menu = menu + '<li><a href="/'+value.nombre+'">'+value.nombre+'</a></li>'
		
		 	});	
		 	$('#estados').html(lista); 
		 	$('#estado').html(menu);

 		
 	}

 	});
 	$.ajax({
 		url: '/getPromo',
 		dataType: 'JSON',
 		success: function(data){
 			lista = '';
 			$.each(data, function(index,value){
 				if(value.alberca == 1){
		 			$alberca = '<span class="glyphicon glyphicon-ok"></span>';
		 		}else {
		 			$alberca = '<span class="glyphicon glyphicon-remove"></span>';
		 		}
		 		if(value.caldera == 1) {
		 			$caldera = '<span class="glyphicon glyphicon-fire"></span>';
		 		}else {
		 			$caldera = '<span class="glyphicon glyphicon-remove"></span>';
		 		}
		 		if(value.solar == 1) {
		 			$solar = '<span class="glyphicon glyphicon-asterisk"></span>';
		 		}else {
		 			$solar = '<span class="glyphicon glyphicon-remove"></span>';
		 		}
		 		if(value.bomba == 1){
		 			$bomba = '<span class="glyphicon glyphicon-tint"></span>';
		 		}else {
		 			$bomba = '<span class="glyphicon glyphicon-remove"></span>';
		 		}

		 		lista = lista + '<div class="col-md-12" id="card2"><div class="col-md-3"><div id="imagen"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100%;height:150px;margin-top:15px;margin-rigth:15px;"></div></div><div class="col-md-6" id="descripcion"><div class="col-md-12"><h3>'+value.nombre+'</h3></div><div class="row"><div class="col-md-4"><p>Capacidad :'+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span></p><p>Recamaras:  '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p><p>Calefacci&oacuten; Solar :'+$solar+'</div><div class="col-md-4"><p>Nº Baños : '+value.banos_num+'<span class="glyphicon glyphicon-tree-deciduous"></span></p><p>Alberca : '+$alberca+'</p><p>Bomba : '+$bomba+'</p></div><div class="col-md-4"><p>Caldera : '+$caldera+'</p></div></div></div><div class="col-md-3"><br><p>Promocion :'+value.descripcion+'</p><a href="/" target="_blank" class="btn btn-success">Ver casa</a></div></div>'
 				
		 		
 			});
 			$('#promociones').html(lista);		
 		}
 	});
 	
});
	
		 		//$.ajax({
		 			//url: '/ciudades',
		 			/*data: ({
		 				ciudad: $('#ciudades li a').val()
		 			}),
		 			dataType: 'JSON',
		 			success : function(data){
		 				var ciudades = '';
		 				alert(data);
		 			}
		 		});*/
		 	//});
		 	/*$.ajax({
		 		url: '/TodasCiudades',
		 		dataType: 'JSON',
		 		success: function(data){
		 			lista = '';
		 			$.each(data, function(index,value){
		 				lista = lista + '<li class="list-group-item"><a href="/'+value.nombre+'">'+value.nombre+'</a></li>'
		 			});
		 			$('#ciudad').html(lista);
		 		}
		 	});*/
	function ciudad(intValue){
		
		$.ajax({
			url: '/ciudadesPromos',
			data: ({
				ciudad : intValue
			}),
			dataType: 'JSON',
			success : function(data) {
			var lista = '';
				 $.each(data, function(index, value){ 
				 	lista = lista + '<p>'+value.nombre+'</p>'
			 });
				 $('.panel').html(lista);
			}
		});
	}
	var acc = document.getElementsByClassName("accordion");
var i;

</script>

</body>
</html>