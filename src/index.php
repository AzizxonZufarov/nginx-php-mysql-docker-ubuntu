<?php
//phpinfo();


$con = mysqli_connect("mysql","root","root");

//echo '<pre>';
//var_dump($con);

$con->query("CREATE DATABASE `db`");