<?php 
//Connect to MYSQL 
$con = mysqli_connect("localhost","dbuser","password","shoutit");

//text connection
if(mysqli_connect_errno()){
    echo 'failed to connect to Mysql '.mysqli_connect_error();
}