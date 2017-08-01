<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2017/6/26
 * Time: 14:07
 */
header("Content-Type:text/html; charset=utf-8");
define("ROOT",dirname(__FILE__));
require "core/tool.php";
require "core/config.php";
require "core/db.class.php";
//print_r($_GET);
if(!$_GET){
    controller("manage","loginView");
}else{
    controller($_GET["c"],"view");
}

