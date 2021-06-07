<?php
$conn = OpenCon();
echo "Connected Successfully 1";


$sql = mysqli_query($conn, "select * from category");
if (mysqli_num_rows($sql)) {
   echo "category"; 
}

$qqr = mysqli_fetch_array($sql);

echo $qqr[0];

CloseCon($conn);

?>