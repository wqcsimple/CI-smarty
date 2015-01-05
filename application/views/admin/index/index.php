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
    <h1 class="page-header"><!--{$title}--></h1>
  </div>
</div>

<div class="row">
	<div class="col-xs-12 col-md-6 col-lg-3">
		<div class="panel panel-blue panel-widget">
			<div class="col-sm-3 col-lg-5 widget-left">
				<em class="glyphicon glyphicon-edit glyphicon-l"></em>
			</div>
			<div class="col-sm-9 col-lg-7 widget-right">
				<div class="large">120</div>
				<div class="text-muted">New Articles</div>
			</div>
		</div>
	</div>

	<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-comment glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">52</div>
							<div class="text-muted">Comments</div>
						</div>
					</div>
				</div>
			</div>

	<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-user glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">24</div>
							<div class="text-muted">New Users</div>
						</div>
					</div>
				</div>
			</div>

	<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<em class="glyphicon glyphicon-stats glyphicon-l"></em>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large">25.2k</div>
							<div class="text-muted">Visitors</div>
						</div>
					</div>
				</div>
			</div>

</div>





<div class="row">
	<div class="col-md-6">
		<div class="panel panel-default">
			<div class="panel-heading">当前用户信息</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<th>用户身份</th>
							<td></td>
						</tr>
						<tr>
							<th>上次登陆时间</th>
							<td></td>
						</tr>
						<tr>
							<th>上次登陆IP</th>
							<td></td>
						</tr>
						<tr>
							<th>当前登陆IP</th>
							<td></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>

	<div class="col-md-6 ">
		<div class="panel panel-default">
			<div class="panel-heading">系统检测</div>
			<div class="panel-body">
			<table class="table table-bordered">
					<tbody>
						<tr>
							<th>操作系统</th>
							<td></td>
						</tr>
						<tr>
							<th>PHP版本</th>
							<td></td>
						</tr>
						<tr>
							<th>MySQL</th>
							<td></td>
						</tr>
						<tr>
							<th>文件上传</th>
							<td></td>
						</tr>
					</tbody>
				</table>
		</div>
		</div>
		
	</div>
</div>
<!--{/block}-->
