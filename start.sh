#!/bin/bash

echo "🚀 Inicializando el proyecto API Producto..."

# Instalar dependencias si es necesario
echo "📦 Instalando dependencias..."
composer install

# Generar key de la aplicación
echo "🔑 Generando clave de aplicación..."
php artisan key:generate

# Ejecutar migraciones (opcional)
echo "📊 Ejecutando migraciones..."
# php artisan migrate

# Iniciar el servidor de desarrollo
echo "🌐 Iniciando servidor de desarrollo..."
echo "Tu API estará disponible en: http://localhost:8000"
echo ""
echo "📋 Endpoints disponibles:"
echo "  GET    /productos        - Listar todos los productos"
echo "  GET    /productos/{id}   - Obtener un producto específico"
echo "  POST   /productos        - Crear un nuevo producto"
echo "  PUT    /productos/{id}   - Actualizar un producto"
echo "  DELETE /productos/{id}   - Eliminar un producto"
echo ""
echo "💡 Usa el archivo api_tests.http para probar los endpoints"
echo ""

php artisan serve
