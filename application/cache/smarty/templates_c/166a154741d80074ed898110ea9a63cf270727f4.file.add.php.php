<?php /* Smarty version Smarty-3.0.7, created on 2015-01-06 14:03:55
         compiled from "application/views\admin/user/add.php" */ ?>
<?php /*%%SmartyHeaderCode:1800854abdd3b60ca72-78710643%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '166a154741d80074ed898110ea9a63cf270727f4' => 
    array (
      0 => 'application/views\\admin/user/add.php',
      1 => 1420549432,
      2 => 'file',
    ),
    '2f559de5e7cecf11685ea85eacf0d2f233fdfd4e' => 
    array (
      0 => 'application/views\\admin/base/menu.php',
      1 => 1420548648,
      2 => 'file',
    ),
    '6d7d304f3c796d9382cf2e10299640c24b7ef0ec' => 
    array (
      0 => 'application/views\\admin/base/header.php',
      1 => 1420548648,
      2 => 'file',
    ),
    'd16ce7da4f3f86eb672b34f73aeaec4b43a34363' => 
    array (
      0 => 'application/views\\admin/base/base.php',
      1 => 1420548648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1800854abdd3b60ca72-78710643',
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
<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
|后台</title>

<link href="<?php echo base_url('static/admin');?>
/css/bootstrap.css" rel="stylesheet">
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['user']['username'];?>
<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> 管理员</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> 管理我的个人信息</a></li>
							<li><a href="<?php echo site_url('admin/login/logout');?>
"><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
						</ul>
					</li>
				</div>
		</div><!-- /.container-fluid -->
	</nav>
 

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		  <li><a href="<?php echo site_url('admin/main/index');?>
"><span class="glyphicon glyphicon-dashboard"></span>控制台</a></li>	
			<li class="parent ">
				<a href="#sub-item-1" data-toggle="collapse">
					<span class="glyphicon glyphicon-user"></span> 用户管理 <span  class="icon pull-right"><em class="caret"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
					<li>
						<a class="" href="<?php echo site_url('admin/user');?>
">
							<span class="glyphicon glyphicon-share-alt"></span> 所有用户
						</a>
					</li>
					<li>
						<a class="" href="<?php echo site_url('admin/user/add');?>
">
							<span class="glyphicon glyphicon-share-alt"></span> 添加用户
						</a>
					</li>
					
				</ul>
			</li>

			<li class="parent ">
				<a href="#sub-item-2" data-toggle="collapse">
					<span class="glyphicon glyphicon-cog"></span> Dropdown <span  class="icon pull-right"><em class="caret"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-2">
					<li>
						<a class="" href="tables.html">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
						</a>
					</li>
				</ul>
			</li>

			<li class="parent ">
				<a href="#sub-item-3" data-toggle="collapse">
					<span class="glyphicon glyphicon-cog"></span> Dropdown <span  class="icon pull-right"><em class="caret"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-3">
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 1
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 2
						</a>
					</li>
					<li>
						<a class="" href="#">
							<span class="glyphicon glyphicon-share-alt"></span> Sub Item 3
						</a>
					</li>
				</ul>
			</li>
		
		</ul>
	
		<div class="attribution"><code>执行时间:{elapsed_time}s 内存消耗:{memory_usage}</code></div>
	</div><!--/.sidebar-->

 


	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
			
	
<div class="row">
  <ol class="breadcrumb">
    <li><a href=""><span class="glyphicon glyphicon-home"></span></a></li>
    <li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
  </ol>
</div>

<div class="row">
  <div class="col-md-12">
    <h2 class="page-header"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h2>
  </div>
</div>

<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-body">
				<form role="form" action="">
					<div class="form-group">
						<label for="username">用户名*</label>
						<input type="text" class="form-control" name="username" id="">
					</div>
					<div class="form-group">
						<label for="password">密码*</label>
						<input type="text" class="form-control" name="password" id="">
					</div>
					<div class="form-group">
						<label for="cellphone">手机号码</label>
						<input type="text" class="form-control" name="cellphone" id="">
					</div>
					<div class="form-group">
						<label for="email">邮箱</label>
						<input type="text" class="form-control" name="email" id="">
					</div>
					<div class="form-group">
									<label>角色</label>
									<select class="form-control"  name="role">
										<option value="1">管理员</option>
										<option value="2">用户</option>
										<option value="3">读者</option>
									</select>
					</div>
					<div class="form-group">
						<label for="realname">姓名</label>
						<input type="text" class="form-control" name="realname" id="">
					</div>

					<button type="submit" class="btn btn-primary">添加用户</button>
				</form>
			</div>
		</div>
	</div>
</div>






</div>

		
		
	</div>	<!--/.main-->

	<script src="<?php echo base_url('static/admin');?>
/js/jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url('static/admin');?>
/js/bootstrap.min.js"></script>
</body>

</html>
