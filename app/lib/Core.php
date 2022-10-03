<?php

/**
 *  CLASSE CORE del FRAMWORK
 */

class Core
{

  protected $currentController = 'Pages';
  protected $currentMethod = 'index';
  protected $params = [];

  public function __construct()
  {
    //print_r($this->getURL());

    $url = $this->getURL();
    //Controlla se il primo valore dell'url è un file presente in Controllers
    if(file_exists('../app/controllers/' . ucwords($url[0]) . '.php')) {
      $this->currentController = ucwords($url[0]);
      unset($url[0]);
    }
    //Importa il controller
    require_once '../app/controllers/' . $this->currentController . '.php';
    $this->currentController = new $this->currentController;

    if(isset($url[1])) {
      if(method_exists($this->currentController, $url[1])) {
        $this->currentMethod = $url[1];
        unset($url[1]);
      }
    }
    //Recupero i parametri
    $this->params = $url ? array_values($url) : [];

    //Chiama un callback con l'array dei parametri
    call_user_func_array([$this->currentController, $this->currentMethod], $this->params);
  }

  public function getURL() {
    if(isset($_GET['url'])) {
      $url = rtrim($_GET['url'], '/');

      $url = filter_var($url, FILTER_SANITIZE_URL);

      $url = explode('/', $url);

      return $url;
    }
  }

}


?>
