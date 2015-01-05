<?php /* Smarty version Smarty-3.0.7, created on 2015-01-05 13:28:41
         compiled from "application/views/admin/base/header.php" */ ?>
<?php /*%%SmartyHeaderCode:70674793254aa21093452f6-26298625%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '992e9b942f559de575c0e7e8e4204e28b5552613' => 
    array (
      0 => 'application/views/admin/base/header.php',
      1 => 1420435714,
      2 => 'file',
    ),
    '051b76758c39e0b7d4b54d96768a324e7a84a9bf' => 
    array (
      0 => 'application/views/admin/base/base.php',
      1 => 1420435705,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70674793254aa21093452f6-26298625',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>后台 -- <?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

<link href="<?php echo base_url('static/admin');?>
/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url('static/admin');?>
/css/styles.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="<?php echo base_url('static/admin');?>
/js/html5shiv.js"></script>
<script src="<?php echo base_url('static/admin');?>
/js/respond.min.js"></script>
<![endif]-->

</head>

<body>


<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Whis</span>Admin</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> User <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
		</div><!-- /.container-fluid -->
	</nav>
 


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
			
		
		
		
	</div>	<!--/.main-->

	<script src="<?php echo base_url('static/admin');?>
/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url('static/admin');?>
/js/bootstrap.min.js"></script>
</body>

</html>
