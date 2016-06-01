<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2016/5/30
 * Time: 14:45
 */
namespace Admin\Controller;
use Think\Controller;

class IndexController extends Controller
{
    public  function login()
    {
        if(IS_POST)
        {
           $name = I('post.name');
           $pwd = I('post.pwd');
            $UserModel = D('Admin');

        }else
        {
            $this->display();
        }

    }
}