<?php
session_start();
include('dbconfig.php');
if($connection)
{
}
else
{
    header("Location: dbconfig.php");
}
?>