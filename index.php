<?php 

include('src/Router.php');
include('src/Controllers/HomeController.php');
include('src/Controllers/CasasController.php');
include('src/Controllers/CoordenadasController.php');
include('src/Controllers/PromocionesController.php');

$router = new Router(); 

$router->get("/", "HomeController::index");
/*
Ciudades
*/

//Distrito Federal
$router->get("/benitojuarez", "HomeController::teques"); 
//Distrito Federal
$router->get("/sanmigueldeallende", "HomeController::ciudad"); //Guanajuato
//Guerrero
$router->get("/acapulco", "HomeController::ciudad");
$router->get("/ixtapa", "HomeController::ciudad");
$router->get("/taxco", "HomeController::ciudad");
//Guerrero
//Hidalgo
$router->get("/tulancingo", "HomeController::ciudad");
$router->get("/tepejidelrio", "HomeController::ciudad"); 
//hidalgo
//Mexico
$router->get("/valledebravo", "HomeController::ciudad"); 
$router->get("/tenancingo", "HomeController::ciudad"); 
$router->get("/malinalco", "HomeController::ciudad"); 
$router->get("/naucalpan", "HomeController::ciudad"); 
$router->get("/tecamachalco", "HomeController::ciudad");
$router->get("/jilotepec", "HomeController::ciudad");  
//Mexico
//Morelos
$router->get("/tequesquitengo", "HomeController::ciudad"); 
$router->get("/cuernavaca", "HomeController::ciudad"); 
$router->get("/cuautla", "HomeController::ciudad"); 
$router->get("/cocoyoc", "HomeController::ciudad"); 
$router->get("/yautepec", "HomeController::ciudad"); 
$router->get("/oaxtepec", "HomeController::ciudad"); 
$router->get("/temixco", "HomeController::ciudad"); 
$router->get("/chiconcuac", "HomeController::ciudad"); 
$router->get("/tlayacapan", "HomeController::ciudad"); 
$router->get("/amacuzac", "HomeController::ciudad");
$router->get("/tepoztlan", "HomeController::ciudad");
$router->get("/xochitepec", "HomeController::ciudad");
$router->get("/alpuyeca", "HomeController::ciudad");    
$router->get("/tehuixtla", "HomeController::ciudad"); 
$router->get("/tezoyuca", "HomeController::ciudad"); 
$router->get("/lasestacas", "HomeController::ciudad"); 
$router->get("/ticuman", "HomeController::ciudad"); 
$router->get("/tlaltizapan", "HomeController::ciudad"); 
$router->get("/atotonilco", "HomeController::ciudad"); 
//Morelos
//Queretaro
$router->get("/tequisquiapan", "HomeController::ciudad"); 
$router->get("/queretarocd", "HomeController::ciudad"); 
//Queretaro
//Veracruz
$router->get("/bocadelrio", "HomeController::ciudad"); 
$router->get("/veracruz", "HomeController::ciudad"); 
$router->get("/chachalacas", "HomeController::ciudad"); 
$router->get("/xico", "HomeController::ciudad"); 
//Veracruz
//Michoacan
$router->get("/zitacuaro", "HomeController::ciudad"); 
$router->get("/morelia", "HomeController::ciudad"); 
//Michoacan
//Quintana Roo
$router->get("/cancun", "HomeController::ciudad");
$router->get("/playadelcarmen", "HomeController::ciudad");
$router->get("/bacalar", "HomeController::ciudad");
//Quintana Roo
//Jalisco
$router->get("/puertovallarta", "HomeController::ciudad");
//Jalisco
//Nayarit
$router->get("/nuevovallarta", "HomeController::ciudad");
$router->get("/rivieranayarit", "HomeController::ciudad");
//Nayarit
//--> Ciudades
$router->get("/casas", "CasasController::casas"); 

$router->get("/mapa", "HomeController::mapa"); 

$router->get("/mapa/markers/", "CasasController::markers");

$router->get("/estados", "CasasController::estados");

$router->get("/ciudades", "CasasController::ciudades");
$router->get("/coordenadas", "CoordenadasController::coordenadas");

$router->get("/use", "CasasController::value");

$router->get("/precios", "CasasController::precios");
$router->get("/alberca", "CasasController::alberca");
$router->get("/ciudad", "CasasController::ciudad");

$router->get("/{value.nombre}/{value.idcasa}", "HomeController::casa");

$router->get("/buscarFechas", "CasasController::fechas");
$router->get("/casa", "CasasController::casa");
$router->get("/carrusel", "CasasController::casa");
$router->get("/datos", "CasasController::datos");

$router->get("/busca", "CasasController::buscaCasa");
$router->get("/buscaImagenes", "CasasController::buscarImgs");
$router->get("/buscarPorPrecios", "CasasController::buscarPorPrecio");
$router->get("/TodasCiudades", "CasasController::buscarTodasCiudades");
$router->get("/promociones" , "HomeController::promociones");

$router->get("/getPromo" , "PromocionesController::promociones");
$router->get("/buscarPorAlberca" , "CasasController::buscarAlberca");

$router->get("/buscarPorCaldera" , "CasasController::buscarCaldera");
$router->get("/ciudadesPromos" , "PromocionesController::buscarCiudadPromos");
