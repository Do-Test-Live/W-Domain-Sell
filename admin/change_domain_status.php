<?php
include ('../config/db_config.php');
$id = $_GET['id'];

$update_query = $con->query("UPDATE `domain_list` SET `status`='1' WHERE id='$id'");
if($update_query)
    header('Location: index.php');