# Función mySQLi
Una función para usar las funciones de procedimiento `mysqli_sql` (Opcionalmente, puedes usar el objeto `mysqli` *ver connection.php*). Devuelve un array bidimensional con los datos requeridos. Si tu consulta no espera datos, simplemente pasa *true (true, no espero datos)* como segundo argumento.

`[SimPIL son una serie de ejemplos ultra-simples de cómo realizar diferentes operaciones con código. Sencillos.]`

## Instalación
Simplemente clona el repositorio y ejecuta el código desde Apache y un servidor mySQL o mariaDB. Carga `index.html`.

## Ejecución
Simplemente solicita el documento con la función y llámala con la consulta como argumento:
```php
require_once(php/connection.php);

$myarray = mysqli_sql('select * from mytable');

foreach ($myarray as $object) {
    // recorre todas las filas
    foreach ($object as $key => $value) {
        // recorre todas las columnas
        //{tu código aquí usando $key y $value como datos}
    }
}
```

## Archivos
- php/connection.php con la función mysqli_sql
- index.php con la llamada
- img/logo.svg: solo las imágenes importantes están aquí

[Text in English here](README.MD)

![](img/logo.svg)

---
`título:` Función mySQLi [`SimPIL`] 01/13/24\
`autor:` David G. Bonacho &nbsp;&nbsp; [www.tizedit.com](https://www.tizedit.com)



