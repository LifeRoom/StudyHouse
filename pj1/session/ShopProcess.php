<?php
$bookid=$_GET['bookid'];
$bookname=$_GET['bookname'];
session_start();
$_SESSION["sn".$bookid]=$bookname;
echo "<br/>success";
echo "<a href='MyHall.php'>goto shop page</a            >";
<F2><F3>
?>
