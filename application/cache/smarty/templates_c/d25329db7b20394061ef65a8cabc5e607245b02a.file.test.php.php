<?php /* Smarty version Smarty-3.0.7, created on 2014-12-26 15:44:46
         compiled from "application/views/test/test.php" */ ?>
<?php /*%%SmartyHeaderCode:700227417549d11eedd0b17-06244656%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd25329db7b20394061ef65a8cabc5e607245b02a' => 
    array (
      0 => 'application/views/test/test.php',
      1 => 1419579885,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '700227417549d11eedd0b17-06244656',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
<script type="text/javascript" src="http://libs.useso.com/js/jquery/2.1.1/jquery.js"></script>

</head>
<body>
<form class="form">
	name:<input type="text" name="title" /><br>
	email:<input type="text" name="email" /><br>
	content:<input type="text" name="content" /><br>	
	<input type="button" name="submit" value="submit">
</form> 
<div class="box"></div>


<script type="text/javascript" src="<?php echo base_url('static/js');?>
/test.js"></script>
</body>
</html>