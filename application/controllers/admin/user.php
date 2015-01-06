<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//user controller
class User extends Admin_Controller{
	public function __construct(){
		parent::__construct();

	}

	public function index(){
		$data = array(
				'title' => '所有用户',
			);
		$this->smartyview->render('admin/user/user.php',$data);
	}

	public function add(){
		$data = array(
				'title' => '添加用户',
			);
		$this->smartyview->render('admin/user/add.php',$data);
	}
}