<?php

$server="localhost";
$username="admin";
$password="admin4321";
$database = "dsc_gmrit";

/* Create database  connection with correct username and password/*
$connect=new mysqli($servername,$username,$password,$database);

/* Check the connection is created properly or not */
if($connect->connect_error)
    echo "Connection error:" .$connect->connect_error;
     ?>
