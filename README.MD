
# mySQLi function
A function to use mysqli_sql procedure functions (Optionally, you can use the mysqli object *see connection.php*). It returns a two dimensional array with the data required. If your query does not expect data, simply pass *true (true, I dont expect data)* as the second argument.

`[SimPIL are a series of ultra-simple examples of how to perform different operations with code. Uncomplicated.]`

## Install
Simply clone the repo and run the code from Apache and mySQL or mariaDB server. Load index.html. 

## Perform
Simply request the document with the function and call it with the query as argument:
```php
require_once(php/connection.php);

$myarray = mysqli_sql('select * from mytable');

foreach ($myarray as $object) {
    // run all the rows
    foreach ($object as $key => $value) {
        // run all the columns
        //{your code here using $key and $value as data}
    }
}
```

## Files
- php/connection.php with the mysqli_sql function
- index.php with the call
- img/logo.svg: only important images are here 


[Text in Spanish here](README_ES.MD)

![](img/logo.svg)
---
`título:` mySQLi function [`SimPIL`] 01/13/24\
`autor:` David G. Bonacho &nbsp;&nbsp;  [www.tizedit.com](https://www.tizedit.com)

