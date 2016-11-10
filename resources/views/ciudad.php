<!DOCTYPE html>
<html>
<head>
	<title></title>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">


        <script src="http://maps.google.com/maps/api/js?key=AIzaSyBEo4khsOygdOzs1wsVtcz1t6_uPd0CAs0"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/gmaps.js/0.4.24/gmaps.js"></script>
  		
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.4.1/css/bootstrap-slider.css">
        
       
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
          
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/9.4.1/bootstrap-slider.js"></script>
        <!-- Latest compiled and minified JavaScriSpt -->
       
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
	
   	margin-right: 10px;
   	display: inline-block;
   	width: 320px;
   	
   	margin-bottom: 15px;
   	box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);

}
#card2 {
	box-shadow:0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
	margin-bottom: 15px;
	border: #E6E6E6 1px solid;
}

#imagen {
	margin-top: 10px;
	margin-bottom: 10px;
	border-right:  #bfbfbf 1px solid;



}
#img{
	
	
	-webkit-box-shadow: 11px 3px 5px 0px rgba(222,206,222,0.62);
-moz-box-shadow: 11px 3px 5px 0px rgba(222,206,222,0.62);
box-shadow: 11px 3px 5px 0px rgba(222,206,222,0.62);
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
    display: inline-block;
    margin: 1em;
    width: 400px;
  	height: 300px;
   box-shadow: 4px 2px 24px 1px rgba(0,0,0,0.52);
}
#detalles {
	margin-left: 1cm;
}
#contenedor4 {
	
	
}
#col {
	
	width: 100%;
	height:500px;
	
			
}

#contenedor5 {
    display: inline-block;
    width: 300px;
    margin-bottom: 1cm;
    margin-right: 45px;
    border: #bfbfbf 1px solid;
   }
#detalles {
	margin-left: 10px;
}
#cantactanos {
	background-color: black;
	color: white;
}
#imagen {
	border-right: #bfbfbf 1px solid;
}
#descripcion {
	border-right: #bfbfbf 1px solid;
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
}
 hr{
	border: #bfbfbf 1px solid;
}
#filtroFechas {
	margin-top: 1cm;

}


#filtrosTipo label {
	margin-left: 25px;
}
#ex1Slider .slider-selection {
	background: #BABABA;
}
#c{
	margin-top: 15px;
}
#c input {
	margin-left: 5px;
	width: 15px;
	height: 15px;
}
 .modal-header, .close {
      background-color: #5cb85c;
      color:white !important;
      text-align: center;
      font-size: 30px;
  }
  .modal-footer {
      background-color: #f9f9f9;
  }
  #slider-range .ui-slider-handle { border-color: grey}
.fixed {  height: 500px; overflow:hidden;}
.scrollit {  height: 500px;overflow-y:scroll; }
.overlay {
  border: 1px solid #b71c1c;
  background: #d50000;
  padding: 5px;
  font-size: 17px;
  color: white;
  opacity: 0.8;

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
	<center><p>(55) 2454-9691  Atenci&oacute;n al cliente</p><a><span class="glyphicon glyphicon-user"></span>Terminos y Condiciones</a></center>

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
      <ul class="nav navbar-nav">
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
	        <ul class="dropdown-menu">
	        </ul>
      	</li>
        <li><a href="">Ver casas Disponibles</a></li>
        <li><a href="">Promociones</a></li>
        <li><a href="">Casas Nuevas</a></li>
        <li><a href="">Busqueda Avanzada</a></li>
        <li><a href="">Ver tags</a></li>
        <li><a href="">Mis casas</a></li>
      </ul>
      
    </div>
  </div>
</nav>
			
		</div>
	</div>
	<br>
<div class="row" id="contenedor" style="background-color: #F5F5F5">
	<div class="col-xs-12 col-xl-12 col-md-12">
		<div class="row" >
		
			<div class="row"> <!--Tabs de listar tabs -->
				<div class="col-md-12">
					<ul class="nav nav-tabs" >
		    			<li class="active"><a data-toggle="tab" href="#home">Ver Mapa</a></li>
		    			<li><a data-toggle="tab" href="#menu1" id="mimapa">Ver Lista</a></li>
		    
	 		 		</ul>
				</div>
			</div>  
			<!--Tabs de listar tabs -->

			<div class="tab-content">
				<div class="tab-pane fade in active" id="home">
					<div class="row">
						<div class="col-md-12">
						
							<div class="col-md-7 scrollit" id="scroll">
						


								<div class="row" id="filtroFechas">
									<div class="col-md-12">
										<div class="col-md-3" >
						      				<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Fecha de llegada" id="datepicker">
						      			</div>
						      			<div class="col-md-3" >
						      					<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Fecha de Salida" id="datepicker2">
						      			</div>
						      			<div class="col-md-3" >
						      					<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Nº de Personas" id="personas">&nbsp;&nbsp;
						      			</div>
						      			<div class="col-md-3">
						      					<a target="_blank" class="btn btn-default" onclick="buscarFechas()">Buscar</a>
						      			</div>
							      				
									</div>
									<hr>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-1"><label>Extras</label></div>
			      						<div class="col-md-11">
				      						<div class="col-md-3" style="background-color: 	 #d9d9d9; height: 50px;margin-right: 5px;">
				      							<p id="c">Alberca&nbsp;<span class="glyphicon glyphicon-tint"></span>
				      								<input type="checkbox" value="" id="albercaCheck">
					      						</p>
				      						</div>
				      						<div class="col-md-3" style="background-color: 	 #d9d9d9; height: 50px;margin-right: 5px;">
				      						<p id="c">Caldera&nbsp;<span class="glyphicon glyphicon-fire"></span><input type="checkbox" value="" id="calderacheck"></p></div>

	      								</div>
									</div>
									<hr>
								</div>
								<div class="row">
									<div class="col-md-12">
										<label for="amount" id="change">Rango de Precios:</label>
      										<input id="ex1" data-slider-id='ex1Slider' type="text" data-slider-min="0" data-slider-max="20" data-slider-step="1" data-slider-value="14"/>
      										<script type="text/javascript">
      											var slider = new Slider('#ex1', {
	formatter: function(value) {
		return 'Current value: ' + value;
	}
});
							</script>
      										
      						 			<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										
      							
      						 			<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										
      							
      						 			<hr>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="col-md-12" id="contenedor4" ></div>
									</div>
								</div>
							</div>
							<div class="col-md-5 fixed" id="fijo">
							
									<div id="col"></div>
								
						</div>
					
					</div>
				</div>
					
				</div>
    			<!--<div id="home" class="tab-pane fade in active">
    				<div class="row">
    					<div class="col-md-12" >
    						<div class="row">
				    			<div class="col-md-8" style="position:relative">
				    				<div class="row" id="filtroFechas">
				    					<div class="col-md-12">
				    						<ul>
				      							<div class="col-md-1">
				      								<label>Fechas</label>
				      							</div>
				      				
							      				<div class="col-md-3" style="margin-right: 10px;">
							      					<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Fecha de llegada" id="datepicker">
							      				</div>
							      				<div class="col-md-3" style="margin-right: 10px;">
							      					<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Fecha de Salida" id="datepicker2">
							      				</div>
							      				<div class="col-md-3" style="margin-right: 10px;">
							      					<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Nº de Personas" id="personas">&nbsp;&nbsp;
							      				</div>
							      				<div class="col-md-2" style="margin-right: 10px;">
							      					<a target="_blank" class="btn btn-default" onclick="buscarFechas()">Buscar</a>
							      				</div>
							      				
	      									</ul>
				    					</div>
	      								
	      				
      								</div>
      							<hr>
		      				<div class="row">
			      				<div class="col-md-1"><label>Extras</label></div>
			      					<div class="col-md-11">
			      						<div class="col-md-3" style="background-color: 	 #d9d9d9; height: 50px;margin-right: 5px;"><p id="c">Alberca&nbsp;<span class="glyphicon glyphicon-tint"></span><input type="checkbox" value="" id="albercaCheck">
				      						</p></div>
				      						<div class="col-md-3" style="background-color: 	 #d9d9d9; height: 50px;margin-right: 5px;"><p id="c">Caldera&nbsp;<span class="glyphicon glyphicon-fire"></span><input type="checkbox" value="" id="calderacheck"></p></div>
				      						
		      						
	      							</div>
      						</div>
      				<hr>
      				<div class="row">
      					<div class="col-md-12">
      						<label for="amount" id="change">Rango de Precios:</label>
      							<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;background-color:#F5F5F5 ">
      							<div id="slider-range"></div>
      							
      						 <hr>
      					</div>
      				</div> 
    			<div class="row">
					<div class="col-md-12" id="contenedor4" ></div>
				</div>
			</div>
				<div class="col-md-4">
						<div class="row">
						<div class="col-md-12" id="col"	style="width: 100%;position:absolute"></div>
					</div>
				</div>
				
		</div>
    	
     	</div>
    </div>
    </div>-->





    <!--A qui empieza el siguiente tab para listar las casas -->
    <!--<div id="menu1" class="tab-pane fade">
      	<div class="row">
      	<div class="col-md-12">
      		<div class="col-md-9">
      			<div class="col-md-12">
      				<div class="row" id="filtroFechas">
	      				<ul>
		      				<label>Fechas</label>
		      				
		      				<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Fecha de llegada" id="datepicker">
		      				<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Fecha de Salida" id="datepicker2">
		      				<input style="height: 35px;" name="searchbox" onfocus="if (this.value=='search') this.value = ''" type="text" placeholder="Nº de Personas" id="personas">&nbsp;&nbsp;
		      				<a target="_blank" class="btn btn-default" onclick="buscarFechas()">Buscar</a>
	      				</ul>
	      				
      				</div>
      				<hr>
      				
      				<div class="row">
      				<div class="col-md-2"><label>Extras</label></div>
      					<div class="col-md-12">
      						<div class="col-md-2" style="background-color: 	 #d9d9d9; height: 50px;margin-right: 5px;"><p id="c">Alberca&nbsp;<span class="glyphicon glyphicon-tint"></span><input type="checkbox" value="" id="albercaCheck">
	      						</p></div>
	      						<div class="col-md-3" style="background-color: 	 #d9d9d9; height: 50px;margin-right: 5px;"><p id="c">Caldera&nbsp;<span class="glyphicon glyphicon-fire"></span><input type="checkbox" value="" id="calderacheck"></p></div>
	      						
	      						
      					</div>
      				</div>
      				<hr>
      				<div class="row">
      					<div class="col-md-12">
      					<label for="amount" id="change">Rango de Precios:</label>
      					<input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;background-color:#F5F5F5 ">
      						<div id="slider-range"></div>
      						<script>
      							 $( function() {
							    $( "#slider-range" ).slider({
							      range: true,
							      min: 3000,
							      max: 60000,
							      values: [ 3000, 60000 ],
							      slide: function( event, ui ) {
							        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
							      }
							    });
							    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
							      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
							  } );
      							 
				        /* $(function() {
				            $( "#slider-2" ).slider({
				               value:0,
				               min: 3000,
				               max: 60000,
				               step: 1000,
				               slide: function( event, ui ) {
        						$( "#amount" ).val( "$" + ui.value );
      							}
      							
				            });
				            $( "#amount" ).val( "$" + $( "#slider-2" ).slider( "value" ) );

				            

				         });*/
				         $("#slider-range").on("slidechange", function( event, ui){
				            	$('#contenedor3').hide();
				            	var url = window.location.href;
				            	$.ajax({
				            		url:'/buscarPorPrecios',
				            		dataType: 'JSON',
				            		data : ({
				            			precio1 : ui.values[0],
				            			precio2 : ui.values[1],
				            			url : url
				            		}),
				            		success: function(data){
				            			var lista = '';
									 	var moda = '';
									 	$.each(data, function(index, value){
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

									 		lista = lista + '<div class="col-md-12" id="card2"><div class="col-md-3"><div id="imagen"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100%;height:150px;"></div></div><div class="col-md-6" id="descripcion"><div class="col-md-12"><h3>'+value.nombre+'</h3></div><div class="row"><div class="col-md-4"><p>Capacidad :'+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span></p><p>Recamaras:  '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p><p>Calefacci&oacuten; Solar :'+$solar+'</div><div class="col-md-4"><p>Nº Baños : '+value.banos_num+'<span class="glyphicon glyphicon-tree-deciduous"></span></p><p>Alberca : '+$alberca+'</p><p>Bomba : '+$bomba+'</p></div><div class="col-md-4"><p>Caldera : '+$caldera+'</p></div></div></div><div class="col-md-3"><br><p>Precio : $'+value.costo+'/'+value.iso+'</p><p>Promocion :</p><a href="/'+value.nombre+'/'+value.idcasa+'" target="_blank" class="btn btn-success">Ver casa</a></div></div>'
									 		
									 		
									 		
							 			});
							 			$('#contenedor3').html(lista);
							 			$('#contenedor3').show();
				            		}
				            	});
				            });
					      </script>
					      <hr>
      					</div>
      				</div>
      				<div id="contenedor3" ></div>	
      			</div>
      			</div>
      		<div class="col-md-3">
      		<div class="row">
      			<h3> Mas ciudades :</h3>
  				<ul class="nav nav-pills nav-stacked" id="ciudad">
    
    
  				</ul>
			</div>
			<div class="row">
			<h2>Contactanos : </h2>
				<div id="contacto">
			<div class="col-md-12">
				<div class="card">
			
					<div class="card-block"><h4 class="card-title">World Trade Center</h4>
						<strong><p class="card-text">Horarios : Lunes a Viernes de 09:00 a 14:00 hrs y 15:00 a 19:00 hrs.</p></strong><p>Telefonos :  2454-9691 <br> 9000-5757</p><p>Montecito No.38 Piso 16 oficina 28, World Trade Center Ciudad de México, Col. Nápoles. Del. Benito Juarez, C.P. 03810 Ciudad de México</p>
						
					</div>
				</div>
			</div>
		</div>
		<div id="contacto">
			<div class="col-md-12">
				<div class="card">
			
					<div class="card-block"><h4 class="card-title">Perisur</h4>
						<strong><p class="card-text">Horarios : Lunes a Viernes de 09:00 a 14:00 hrs y 15:00 a 19:00 hrs.</p></strong><p>Telefonos :  2454-9691 <br> 9000-5757</p><p>Sur 5264 Piso, Anillo Perif. Blvd. Adolfo López Mateos 1, Pedregal de Carrasco, 04700 Ciudad de México, D.F.</p>
						
					</div>
				</div>
			</div>
		</div>
		<div id="contacto">
			<div class="col-md-12">
				<div class="card">
			
					<div class="card-block"><h4 class="card-title">Santa Fe.</h4>
						<strong><p class="card-text">Horarios : Lunes a Viernes de 09:00 a 14:00 hrs y 15:00 a 19:00 hrs.</p></strong><p>Telefonos :  2454-9691 <br> 9000-5757</p><p>Piso 4 Oficina 4B, Juan Salvador Agraz 97, Santa Fe, Las Tinajas, 05300 Ciudad de México, D.F.</p>
						
					</div>
				</div>
			</div>
		</div>


			</div>
      		</div>
      	</div>
      	</div>
		
								
    </div>-->
    
  </div>
<div class="row">
	<div class="col-xs-12 col-md-12">
	<h1 style="font-family: 'Lobster' ">Oficinas para informes y Contrataciones.</h1>
		<div class="col-md-4">
		<div id="contacto">
			<div class="col-md-12" id="contenedor6"><div class="card">
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
			<div class="col-md-12" id="contenedor6"><div class="card">
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
			<div class="col-md-12" id="contenedor6"><div class="card">
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

</div>

</div>


			





<script type="text/javascript">
$('#albercaCheck').on("click", function(){
	if($('#albercaCheck').is(':checked')){
		$('#contenedor3').hide();
		var url = window.location.href;
		$.ajax({
			url: '/buscarPorAlberca',
			dataType: 'JSON',
			data: ({
				data : 1,
				url: url
			}),
			success: function(data){
				lista = '';

				$.each(data, function(index, value){
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

		 		lista = lista + '<div class="col-md-12" id="card2"><div class="col-md-3"><div id="imagen"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100%;height:150px;"></div></div><div class="col-md-6" id="descripcion"><div class="col-md-12"><h3>'+value.nombre+'</h3></div><div class="row"><div class="col-md-4"><p>Capacidad :'+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span></p><p>Recamaras:  '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p><p>Calefacci&oacuten; Solar :'+$solar+'</div><div class="col-md-4"><p>Nº Baños : '+value.banos_num+'<span class="glyphicon glyphicon-tree-deciduous"></span></p><p>Alberca : '+$alberca+'</p><p>Bomba : '+$bomba+'</p></div><div class="col-md-4"><p>Caldera : '+$caldera+'</p></div></div></div><div class="col-md-3"><br><p>Precio : $'+value.costo+'/'+value.iso+'</p><p>Promocion :</p><a href="/'+value.nombre+'/'+value.idcasa+'" target="_blank" class="btn btn-success">Ver casa</a></div></div>'
		 		
		 		
		 		
 			});
 			
 			
		 	$('#contenedor3').html(lista);
		 	$('#contenedor3').show();
			}
		})
	}else {
		alert("Esta desictavado");
	}
});


$('#calderacheck').on("click", function(){
	if($('#calderacheck').is(':checked')){
		$('#contenedor3').hide();
		var url = window.location.href;
		$.ajax({
			url: '/buscarPorCaldera',
			dataType: 'JSON',
			data: ({
				data : 1,
				url : url
			}),
			success: function(data){
				lista = '';

				$.each(data, function(index, value){
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

		 		lista = lista + '<div class="col-md-12" id="card2"><div class="col-md-3"><div id="imagen"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100%;height:150px;"></div></div><div class="col-md-6" id="descripcion"><div class="col-md-12"><h3>'+value.nombre+'</h3></div><div class="row"><div class="col-md-4"><p>Capacidad :'+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span></p><p>Recamaras:  '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p><p>Calefacci&oacuten; Solar :'+$solar+'</div><div class="col-md-4"><p>Nº Baños : '+value.banos_num+'<span class="glyphicon glyphicon-tree-deciduous"></span></p><p>Alberca : '+$alberca+'</p><p>Bomba : '+$bomba+'</p></div><div class="col-md-4"><p>Caldera : '+$caldera+'</p></div></div></div><div class="col-md-3"><br><strong><p>Precio : $'+value.costo+'/'+value.iso+'</p></strong><a href="/'+value.nombre+'/'+value.idcasa+'" target="_blank" class="btn btn-success">Ver casa</a></div></div>'
		 		
		 		
		 		
 			});
 			
 			
		 	$('#contenedor3').html(lista);
		 	$('#contenedor3').show();
			}
		})
	}else {
		alert("Esta desictavado");
	}
});

var today = new Date();
var mm = today.getMonth() +1;
var yyyy = today.getFullYear();

console.log(yyyy,mm);
$( "#blue" ).slider();
	$(document).ready(function() {
	$( function() {
	    $( "#slider-range" ).slider({
	      range: true,
	      min: 3000,
	      max: 60000,
	      values: [ 3000, 60000 ],
	      slide: function( event, ui ) {
	        $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
	      }
	    });
	    $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
	      " - $" + $( "#slider-range" ).slider( "values", 1 ) );
	  } );
	$('#slider').slider();
	var map = new GMaps({
            el: '#mapa',
            lat: 19.393664,
            lng: -99.1745978,
            zoom: 13
          });
	var marker = map.drawOverlay({
            lat: 19.393664,
            lng: -99.1745978,
            
            layer: 'overlayLayer',
            content: 'WTC',
            verticalAlign: 'top',
			horizontalAlign: 'center'
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
            label: 'A'

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

		var url = window.location.href;
		$.ajax({
		 url: '/casas',
		 data: ({
		 	url: url
		 }),
		 dataType: 'JSON',
		 success: function(data){
		 	
		 	var lista = '';
		 	var moda = '';
		 	$.each(data, function(index, value){
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

		 		lista = lista + '<div class="col-md-12" id="card2"><div class="col-md-3"><div id="imagen"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100%;height:150px;"></div></div><div class="col-md-6" id="descripcion"><div class="col-md-12"><h3>'+value.nombre+'</h3></div><div class="row"><div class="col-md-4"><p>Capacidad :'+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span></p><p>Recamaras:  '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p><p>Calefacci&oacuten; Solar :'+$solar+'</div><div class="col-md-4"><p>Nº Baños : '+value.banos_num+'<span class="glyphicon glyphicon-tree-deciduous"></span></p><p>Alberca : '+$alberca+'</p><p>Bomba : '+$bomba+'</p></div><div class="col-md-4"><p>Caldera : '+$caldera+'</p></div></div></div><div class="col-md-3"><br><p>Precio : $'+value.costo+'/'+value.iso+'</p><p>Promocion :</p><a href="/'+value.nombre+'/'+value.idcasa+'" target="_blank" class="btn btn-success">Ver casa</a></div></div>'
		 		
		 		
		 		
 			});
 			
 			
		 	$('#contenedor3').html(lista);
		 	
 		}
 			
	});
		
		/*$.ajax({
 			url: '/precios',
 			dataType: 'JSON',
 			success: function(data){
 				precios = '';
 				$.each(data, function(index,value){
 					precios = precios + '<p>'+value.costo+'</p>'
 				});
 				$('#precio').html(precios);
 			}

 		});*/

		var url = window.location.href;
		
			$.ajax({

				url: '/coordenadas',
				dataType: 'JSON',
				data : ({
					url:  url
				}),
				success: function(data){
					$.each(data, function(index, value){
					var map = new GMaps({
						el: '#col',
			            lat: value.lat,
			            lng: value.lng,
			            zoom: 13
					});
						
				
					$.ajax({
					url: '/mapa/markers/',
		       		dataType: 'JSON',
		       		data: ({
				 		url: url
				 	}),
		       		type: 'GET',
		       		 success: function(data){
				 		var lista = '';
				 		$.each(data, function(index, value){
		 				
		 		
				 		var marker = map.drawOverlay({
		                lat: value.latitud,
		                lng: value.longitud,
		                content:  '<div class="overlay">'+value.nombre+'<div class="overlay_arrow above"></div></div>',
            			verticalAlign: 'top'


		               /* infoWindow: {
		                	content: '<div class="card card-block" style="width:300px;"><div id="card-img"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="width:100%;height:200px;"></div><h3 class="card-title">' + value.nombre +'</h3><p class="card-text">Capacidad'+value.capacidad_num+' <span class="glyphicon glyphicon-user"></span></p><p>Recamaras : '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p><a href="/'+value.nombre+'/'+value.idcasa+'" target="_blank" class="btn btn-success">Me interesa</a></div>'
		                }*/
				 		});
				 		lista = lista + '<div id="card" data-cmd="'+value.estado+'"><h2 style="position:absolute;z-index:1000;"><span style="color:white; font: bold 24px/45px Helvetica, Sans-Serif; letter-spacing: -1px; background:rgb(0, 0, 0);background: rgba(0, 0, 0, 0.7); padding:10px;opacity: 0.8">$'+value.costo+'/'+value.iso+'</span></h2><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" style="position:relative;width:100%; height:250px;"><p>'+value.nombre+'</p><p>Capacidad: '+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span>-Recamaras:'+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span>-Baños:'+value.banos_num+' <span class="glyphicon glyphicon-th-large"></span><a   data-toggle="modal" data-target="#'+value.idcasa+'">.Ver mas...</a></p></div>' +
				 			'<div class="modal fade" id="'+value.idcasa+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header" style="padding:35px 50px;"><button type="button" class="close" data-dismiss="modal">&times;</button><h4 style="text-align: center;font-size: 30px;"><span class="glyphicon glyphicon-home"></span>'+value.nombre+'</h4></div><div class="modal-body" style="padding:40px 50px;"><strong><p>Descripcion:</p></strong><p>'+value.ptos_fuertes+'</p><p><strong>Capacidad : </strong>'+value.capacidad_num+'</p><p>'+value.comentarios+'</p><hr><p>Recamaras : '+value.recamaras_num+'</p><p>'+value.recamara_detalles+'</p><hr><p><strong>Baños :</strong> '+value.banos_num+'</p><p><strong>Sala:</strong></p><p>'+value.sala_detalles+'</p></div><div class="modal-footer"><button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button><a href="/'+value.nombre+'/'+value.idcasa+'" target="_blank" class="btn btn-success">Ver casa</a> </div></div></div></div>'
				 			
				 		
				 	});	

				 		$('#contenedor4').html(lista)
					}
					});
					});
			}
		});

			var url = window.location.href;
 		

		
	});
		$.ajax({
 		url : '/estados',
 		dataType: 'JSON',
 		success: function(data){
 			var lista = '';
 			var menu = '';
              $.each(data, function(index, value){
		 		lista = lista + '<li ><a  id="'+value.nombre+'"  onClick="ciudad()">'+value.nombre+'</a></li>'
		 		menu = menu + '<li><a href="#">'+value.nombre+'</a></li>'
		 		
		 	});	
		 	$('#estados').html(lista); 
		 	$('#estado').html(menu);
 		
 	}
 	});

	var url = window.location.href;
	
	
	$.ajax({
			url: '/ciudad',
			data :({
				url : url
			}),
			dataType: 'JSON',
			success : function(data){
				var ciudad = '';
				var lateral = '';
			$.each(data, function(index,value){
					ciudad = ciudad + '<li><a href="/'+value.url+'" target="_blank"><span class="glyphicon glyphicon-pushpin"></span>&nbsp;'+value.nombre+'</a></li>'
					
				});
				$('#ciudad').html(ciudad);
				
			}

		});
	function buscarFechas(){
		var llegada = $('#datepicker').val();
        var salida = $('#datepicker2').val();
        var personas =$('#personas').val();
        $.ajax({
        	url:'/buscarFechas',
        	dataType: 'JSON',
        	data: ({
        		llegada: llegada,
        		salida : salida,
        		personas: personas

        	}),
        	success: function(data){
        		console.log(data);
        	}
        });
	}
/*function show(intValue){

	$.ajax({
	url: '/busca',
	dataType: 'JSON',
	data:({
		id : intValue,
	}),
	success: function(data){
		imagen = '';
		$.each(data, function(index,value){
			
				$.ajax({
					url: '/buscaImagenes',
					dataType: 'JSON',
					data: ({
						id: value.idcasa
					}),
					success: function(data){
						carrusel = '';
						$.each(data, function(index,value){
							if(index == 0){
								carrusel = carrusel + '<div class="item active"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" alt="Chania" width="100%" height="345"></div>'
							}
							carrusel = carrusel + '<div class="item"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"  width="100%" height="345"></div>'
						});
						$('.carousel-inner').html(carrusel);
					}

				});

			/*if(index == 0){
				imagen = imagen + '<div class="item active"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" alt="Chania" width="100%" height="345"></div>'
			}
				imagen = imagen + '<div class="item"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" alt="Chania" width="100%" height="345"></div>'*/
		/*});
		
		

	}
});
}*/
			


	</script>


</body>
</html>