<?php /* Smarty version Smarty-3.0.7, created on 2015-01-06 13:52:29
         compiled from "application/views\admin/login/login.php" */ ?>
<?php /*%%SmartyHeaderCode:2698154abda8db6eb62-05769051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a66a2a47a2b91a4a68db78cea19fcb587b8e8af4' => 
    array (
      0 => 'application/views\\admin/login/login.php',
      1 => 1420548648,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2698154abda8db6eb62-05769051',
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
  <script src="<?php echo base_url('static/admin');?>
/js/jquery-1.7.1.min.js"></script>
  <script src="<?php echo base_url('static/admin');?>
/js/bootstrap.min.js"></script>

</head>

<body>
  
  <div class="row">

    
    <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
      <div class="login-panel panel panel-default">
        <div class="panel-heading"><?php echo $_smarty_tpl->getVariable('title')->value;?>
</div>
        <div class="panel-body">
          <form role="form" id=="login-form" action="<?php echo site_url('admin/login/do_login');?>
" method="post">
            <fieldset>
              <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" type="text" autofocus="">
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" value="">
              </div>
              <div class="checkbox">
                <label>
                  <input name="remember" type="checkbox" value="Remember Me">记住密码
                </label>
              </div>
              <button href="javascript:;" class="btn btn-primary" id="login-form-submit">登录</button>
            </fieldset>
          </form>
        </div>
      </div>
    </div><!-- /.col-->
  </div><!-- /.row -->  
<script>
$(function(){
  $('#login-form-submit').on('click', function(){
    $("#login-form").submit();
  });
  $("#login-form").on('keypress', ':text,:password', function(event){
    if(event.keyCode==13){
      $("#login-form").submit();
    }
  });

  
});

</script>
 
    


</body>

</html>

