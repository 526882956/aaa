<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018-11-14
 * Time: 11:08
 */
header("content-type: text/html; charset=utf-8");
$link = mysql_connect("localhost", "root", "123456789") or die("不能连接数据库" . mysql_error());
mysql_select_db("test", $link);

mysql_query("set character set 'utf8'");//读库
mysql_query("set names 'utf8'");
mysql_select_db("$database",$link);

if (!$link) {
    echo "连接失败";
}

$sql = "select * from db_test  ";
$result = mysql_query($sql);

$data = array();
while ($row = mysql_fetch_array($result)) {
    $data[] = $row;
}

echo json_encode($data,JSON_UNESCAPED_UNICODE);