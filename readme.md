# Prueba PHP - Laravel

## Entregables

* Migraciones

```
  /database/migrations/2016_08_20_203854_Tienda.php
  /database/migrations/2016_08_20_204737_Producto.php
```
 
* Modelos

```
  /app/Tienda.php
  /app/Producto.php
  /app/Services.php
```

* Vistas

```
  /resources/view/home.blade.php
  /resources/view/tienda/*
  /resources/view/producto/*
  /resources/view/layouts/*
  /resources/view/errors/*
```  

* Controladores

```
  /app/Http/Controllers/ProductoController.php
  /app/Http/Controllers/TiendaController.php
  /app/Http/Controllers/ServicesController.php
```

* Servicios

```
  http://<SERVER>/services/stores
  http://<SERVER>/services/articles
  http://<SERVER>/services/articles/<STORE_ID>
  
  Debe Autenticarse utilizando Basic Authentication via HTTP Headers
```

* PHPUnit

```
  /tests/ServicesTest.php
```

