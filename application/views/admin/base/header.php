<!--{extends file="admin/base/base.php"}-->

<!--{block name="header"}-->
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
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-user"></span> <!--{$smarty.session.user.username}--><span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="#"><span class="glyphicon glyphicon-user"></span> 管理员</a></li>
							<li><a href="#"><span class="glyphicon glyphicon-cog"></span> 管理我的个人信息</a></li>
							<li><a href="<!--{site_url('admin/login/logout')}-->"><span class="glyphicon glyphicon-log-out"></span> 退出</a></li>
						</ul>
					</li>
				</div>
		</div><!-- /.container-fluid -->
	</nav>
<!--{/block}-->
