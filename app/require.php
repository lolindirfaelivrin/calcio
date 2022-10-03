<?php

//Importa le librerie necessarie

require_once 'lib/Controller.php';
require_once 'lib/Core.php';
require_once 'lib/Database.php';
require_once 'config/config.php';

require_once 'helpers/session.php';
require_once 'helpers/mail.class.php';
require_once 'helpers/template.class.php';

//Inizializzo l'applicazione

$init = new Core();
