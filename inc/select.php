<?php

$sql='SELECT *FROM users ORDER BY RAND() LIMIT 1 ';
$rseult=mysqli_query($conn,$sql);
$users=mysqli_fetch_all($rseult,MYSQLI_ASSOC);
?>