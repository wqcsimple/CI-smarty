<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$config = array(
        'login'  => array(
                      array(
	                        'field' => 'username',
	                        'label' => '用户名',
	                        'rules' => 'required'
                      	),
                      array(
                      		'field' => 'password',
                      		'label' => '密码',
                      		'rules' => 'required'
                      	)
                    ),


);

