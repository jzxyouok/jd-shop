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
        <h2 class="sub-header">增加管理员</h2>
        <div class="top-tools">
            <a class="btn btn-default" href="<?php echo U('user/index');?>">返回</a>
        </div>
    </div>
    <div id="myTabContent" class="tab-content" style="margin-top:10px">

        <!-- start 线下合同 -->
        <div class="tab-pane fade in active" id="no2">

            <form class="form-horizontal"   method="post" >

                <div class="form-group">
                    <label class="col-sm-2 control-label">节点名称：</label>
                    <div class="col-sm-7">
                        <input type="text" name="name" value="" class="form-control" placeholder="节点名称">
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-2 control-label">密码：</label>
                    <div class="col-sm-7">
                        <input type="password" name="password" value="" class="form-control" placeholder="密码">
                    </div>
                </div>
                <!--<div class="form-group">
                    <label  for="inputSelect" class="col-sm-2 control-label">选择角色：</label>
                    <div class="col-sm-7">
                        <div class="input-group">
                            <select class="form-control" name="role" id="role">
                                {foreach from=$roleList key=k item=val}
                                <option value="<?php echo ($val["id"]); ?>" ><?php echo ($val["name"]); ?></option>
                                {/foreach}
                            </select>
                      <span class="input-group-btn">
                        <button class="btn btn-default addbank" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                      </span>
                        </div>
                    </div>
                </div>-->
                <!--  <div class="form-group">
                      <label  for="inputSelect" class="col-sm-2 control-label">状态：</label>
                      <div class="col-sm-7">
                          <div class="input-group">
                              <select class="form-control" name="is_del" id="is_del">
                                  {foreach from=$status key=k item=val}
                                  <option value="<?php echo ($k); ?>" ><?php echo ($val); ?></option>
                                  {/foreach}
                              </select>
                        <span class="input-group-btn">
                          <button class="btn btn-default addbank" type="button"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                        </span>
                          </div>
                      </div>
                  </div>-->

                <div class="form-group">
                    <div class="col-sm-7">
                        <button type="button" class="btn btn-primary add_company pull-right" >提交</button>
                    </div>

                </div>


            </form>

        </div>
        <!-- end 线下合同 -->


    </div>
    <hr/>




</div>



<script>

    var saving = false;
    $('#form02').submit(function()
    {
        saving = true;
    });

    window.onbeforeunload = function() {
        if (saving)
            return;
        if(is_form_changed()) {
            return "您的修改内容还没有保存，您确定离开吗？";
        }
    }

</script>

<script>

    $(".add_company").click(function(){
        var name=$('input[name=name]').val();
        var password=$('input[name=password]').val();
        var role=$("#role").val();
        var is_del=$('#is_del').val();
        if($.trim(name)==''){
            throwExc('昵称必须填写');
            return false;
        }
        if($.trim(password)==''){
            throwExc('密码必须填写');
            return false;
        }
        if(isNaN(role)){
            throwExc('请选择角色');
            return false;
        }

        $.post("?c=admin_user&a=add",{
            'role':role,
            'is_del':is_del,
            'password':password,
            'username':name
        },function( response ){
            if(response.error==100) {
                throwExc(response.msg);
                return false;
            }else if(response.error==200) {
                showSucc(response.msg);
                setTimeout("load()",1000);
            }
        },"json");
    });

    function load(){
        window.location.href="?c=admin_user&a=index";
    }


</script>
<!--<script type="text/javascript" src="js/basic.js"></script>-->
      </div>
    </div>
  </body>
</html>