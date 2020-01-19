<?php

session_start();
//all the variables defined here are accessible in all the files that include this one
$conn = new mysqli('localhost', 'root', '', 'hospital') or die('Could not connect to mysql'.mysqli_error($conn));
