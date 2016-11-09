<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEo4khsOygdOzs1wsVtcz1t6_uPd0CAs0"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
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
	#nav {
	list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #151c49;
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


}
#carrusel {
	padding-top: 1cm;
}
#tabs {
	padding-top: 1cm;
}
#card {
	margin: 1cm;
}

#card {
	background: linear-gradient( 0deg,  #EEEEEE, #ffffff);
	border: #bfbfbf 1px solid;
	text-align: center;

}
#imagen {
	margin-top: 10px;
	margin-bottom: 10px;

}
#image img {
	height: 50px;
}
#descripcion {
	margin-top: 10px;
	border-right:  #bfbfbf 1px solid;
}
#conteo {
	margin-top: 10px;
	border-right:  #bfbfbf 1px solid;
}
#precios {
	margin-top: 10px;
	border-right:  #bfbfbf 1px solid;
}
#contenedor2 {
	
	border-right: #bfbfbf 1px solid;
}
#col {
	
	width:100%;
	height:500px;
		
}
#contenedor3 {
    display: inline-block;
    width: 300px;
    margin-right:  20px;
    margin-bottom: 20px;
    margin-top: 20px;
    box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);
}
#detalles {
	margin-left: 10px;
}
</style>
<div class="row">
	<div class="col-md-3">
		<img src="http://casasvacacionales.com.mx/images/brand/logo-200x70.png">
	</div>
	<div class="col-md-4" id="input">
		<div class="input-prepend">
			<span class="add-on">
				<i class="fa fa-search"></i>
			</span>
			<input type="text" class="input-xlarge" name="q" placeholder="Buscador">
			<input class="btn" type="submit" value="Buscar">
		</div>
		</div>
	</div>
<div class="row">
	<div class="col-md-12">
		<ul id="nav">
		  <li><a class="active" href="#home">Inicio</a></li>
		  <li><a href="#news">Estado</a></li>
		  <li><a href="#contact">Ciudades</a></li>
		  <li><a href="#about">Ver casas Dsiponibles</a></li>
		  <li><a href="#about">Promociones</a></li>
		  <li><a href="#about">Casas Nuevas</a></li>
		  <li><a href="#about">Busqueda Avanzada</a></li>
		  <li><a href="#about">Ver tags</a></li>
		  <li><a href="#about">Mis casas</a></li>
		</ul>
			
		</div>
	</div>
	<br>
<div class="row" id="contenedor">
	<div class="col-md-12">
		<div class="row" style="background-color: #F5F5F5">
			<div class="col-md-12" id="calendarios" >
				<div class="col-md-2">
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
				</div>
				<div class="col-md-2">
					<label>Entrada</label>
					<input type="text" style="width: 150px" placeholder="Fecha de Entrada" class="datepicker">
				</div>
				<div class="col-md-2">
					<label>Salida</label>
					<input type="text" style="width: 150px" placeholder="Fecha de Salida" class="datepicker2">
					
				</div>
				<div class="col-md-1">
					<input type="submit" class="btn btn-primary" value="Buscar" style="width:100px">
				</div>
				<div class="col-md-2">
					<a class="btn btn-primary">Ir a busqueda avanzada</a>
				</div>
			</div>
		</div>
		<!--
		<div class="row" id="carrusel" style="background-color: #F5F5F5;">
			<div class="col-md-12">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators --> <!--
				    <ol class="carousel-indicators">
				      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				      <li data-target="#myCarousel" data-slide-to="1"></li>
				      <li data-target="#myCarousel" data-slide-to="2"></li>
				      
				    </ol>

    <!-- Wrapper for slides --> <!--
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

				    <!-- Left and right controls --> <!--
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
		</div>
		<br> -->
		<div id="tab-container" class="tab-container">
		<ul class="nav nav-tabs">
 			
  			<li ><a href="/Tequesquitengo">Ver lista</a></li>
 			<li class="active"><a href="/mapa">Ver Mapa</a></li>
 			
		</ul>
		<div class="row" id="#tabs-1">
			<div class="col-md-12" >
				<div class="col-md-7" id="contenedor2" ></div>
				<div class="col-md-5">
						<div class="row">
						<div class="col-md-12" id="col" ></div>
					</div>
				</div>

		</div>


	</div>
	
	
	</div>

</div>
<script type="text/javascript">
	$(document).ready(function(){
		var map = new GMaps({
            el: '#col',
            lat: 18.61937,
            lng: -99.2860358,
            zoom: 13
            
          });
		$.ajax({
			 url: '/mapa/markers',
       		dataType: 'JSON',
       		type: 'GET',
       		 success: function(data){
		 		var lista = '';
		 	$.each(data, function(index, value){
		 		
		 		var marker = map.addMarker({
                lat: value.latitud,
                lng: value.longitud,
                title: value.nombre,
                infoWindow: {
                	content: '<div class="card card-block" style="width: 18rem;"><h3 class="card-title">' + value.nombre +'</h3><p class="card-text">'+value.ptos_fuertes+'</p><a href="#" class="btn btn-primary" onClick="reservar()">Reservar</a></div>'
                }
		 		});
		 		lista = lista +' <div class="col-md-6" id="contenedor3"><div class="card"><img class="card-img-top" src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" alt="Card image cap" style="width:100%;height:200px;box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);"><div class="card-block"><h4 class="card-title">'+value.nombre+'</h4><p class="card-text">'+value.capacidad_num+'Personas. '+value.recamaras_num+'Recamaras</p><a href="#" class="btn btn-success">Ver casa</a><a href="#" data-toggle="modal" data-target="#myModal" class="btn btn-success" id="detalles">Ver Detalles</a></div></div></div>'
		 		/*lista = lista + '<div class="col-md-12" id="card"><div class="col-md-3" id="imagen"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100px;height:100px"></div><div class="col-md-4" id="descripcion"><strong><p>'+value.nombre+'</p></strong><p>'+value.ptos_fuertes+'</p></div><div class="col-md-2" id="conteo"><strong><p>Personas:</p></strong>'+value.capacidad_num+'<strong><p>Recamaras</p></strong>'+value.recamaras_num+'<strong><p>Baños: </p></strong>'+value.banos_num+'</div><div class="col-md-3" id="precios"><strong><p>Precio:</p></strong><button type="button" class="btn btn-success">Success</button></div></div>'*/
		 	});	
		 	$('#contenedor2').html(lista);
		}

	});
});
</script>
</body>
</html>