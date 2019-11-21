<?php $sql = "select json from vpoints_pics";
$dbConnnect = mysqli_connect('localhost:3306', 'vpoint', 'kcKkRHkm6wwt41cm', 'vpoints');
$result = mysqli_query($dbConnnect, $sql);
mysqli_close($dbConnnect);
$rows = [];
while ($row = mysqli_fetch_array($result)) {
    $rows[] = $row;
}
$piclist = [];
foreach ($rows as $row) {
    $piclist[] = $row[0];
}

echo json_encode( $piclist );
?>