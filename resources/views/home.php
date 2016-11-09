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
.overlay {
  border: 1px solid #b71c1c;
  background: #d50000;
  padding: 5px;
  font-size: 17px;
  color: white;
  opacity: 0.8;
 
}
.overlay:hover {
	opacity: 1.0;
}

.overlay_arrow {
  left: 50%;
  margin-left: -16px;
  width: 0;
  height: 0;
  position: absolute;
}
.overlay_arrow.above {
  bottom: -15px;
  border-left: 16px solid transparent;
  border-right: 16px solid transparent;
  border-top: 16px solid #b71c1c;
}
.overlay_arrow.below {
  top: -15px;
  border-left: 16px solid transparent;
  border-right: 16px solid transparent;
  border-bottom: 16px solid #ff0000;
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
        <li><a href="#">Inicio</a></li>
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
        <li><a href="/promociones">Promociones</a></li>
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
			<div class="col-xs-12 col-md-12" id="calendarios" >
				
				<form class="form-inline">
					<select class="chosen" style="width:200px;height: 30px">
							<option value>--Cualquier Estado --</option>
							<option value="bajacaliforniasur">Baja California Sur</option>
							<option value="distritofederal">Distrito Federal</option>
							<option value="guanajuato">Guanajuato</option>
							<option value="guerrero">Guerrero</option>
							<option value="hidalgo">Hidalgo</option>
							<option value="jalisco">Jalisco</option>
							<option value="mexico">Mexico</option>
							<option value="michoacan">Michoacan</option>
							<option value="nayarit">Nayarit</option>
							<option value="queretaro">Queretaro</option>
						</select>
					  <div class="form-group">
					    <label for="email">llegada:</label>
					    <input type="email" class="form-control" id="datepicker">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Salida:</label>
					    <input type="email" class="form-control" id="datepicker2">
					  </div>
					  
					  <button type="submit" class="btn btn-default">Buscar</button>
				</form>
			
		</div>
		
		<div class="row" id="tabs">
			<div class="col-md-12">
				<ul class="nav nav-tabs" id="estados">
        
          
        </ul>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12" >
				<div class="col-md-6">
				<ul class="list-group" id="ciudades">
				    
  				</ul>
  				</div>
  				<div class="col-md-6">
				<ul class="list-group">
				  
				   
  				</ul>
  				</div>
			</div>
		</div>


	</div>
	<div class="row">
	<div class="col-xs-12 col-md-12">
	<h1 style="font-family: 'Lobster' ">Oficinas para informes y Contrataciones.</h1>
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
		var marker = map.drawOverlay({
            lat: 19.393664,
            lng: -99.1745978,
            //layer: 'overlayLayer',
            content:  '<div class="overlay">Worl Trace center<div class="overlay_arrow above"></div></div>',
            verticalAlign: 'top',
			
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
		 		lista = lista + '<li ><a id="'+value.nombre+'"  onClick="ciudad(this)">'+value.nombre+'</a></li>'
		 		menu = menu + '<li><a href="/'+value.nombre+'">'+value.nombre+'</a></li>'
		 		
		 	});	
		 	$('#estados').html(lista); 
		 	$('#estado').html(menu);
 		
 	}
 	});
 	
});
	function ciudad(obj){
		var ciudad = $(obj).html();
		$.ajax({
			url: '/ciudades',
			data: ({
				ciudad : ciudad
			}),
			dataType: 'JSON',
			success : function(data) {
			var lista = '';
				 $.each(data, function(index, value){ 
				 	lista = lista + '<li class="list-group-item"><a href="/'+value.url+'" onClick="url(this)">'+value.nombre+'</a></li>'
			 });
				 $('#ciudades').html(lista);
			}
		});
	}
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
</script>

</body>
</html>