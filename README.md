Image Share
==========

Es un software escrito en php, para ser utilizado bajo servidores web. Permite reducir el tamaño del link final.
Este software permite compartir una imagen puesta en cualquier parte de un servidor evitando tener que mover o redirigir al usuario a otos sitios.

Requerimientos
--------------

 * php5 (>= 5.0)
 * php5-mysql

Funcionamiento
--------------

El usuario ingresa a una url similar a //dominio.com/img/{clave}. El servidor detecta que se requiere una imagen y esta es buscada en una base de datos del servidor, que contiene la ruta de la imagen a buscar.
El servidor captura el contenido de la imagen y luego el contenido es mostrada como si la imagen estuviese en la ruta asignada.

Licencia
--------

Revisar ![LICENSE.txt](https://raw.github.com/alfa30/Image-Share/master/LICENSE.txt)