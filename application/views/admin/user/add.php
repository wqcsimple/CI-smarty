<!--{extends file='admin/base/menu.php'}-->

<!--{block name="main"}-->
<div class="row">
  <ol class="breadcrumb">
    <li><a href=""><span class="glyphicon glyphicon-home"></span></a></li>
    <li class="active"><!--{$title}--></li>
  </ol>
</div>

<div class="row">
  <div class="col-md-12">
    <h2 class="page-header"><!--{$title}--></h2>
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
<!--{/block}-->
