<?php

//variables superglobales
// nos dira la dirección de nuestro servidor
echo '<h1>';
echo $_SERVER['SERVER_ADDR'];
echo '</h1>';
//nos dira el nombre de nuestro dominio
echo '<h1>';
echo $_SERVER['SERVER_NAME'];
echo '</h1>';
//nos dira los programas que se estan usando
echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE'];
echo '</h1>';
// nos dira el programa que esta abriendo 
echo '<h1>';
echo $_SERVER['HTTP_USER_AGENT'];
echo '</h1>';
//dirección de mi usuario
echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];
echo '</h1>';
