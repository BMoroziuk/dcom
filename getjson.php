<?php
$pic = $_POST['pic'];
$sql = "select json from vpoints_pics where pic = '$pic'";
$dbConnnect = mysqli_connect('localhost:3306', 'vpoint', 'kcKkRHkm6wwt41cm', 'vpoints');
$result = mysqli_query($dbConnnect, $sql);
mysqli_close($dbConnnect);
$rows = [];
while ($row = mysqli_fetch_array($result)){
    $rows[] = $row;
}
echo $rows[0]['json'];
