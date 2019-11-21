<?php
$pic = $_POST['pic'];
$sql = "select * from vpoints_pics where pic = '$pic'";
$dbConnnect = mysqli_connect('localhost:3306', 'vpoint', 'kcKkRHkm6wwt41cm', 'vpoints');
$result = mysqli_query($dbConnnect, $sql);
mysqli_close($dbConnnect);
$rows = [];
while ($row = mysqli_fetch_array($result)){
    $rows[] = $row;
}

$re = [];
foreach ($rows[0] as $k => $row){
    if (($row == 1 or $row == 0) && is_numeric($k)){
        $re[] = (int)$row;
    }
}
array_shift($re);
$re = json_encode($re);
echo $re;


