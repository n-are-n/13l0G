<?php
include_once('config.php');
$User = $_GET['User_ID'];
$Post = $_GET['Post_ID'];
$Comment = $_GET['Comment'];
$query = "INSERT INTO " . _Table . "(User_ID,Post_ID,Coment) VALUES($User,$Post,'$Comment')";
mysqli_query($conn, $query);
header('Location: ../../home.php?comment=added&id='.$Post);