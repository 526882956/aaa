<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 2018-11-14
 * Time: 9:44
 */
include "config.php";
header("Content-Type:text/html;charset=utf-8");
if (!$link) {
    echo "连接失败";
}
//$inout=$_POST['inout'];
//$inout1=$_POST['inout1'];
//$meeting=$_POST['meeting'];
//$meeting1=$_POST['meeting1'];
//$hour=$_POST['hour'];
//$hour1=$_POST['hour1'];
////var_dump($inout,$inout1,$meeting,$meeting1,$hour,$hour1);
//
//if ($meeting<$meeting1 && $hour<$hour1 ){
////$sql = "select * from tb_car_inout_record where (St_Date between '$meeting' and '$meeting1')and (St_Hour between '$hour'and '$hour1')";
//  $sql=  "select * from (select * from tb_car_inout_record where (St_Date between '$meeting' and '$meeting1')and (St_Hour between '$hour'and '$hour1')) temp group by Car_Number having count>1";
//    //$sql =  "select Car_Number,count(*) as count from tb_car_inout_record group by Car_Number having count>=1";
//$result = mysql_query($sql);
//
//$data = array();
//while ($row = mysql_fetch_array($result)) {
//    $data[] = $row;
//}
//   // echo json_encode($data,JSON_UNESCAPED_UNICODE);
//    include_once 'res.html';
////print_r($data);
//
//}else{
//    echo "时间格式不正确,无法查询";
//}
$sql="select * from tb_car_inout_record";
$result = mysql_query($sql);
$data = array();
while ($row = mysql_fetch_array($result)) {
    $data[] = $row;
}
print_r($data);
