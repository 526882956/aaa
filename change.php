<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018-11-14
 * Time: 14:15
 */
include "config.php";
header("Content-Type:text/html;charset=utf-8");
if (!$link) {
    echo "连接失败";
}

$sql=mysql_query("update tb_car_inout_record set Site_Desc=REPLACE(Site_Desc,'后门','HM')");
$sql=mysql_query("update tb_car_inout_record set Site_Desc=REPLACE(Site_Desc,'前门','QM')");