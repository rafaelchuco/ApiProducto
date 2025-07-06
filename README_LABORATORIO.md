# 🚀 API de Productos - Laravel

## Laboratorio 16: Desarrollo de Aplicaciones en Internet - Servicios en Laravel

### ✅ **Estado del Proyecto: COMPLETADO**

---

## 📋 **Resumen de Implementación**

✅ **Proyecto Laravel ApiProducto** - Creado con Composer  
✅ **Base de datos MySQL** - Configurada con `db_productos`  
✅ **Modelo Producto** - Con campos: nombre, marca, precio, stock, id_categoria  
✅ **Controlador ProductoController** - Con todos los métodos CRUD  
✅ **Rutas configuradas** - Para todos los endpoints del API  
✅ **Middleware CSRF** - Configurado para excluir rutas del API  
✅ **Migraciones ejecutadas** - Tabla productos creada exitosamente  
✅ **Datos de prueba** - Insertados para testing  
✅ **Pruebas realizadas** - Todos los endpoints funcionando  

---

## 🗄️ **Configuración de Base de Datos**

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=db_productos
DB_USERNAME=root
DB_PASSWORD=mi_contraseña
```

**Contenedor Docker MySQL:** ✅ Funcionando  
**Puerto:** 3306  
**Estado:** Running  

---

## 🌐 **Endpoints del API**

| Método | Endpoint | Descripción |
|--------|----------|-------------|
| GET | `/productos` | Listar todos los productos |
| GET | `/productos/{id}` | Obtener producto específico |
| POST | `/productos` | Crear nuevo producto |
| PUT | `/productos/{id}` | Actualizar producto |
| DELETE | `/productos/{id}` | Eliminar producto |

---

## 🚀 **Instrucciones de Uso**

### 1. **Iniciar el Servidor**
```bash
cd "/home/rafael/tmp/examen 16/ApiProducto"
php -S localhost:8000 -t public
```

### 2. **Probar el API**
- **Opción A:** Usar archivo `api_tests_complete.http` con REST Client extension
- **Opción B:** Usar herramientas como Postman, Insomnia, etc.
- **Opción C:** Usar comandos curl

### 3. **Ejemplo con curl**
```bash
# Listar productos
curl -X GET http://localhost:8000/productos

# Crear producto
curl -X POST http://localhost:8000/productos \
  -H "Content-Type: application/json" \
  -d '{"nombre":"Test","marca":"Test","precio":100,"stock":10,"id_categoria":1}'
```

---

## 📊 **Estructura de Datos**

### **Tabla: productos**
```sql
+-------------+-----------------+------+-----+---------+----------------+
| Field       | Type            | Null | Key | Default | Extra          |
+-------------+-----------------+------+-----+---------+----------------+
| id_producto | bigint unsigned | NO   | PRI | NULL    | auto_increment |
| nombre      | varchar(255)    | NO   |     | NULL    |                |
| marca       | varchar(255)    | NO   |     | NULL    |                |
| precio      | decimal(10,2)   | NO   |     | NULL    |                |
| stock       | int             | NO   |     | NULL    |                |
| id_categoria| bigint unsigned | NO   |     | NULL    |                |
| created_at  | timestamp       | YES  |     | NULL    |                |
| updated_at  | timestamp       | YES  |     | NULL    |                |
+-------------+-----------------+------+-----+---------+----------------+
```

### **Ejemplo de Response JSON**
```json
{
  "status": "true",
  "message": "Consulta exitosa",
  "products": [
    {
      "id_producto": 1,
      "nombre": "Laptop Dell XPS 13",
      "marca": "Dell",
      "precio": "1299.99",
      "stock": 15,
      "id_categoria": 1,
      "created_at": null,
      "updated_at": null
    }
  ]
}
```

---

## 🧪 **Resultados de Pruebas**

### ✅ **Todas las pruebas pasaron exitosamente:**

1. **GET /productos** - Status: 200 ✅
2. **GET /productos/1** - Status: 200 ✅  
3. **POST /productos** - Status: 200 ✅
4. **PUT /productos/{id}** - Status: 200 ✅
5. **DELETE /productos/{id}** - Status: 200 ✅

---

## 📁 **Archivos Importantes**

- `app/Models/Producto.php` - Modelo de datos
- `app/Http/Controllers/ProductoController.php` - Lógica del API
- `routes/web.php` - Definición de rutas
- `bootstrap/app.php` - Configuración middleware CSRF
- `.env` - Configuración de base de datos
- `api_tests_complete.http` - Archivo de pruebas
- `test_api.php` - Script de pruebas automatizado

---

## 🎯 **Laboratorio Completado Exitosamente**

El proyecto cumple con todos los requerimientos del Laboratorio 16:
- ✅ Modelo Producto configurado correctamente
- ✅ Controlador con métodos CRUD implementados
- ✅ Rutas del API funcionando
- ✅ Excepciones CSRF configuradas
- ✅ Base de datos conectada y funcionando
- ✅ Todos los endpoints probados y verificados

**🚀 El API está listo para ser utilizado!**
