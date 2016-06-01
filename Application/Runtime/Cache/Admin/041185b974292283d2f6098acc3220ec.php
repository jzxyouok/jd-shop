<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>仿京东商城</title>

    <!-- Bootstrap Core CSS -->
    <link href="/git_clone/jd-shop/Public/admin/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="/git_clone/jd-shop/Public/admin/css/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="/git_clone/jd-shop/Public/admin/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="/git_clone/jd-shop/Public/admin/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">后台登录</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo U('index/login');?>">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="name" name="name" type="text" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" value="">
                            </div>
                            <!--<div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>-->
                            <!-- Change this to a button or input when using this as a form -->
                           <input class="btn btn-info" type="submit" value="登录" name="dosubmit" />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="/git_clone/jd-shop/Public/admin/js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="/git_clone/jd-shop/Public/admin/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="/git_clone/jd-shop/Public/admin/js/metisMenu.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="/git_clone/jd-shop/Public/admin/js/sb-admin-2.js"></script>

</body>

</html>