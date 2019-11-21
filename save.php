<?php
$pic = $_POST['pic'];
$json = $_POST['json'];
$df = $_POST['diff'];
$diffs = json_decode($df, 1);
$dv = [];

$ro = [];
$val = [];
foreach ($diffs as $k => $diff) {
    $ro[] = $k;
    $val[] = $diff;
}
$ro = implode(', ', $ro);
$val = implode("', '", $val);
$sql = "replace into vpoints_pics(pic, json, $ro) values('$pic','$json', '$val')";
$dbConnnect = mysqli_connect('localhost:3306', 'vpoint', 'kcKkRHkm6wwt41cm', 'vpoints');
mysqli_query($dbConnnect, $sql);
mysqli_close($dbConnnect);
echo $sql;