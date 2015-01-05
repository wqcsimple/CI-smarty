<!--{extends file="admin/base/header.php"}-->

<!--{block name="menu"}-->
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
			<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div>
		</form>
		<ul class="nav menu">
		  <li><a href="<!--{site_url('admin/main/index')}-->"><span class="glyphicon glyphicon-dashboard"></span>控制台</a></li>	
			<li class="parent ">
				<a href="#sub-item-1" data-toggle="collapse">
					<span class="glyphicon glyphicon-cog"></span> Dropdown <span  class="icon pull-right"><em class="caret"></em></span> 
				</a>
				<ul class="children collapse" id="sub-item-1">
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
		<div class="attribution">Template by <a href="whis.fayfox">whis_wqc</a></div>
	</div><!--/.sidebar-->

<!--{/block}-->
