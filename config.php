<?php
/**
 * Created by PhpStorm.
 * User: 52688
 * Date: 2018/9/4
 * Time: 19:21
 */

$link = mysql_connect("222.185.253.48", "root", "root") or die("不能连接数据库" . mysql_error());
mysql_select_db("ecard", $link);
mysql_query("set names utf8");
if (!$link) {
    echo "连接失败----luanma";
}


/**
 * @param $sql
 * @return array
 *
 * 查询数据库函数
 */

function selectSql($sql)
{
        $result = mysql_query($sql);
        $data = array();
        while ($row = mysql_fetch_array($result)) {
                $data[] = $row;
        }
        return $data;
}


/**
 * @param $sql
 * @param $name
 * @return mixed
 * 查询指定字段值
 */
function selectStr($sql,$name)
{
        $result = mysql_query($sql);
        while ($row = mysql_fetch_array($result)) {
                return $row[$name];
        }
}


?>