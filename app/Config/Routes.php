<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('registrar','Home::registrar');
$routes->post('registrar','Home::crear');
$routes->get('activar_usuario/(:any)','Home::activarUsuario/$1');

$routes->get('recuperar_contra','Login::recuperarContra');
$routes->post('autenticacion','Login::autenticar');

$routes->get('ver_planes','PlanesController::index');
$routes->get('ver_clientes','ClientesController::index');
$routes->get('nuevo_plan','PlanesController::nuevoPlan');

$routes->post('guardar_plan','PlanesController::guardarPlan');
$routes->view('nuevo_cliente','form_nuevo_cliente');
$routes->post('guardar_cliente','ClientesController::guardarCliente');

$routes->get('buscar_cliente/(:num)','ClientesController::buscarCliente/$1');
$routes->post('modificar_cliente','ClientesController::modificarCliente');
$routes->get('eliminar_cliente/(:num)','ClientesController::eliminarCliente/$1');

$routes->get('eliminar_plan/(:num)','PlanesController::eliminarPlan/$1');
$routes->get('buscar_plan/(:num)','PlanesController::buscarPlan/$1');
$routes->post('modificar_plan','PlanesController::modificarPlan');