<?php

/**
 *
 */

class Pages extends Controller
{

  public function __construct() {
    $this->pagesModel = $this->model('Pages');
  }

  public function index() {

    $data = [
      'title' => SITENAME,
    ];
    //echo "Index Method";
    $this->view('pagina/index', $data);
  }

  public function about() {
    $data = [
      'title' => 'Informazioni su questo sito',
    ];
    $this->view('pagina/about', $data);
  }  

}
