<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TP商城--后台</title>

    <!-- Bootstrap core CSS -->
    <link href="/git_clone/shop_code/Public/admin/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/git_clone/shop_code/Public/admin/css/bootstrap.css" media="all">
    <link rel="stylesheet" type="text/css" href="/git_clone/shop_code/Public/admin/css/bootstrap-theme.css" media="all">
    <link href="/git_clone/shop_code/Public/admin/datetimepicker/css/datetimepicker.css" rel="stylesheet">
    <link href="/git_clone/shop_code/Public/admin/datetimepicker/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/git_clone/shop_code/Public/admin/css/dashboard.css" rel="stylesheet">
    <link href="/git_clone/shop_code/Public/admin/css/wanglibao.css" rel="stylesheet">
    <link href="/git_clone/shop_code/Public/admin/css/wanglibaogold.css" rel="stylesheet">
    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo ($_STATIC_); ?>/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="admin/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/git_clone/shop_code/Public/admin/js/jquery.min.js"></script>
    <script src="/git_clone/shop_code/Public/admin/js/bootstrap.min.js"></script>
    <script src="/git_clone/shop_code/Public/admin/js/jquery_and_jqueryui.js"></script>
    <script src="/git_clone/shop_code/Public/admin/datetimepicker/js/bootstrap-datetimepicker.js"></script>
    <script src="/git_clone/shop_code/Public/admin/datetimepicker/js/locales/bootstrap-datetimepicker.zh-CN.js"></script>

    <script src="/git_clone/shop_code/Public/admin/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="/git_clone/shop_code/Public/admin/js/plupload.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <!-- // <script src="<?php echo ($_STATIC_); ?>/js/vendor/holder.min.js"></script> -->
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- // <script src="<?php echo ($_STATIC_); ?>/ie10-viewport-bug-workaround.js"></script> -->
      <style>

          form i{
              color: red;
          }
      </style>
  </head>

  <body>
      <nav class="navbar navbar-inverse navbar-fixed-top navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="?c=useraccount&a=index">TP商城-- 后台</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">

            <li><a href="javascript:;">管理员：<?php echo ($CURRENT_USER); ?> </a></li>
            <li><a href="?c=index&a=logout">退出</a></li>
          </ul>
        </div>

      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active">
              <a>后台管理员管理</a>
            </li>
            <li><a href="<?php echo U('user/index');?>">管理员管理</a></li>
            <li><a href="<?php echo U('role/lst');?>">角色管理</a></li>
            <li><a href="<?php echo U('node/lst');?>">节点管理</a></li>
          </ul>
        </div>


<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <div class="top-title">
        <h2 class="sub-header">用户&nbsp;&nbsp;<small>共<?php echo ($total); ?>条数据</small></h2>
        <div class="top-tools">
            <a href="<?php echo U('user/add');?>"class="btn btn-primary">增加用户</a>
        </div>
    </div>
    <div style="clear:both"></div>
    <ul id="myTab" class="nav nav-tabs">
        <li active="form01"class="active"><a href="#">
            管理员</a>
        </li>
    </ul>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th class="row-selected row-selected"><input class="check-all" type="checkbox"></th>
                <th>id</th>
                <th >用户名</th>
                <th >用户邮箱</th>
                <th >添加时间</th>
                <th >管理员状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if(is_array($lists)): foreach($lists as $key=>$item): ?><tr>
                <td><input class="ids" type="checkbox" name="id[]"></td>
                <td><?php echo ($item["aid"]); ?></td>
                <td><?php echo ($item["nickname"]); ?></td>
                <td><?php echo ($item["email"]); ?></td>
                <td><?php echo date("Y-m-d H:i:s",$item['time'])?></td>
                <td><?php if($item['status']==1){echo "启用中";}else{echo "禁用中";}?></td>
                <td>
                    <a href="<?php echo U('user/edit',array('id'=>$item['aid']));?>">修改</a> |
                    <a href="<?php echo U('user/edit',array('id'=>$item['aid']));?>">删除</a>
                </td>
            </tr><?php endforeach; endif; ?>
            </tbody>
        </table>
    </div>
    <div><?php echo ($pageNum); ?></div>
    <!--<script type="text/javascript" src="js/basic.js"></script>-->
      </div>
    </div>
  </body>
</html>