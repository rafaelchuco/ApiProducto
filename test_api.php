<?php

// Archivo de prueba para el API de productos
// Ejecutar con: php test_api.php

// Configurar la base path
$basePath = __DIR__;
require_once $basePath . '/vendor/autoload.php';

// Cargar el framework Laravel
$app = require_once $basePath . '/bootstrap/app.php';

// Crear el kernel HTTP
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);

// Simular peticiones HTTP
echo "=== PROBANDO API DE PRODUCTOS ===\n\n";

// Test 1: GET /productos
echo "1. GET /productos (Listar todos los productos)\n";
$request = Illuminate\Http\Request::create('/productos', 'GET');
$response = $kernel->handle($request);
echo "Status: " . $response->getStatusCode() . "\n";
echo "Response: " . $response->getContent() . "\n\n";

// Test 2: GET /productos/1
echo "2. GET /productos/1 (Obtener producto con ID 1)\n";
$request = Illuminate\Http\Request::create('/productos/1', 'GET');
$response = $kernel->handle($request);
echo "Status: " . $response->getStatusCode() . "\n";
echo "Response: " . $response->getContent() . "\n\n";

// Test 3: POST /productos
echo "3. POST /productos (Crear nuevo producto)\n";
$data = [
    'nombre' => 'Tablet Samsung',
    'marca' => 'Samsung',
    'precio' => 399.99,
    'stock' => 50,
    'id_categoria' => 2
];
$request = Illuminate\Http\Request::create('/productos', 'POST', $data);
$response = $kernel->handle($request);
echo "Status: " . $response->getStatusCode() . "\n";
echo "Response: " . $response->getContent() . "\n\n";

echo "=== PRUEBAS COMPLETADAS ===\n";
