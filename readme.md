# Prueba PHP - Laravel

## Entregables

* Migraciones

<code>
  <p>/database/migrations/2016_08_20_203854_Tienda.php</p>
  <p>/database/migrations/2016_08_20_204737_Producto.php</p>
</code>
 
* Modelos

<code>
  /app/Tienda.php<br>
  /app/Producto.php<br>
  /app/Services.php
</code> 

* Vistas

<code>
  /resources/view/home.blade.php<br>
  /resources/view/tienda/*<br>
  /resources/view/producto/*<br>
  /resources/view/layouts/*<br>
  /resources/view/errors/*<br>
</code>  

* Controladores

<code>
  /app/Http/Controllers/ProductoController.php<br>
  /app/Http/Controllers/TiendaController.php<br>
  /app/Http/Controllers/ServicesController.php<br>
</code>   

* Servicios

<code>
  http://<SERVER>/services/stores<br>
  http://<SERVER>/services/articles<br>
  http://<SERVER>/services/articles/<STORE_ID><br><br>
  
  Debe Autenticarse utilizando Basic Authentication via HTTP Headers
</code>

* PHPUnit

<code>
  /tests/ServicesTest.php
</code>

