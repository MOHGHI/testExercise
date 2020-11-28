<?php

if(isset($_GET['state'])){
    include("Conndb.php");

mysqli_query($con,"UPDATE `orders` SET `state`={$_GET['state']} WHERE id={$_GET['id']}");

header("location:ind.php");

}
?>