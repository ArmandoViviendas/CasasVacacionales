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
.hide-bullets {
    list-style:none;
    margin-left: -40px;
    margin-top:20px;
}

.thumbnail {
    padding: 0;
}

.carousel-inner>.item>img, .carousel-inner>.item>a>img {
    width: 100%;
    height: 300px;
    
}
#content {
	margin-left: 1cm;
}
hr {
	 border: #bfbfbf 1px solid;
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
        <li ><a>Estado</a>
        <li><a href="#">Ciudades</a></li>
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
<div class="row" id="contenedor" style="background-color: #F5F5F5">
	<div class="row">
		<div class="col-md-12">
			<h1 id="nombre"></h1>
			<h2 id="estado"></h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<div class="col-md-6" id="slider-thumbs">
				<ul class="nav nav-tabs">
				    <li class="active"><a data-toggle="tab" href="#Exterior">Exterior</a></li>
				    <li><a data-toggle="tab" href="#Recamara">Recamara</a></li>
				    <li><a data-toggle="tab" href="#Baño">Baño</a></li>
				    <li><a data-toggle="tab" href="#Cocina">Cocina</a></li>
				    <li><a data-toggle="tab" href="#Jardin">Jardin</a></li>
				    <li><a data-toggle="tab" href="#Terraza">Terraza</a></li>
				    <li><a data-toggle="tab" href="#Vista">vista</a></li>
				  </ul>

				  <div class="tab-content">
				    <div id="Exterior" class="tab-pane fade in active">
				      	<ul class="hide-bullets" id="slider-exterior">
	                      
	                	</ul>
				    </div>
				    <div id="Recamara" class="tab-pane fade">
				      <ul class="hide-bullets" id="slider-recamara">
	                      
	                </ul>
				    </div>
				    <div id="Baño" class="tab-pane fade">
				      <ul class="hide-bullets" id="slider-bano">
	                      
	                </ul>
				    </div>
				    <div id="Cocina" class="tab-pane fade">
				      <ul class="hide-bullets" id="slider-cocina">
	                      
	                  </ul>
				    </div>
				    <div id="Jardin" class="tab-pane fade">
				      <ul class="hide-bullets" id="slider-jardin">
	                      
	                  </ul>
				    </div>
				    <div id="Terraza" class="tab-pane fade">
				      <ul class="hide-bullets" id="slider-terraza">
	                      
	                  </ul>
				    </div>
				    <div id="Vista" class="tab-pane fade">
				      <ul class="hide-bullets" id="slider-vista">
	                      
	                  </ul>
				    </div>
				  </div>
				   
			</div>
			<div class="col-sm-6" id="carousel-bounding-box">
                    <div class="carousel slide" id="myCarousel">
                        
                        <div class="carousel-inner">
                            
                            <div class="active item" data-slide-number="0">
                                <img src="http://placehold.it/470x480&text=zero"></div>
                        </div>
                        
                        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                        </a>
                    </div>
		     </div>
			  <!-- Slider -->
	        
	           <!-- <div class="col-sm-6" id="slider-thumbs">
	                
	                <ul class="hide-bullets" id="slider">
	                      
	                </ul>
	                <div class="row">
						<div class="col-md-12" id="content" style="background-color: #F5F5F5">
							<h3>Descripci&oacute;n a Detalle</h3>
							<hr>
							<div class="row">
								<div class="col-md-12" id="descripcion"></div>
							</div>
							<hr>
							<div class="row">
							<div class="col-md-12">
									<div class="col-md-4" id="capacidades1"></div>
									<div class="col-md-4" id="capacidades2"></div>
									<div class="col-md-4" id="capacidades3"></div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12" id="extras">
									
								</div>
							</div>
						</div>
					</div>

	            </div>
	            <div class="col-sm-6">
	               <div class="row">
		                <div class="col-md-12 col-xs-12" id="slider">
		                    
		                    <div class="row">
		                        <div class="col-sm-12" id="carousel-bounding-box">
		                            <div class="carousel slide" id="myCarousel">
		                                
		                                <div class="carousel-inner">
		                                    
		                                    <div class="active item" data-slide-number="0">
		                                        <img src="http://placehold.it/470x480&text=zero"></div>
		                                </div>
		                                <
		                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
		                                    <span class="glyphicon glyphicon-chevron-left"></span>
		                                </a>
		                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
		                                    <span class="glyphicon glyphicon-chevron-right"></span>
		                                </a>
		                            </div>
		                        </div>
		                    </div>
		                </div>
	                </div>
	                <div class="row">
	                <div class="col-md-12">
	                	<div id="precios"></div>
	                </div>
	                </div>
	                <div class="row">
	                	<div class="col-md-12">
		                	<h2 id="ubicacion"></h2>
		                	<div id="casaMapa" style="width:100%; height: 500px;margin: 1cm"></div>
		                </div>
	                </div>
	            </div>
	            -->
	        </div>

			
	</div>	
	<div class="row">
	<div class="col-md-12">
		<div class="col-md-5">
			<div class="row">
						<div class="col-md-12" id="content">
							<h3>Descripci&oacute;n a Detalle.</h3>
							<hr>
							<div class="row">
								<div class="col-md-12" id="descripcion"></div>
							</div>
							<hr>
							<div class="row">
							<div class="col-md-12">
									<div class="col-md-4" id="capacidades1"></div>
									<div class="col-md-4" id="capacidades2"></div>
									<div class="col-md-4" id="capacidades3"></div>
								</div>
							</div>
							<hr>
							<div class="row">
								<div class="col-md-12" id="extras">
									
								</div>
							</div>
						</div>
					</div>
		</div>
		<div class="col-md-6">
	        <div id="precios"></div>
	          <div class="row">
	            	<div class="col-md-12" style="margin-left: 1cm">
	                	<h2 id="ubicacion"></h2>
	                	<div id="casaMapa" style="width:100%; height: 500px;margin: 1cm"></div>
	                </div>
	            </div>   
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
		 $('#myCarousel').carousel({
                interval: 5000
        });
	$('[id^=carousel-selector-]').click(function () {
		alert("HOLa");
        var id_selector = $(this).attr("id");
        try {
            var id = /-(\d+)$/.exec(id_selector)[1];
            console.log(id_selector, id);
            jQuery('#myCarousel').carousel(parseInt(id));
        } catch (e) {
            console.log('Regex failed!', e);
        }
    });
 
        //Handles the carousel thumbnails
        
        // When the carousel slides, auto update the text
        $('#myCarousel').on('slid.bs.carousel', function (e) {
                 var id = $('.item.active').data('slide-number');
                $('#carousel-text').html($('#slide-content-'+id).html());
        });
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
		var url = window.location.href;
		$.ajax({
			url:'/casa',
			dataType:'JSON',
			data:({
				url : url
			}),
			success: function(data){
				carrouser = '';
				imagen1 = '';
				imagen2 = '';
				imagen3 = '';
				imagen4 = '';
				imagen5 = '';
				imagen6 = '';
				imagen7 = '';
				$.each(data, function(index,value){ 

					if(value.descripcion.match(/Exterior/)  || value.descripcion.match(/exterior/)){
						imagen1 = imagen1 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'" data-toggle="modal" data-target="#'+value.idimagen+'"  style="width:100%;height:100px;"></a></li>' + 
						'<div class="modal fade" id="'+value.idimagen+'" role="dialog"><div class="modal-dialog"><div class="modal-content"><div class="modal-header" style="padding:35px 50px;"><button type="button" class="close" data-dismiss="modal">&times;</button></div><div class="modal-body" style="padding:40px 50px;"></div><div class="modal-footer"><button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cerrar</button> </div></div></div></div>'
					}
					if(value.descripcion.match(/Baño/) || value.descripcion.match(/baño/) ){
						imagen2 = imagen2 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"style="width:100%;height:100px;"></a></li>'
					}
					if(value.descripcion.match(/Recamara/) || value.descripcion.match(/rec/)){
						imagen3 = imagen3 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"style="width:100%;height:100px;"></a></li>'
					}
					if(value.descripcion.match(/Jardin/) || value.descripcion.match(/jardin/)){
						imagen4 = imagen4 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"style="width:100%;height:100px;"></a></li>'
					}
					if(value.descripcion.match(/Cocina/)  ||value.descripcion.match(/cocina/)){
						imagen5 = imagen5 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"style="width:100%;height:100px;"></a></li>'
					}
					if(value.descripcion.match(/Vista/) || value.descripcion.match(/vista/)){
						imagen6 = imagen6 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"style="width:100%;height:100px;"></a></li>'
					}
					if(value.descripcion.match(/Terraza/) || value.descripcion.match(/terraza/)){
						imagen7 = imagen7 + '<li class="col-sm-3"><a class="thumbnail" id="carousel-selector-'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"style="width:100%;height:100px;"></a></li>'
					}
					
				if(index == 0) {
						carrouser = carrouser + ' <div class="active item" data-slide-number="'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"></div>'
					}
					carrouser = carrouser + ' <div class="item" data-slide-number="'+index+'"><img src="http://atlas.casasvacacionales.mx/static/cv/images/800x600/'+value.url+'"></div>'	
					
				});
				$('.carousel-inner').html(carrouser);
				$('#slider-exterior').html(imagen1);
				$('#slider-bano').html(imagen2);
				$('#slider-recamara').html(imagen3);
				$('#slider-jardin').html(imagen4);
				$('#slider-cocina').html(imagen5);
				$('#slider-vista').html(imagen6);
				$('#slider-terraza').html(imagen7);
			
			} 
		});
		$.ajax({
			url:'/datos',
			dataType: 'JSON',
			data: ({
				url: url
			}),
			success: function(data){
				casa = '';
				estado = '';
				ubicacion = '';
				descripcion = '';
				capacidades1 = '';
				capacidades2 = '';
				extras = '';
				$.each(data,function(index,value){
					casa = casa + 'Casa '+value.nombre+'.'
					estado = estado +''+value.ciudad+'.'+value.estado+''

					if(value.latitud != 0.000000) {
						var map = new GMaps({
			            el: '#casaMapa',
			            lat: value.latitud,
			            lng: value.longitud,
			           
			          });
						var marker = map.addMarker({
		                lat: value.latitud,
		                lng: value.longitud,
		                title: value.nombre,
		            });
						ubicacion = ubicacion + 'Ubicaci&oacute;n de '+value.nombre+' :'
					}
					descripcion = descripcion + '<p>'+value.ptos_fuertes+'</p>'
					capacidades1 = capacidades1 + '<strong><p>Capacidad : '+value.capacidad_num+'<span class="glyphicon glyphicon-user"></span></strong><strong></p><br><p>Recamaras : '+value.recamaras_num+'<span class="glyphicon glyphicon-home"></span></p></strong><br>'
					capacidades2 = capacidades2 + '<strong><p>Nº de Baños : '+value.banos_num+'</p></strong><br><strong><p>Tipo de casa : Casa Vacacional </p></strong><p><strong>Estacionamiento : '+value.estacionamiento_detalles+'</p></strong>'

					extras = extras + '<p>Recamaras : '+value.recamara_detalles+'</p><hr><p>Sala : '+value.sala_detalles+'</p><hr><p>Comedor : '+value.comedor_detalles+'</p><hr><p>Cocina : '+value.cocina_detalles+'</p><hr><p>Jardin : '+value.jardin_detalles+'</p><hr><p>Entretenimiento : '+value.tvs_detalles+'</p><hr><p>Limpieza_detalles : '+value.limpieza_detalles+'</p><hr><p>Comentarios : '+value.comentarios+'</p>'
				});
				$('#nombre').html(casa);
				$('#estado').html(estado);
				$('#ubicacion').html(ubicacion);
				$('#descripcion').html(descripcion);
				$('#capacidades1').html(capacidades1);
				$('#capacidades2').html(capacidades2);
				$('#extras').html(extras);
			}
		});
		$.ajax({
			url:'/precios',
			dataType: 'JSON',
			data: ({
				url: url
			}),
			success: function(data){
				precios = '';
				$.each(data, function(index,value){
					precios = precios + '<table class="table table-hover" style="margin-left: 3cm"><thead><tr><th>Precios/tarifas</th><th>Tipo</th><tr></thead><tbody><tr><td>$'+value.costo+'/'+value.iso+'</td></tr></tbody></table>'
				});
				$('#precios').html(precios);
			}
		});
		
	});

</script>

</body>
</html>