<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends TT_Controller {

  public function index_get(){
    $this->render('home',[
    ],[
      'layout' => 'layout'
    ]);
  }
  
}
