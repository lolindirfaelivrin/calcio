<?php


//Database parametri

define('DB_HOST', 'localhost');
define('DB_USER', '');
define('DB_PASS', '');
define('DB_NAME', '');
define('DB_TYPE', 'mysql');


//Definisce APP ROOT, radice del percorso dei file
define('APPROOT', dirname(dirname(__FILE__)));

//Definisce URLROOT, url di base del framwork
define('URLROOT', '');

//Definisce il nome del Sito
define('SITENAME', 'PHP MVC Framework');

//Definisci la mail di contattio
define('SITEMAIL', 'demonation@altervista.it');


//Tempo massimo di validità del token per la verifica della email Utente, in secondi
define('VERIFICATOKEN', '3600');
 ?>
