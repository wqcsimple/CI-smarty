<?php

//登录控制器
class Login extends Admin_Controller{
  public function __construct(){
    parent::__construct();
    $this->load->library('form_validation','form');
    $this->load->model('user_model','user');
  }  

  public function index(){
    $data = array(
      'title' => '登录',
    );
    $this->smartyview->render('admin/login/login.php',$data);
  }
  
  public function do_login(){

    if ($this->form_validation->run('login') == false) {
      redirect('admin/login');
    }else{
      $post = $this->input->post(NULL,TRUE);
      $result = $this->user->login($post['username'],$post['password']);
      if ($result) {
        $this->session->set_userdata('user',$result);
        redirect('admin/main/index','refresh');
      }else{
        redirect('admin/login');
      }
    }
  }

  public function logout(){
    $this->session->unset_userdata('user');
    $this->session->sess_destroy();
    redirect('admin/login');
  }
}
