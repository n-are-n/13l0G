<?php
include_once('config.php');
// Update data in database
$ID = $_GET['ID'];
$Title = $_GET['Title'];
$Category = $_GET['Category'];
$Post = $_GET['Post'];
$query = "UPDATE " . Posts . " SET Category_ID = $Category, Title = '$Title', Post = '$Post' WHERE ID = $ID"; // Update the existing records in table
mysqli_query($conn, $query);
header('Location: ../../home.php?Post=Updated');
