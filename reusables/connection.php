<?php 
  $connect = mysqli_connect('localhost', 'root', 'root', 'ontariomuseums');
  if(!$connect){
    echo 'Error code: ' . mysqli_connect_errno();
    echo 'Error message: ' . mysqli_connect_error();
    exit;
  }