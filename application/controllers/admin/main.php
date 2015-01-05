<?php

class Main extends Admin_Controller{
  public function __construct(){
    parent::__construct();
  }
  
  public function index(){
    $data = array(
        'title'  => '控制台',
    );
    $this->smartyview->render('admin/index/index.php',$data);  
  }


} 
