<?php /* Smarty version Smarty-3.0.7, created on 2015-01-06 13:54:44
         compiled from "application/views\admin/user/user.php" */ ?>
<?php /*%%SmartyHeaderCode:629954abdb14eccf40-62609343%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef4270af7164a99b14d5e24a1dafbd5d7e72fd09' => 
    array (
      0 => 'application/views\\admin/user/user.php',
      1 => 1420548648,
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
  'nocache_hash' => '629954abdb14eccf40-62609343',
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
    <li>用户管理</li>
    <li class="active"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</li>
  </ol>
</div>

<div class="row">
  <div class="col-md-12">
    <h1 class="page-header"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</h1>
  </div>
</div>

<div class="row">
	<div class="col-md-12">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>登录名</th>
				<th>角色</th>
				<th>手机</th>
				<th>邮箱</th>
				<th>注册时间</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>admin</td>
				<td>admin</td>
				<td>18258029748</td>
				<td>wqcsimple@foxmail.com</td>
				<td>2014-12-05</td>
			</tr>
			<tr>
				<td>admin</td>
				<td>admin</td>
				<td>18258029748</td>
				<td>wqcsimple@foxmail.com</td>
				<td>2014-12-05</td>
			</tr>
			<tr>
				<td>admin</td>
				<td>admin</td>
				<td>18258029748</td>
				<td>wqcsimple@foxmail.com</td>
				<td>2014-12-05</td>
			</tr>
			<tr>
				<td>admin</td>
				<td>admin</td>
				<td>18258029748</td>
				<td>wqcsimple@foxmail.com</td>
				<td>2014-12-05</td>
			</tr>
			<tr>
				<td>admin</td>
				<td>admin</td>
				<td>18258029748</td>
				<td>wqcsimple@foxmail.com</td>
				<td>2014-12-05</td>
			</tr>
			<tr>
				<td>admin</td>
				<td>admin</td>
				<td>18258029748</td>
				<td>wqcsimple@foxmail.com</td>
				<td>2014-12-05</td>
			</tr>
		</tbody>
		<thead>
			<tr>
				<th>登录名</th>
				<th>角色</th>
				<th>手机</th>
				<th>邮箱</th>
				<th>注册时间</th>
			</tr>
		</thead>
	</table>
	<nav>
	  <ul class="pagination pull-right">
	    <li><a href="#">&laquo;</a></li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li><a href="#">&raquo;</a></li>
	  </ul>
	</nav>
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
