<?php
require_once __DIR__ . '/../lib/Route.php';
use lib\Route;
use app\controllers\HomeController;

Route::get('/', [new HomeController(), 'index']);
Route::get('/perfil', [new HomeController(), 'perfil']);
Route::get('/lenguaje', [new HomeController(), 'lenguaje']);
Route::get('/contacto', [new HomeController(), 'contacto']);
Route::post('/contacto', [new HomeController(), 'enviar']);


$uri = strtok($_SERVER["REQUEST_URI"], '?');
$method = $_SERVER["REQUEST_METHOD"];
Route::dispatch($uri, $method);

?>