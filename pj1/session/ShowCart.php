<?php
echo "<h1>you have bought the books:</h1>";
session_start();
foreach($_SESSION as $key=>$val){
    echo "no:$key:$val<br/>";
}
?>
