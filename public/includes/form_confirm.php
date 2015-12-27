<?php
  function confirm_login(){
    $username = $_POST['username'];
    $password = $_POST['password'];

    global $connection;
    $query = "SELECT *
                FROM user
                WHERE username = '{$username}'
                AND password = '{$password}'";
    $confirm_login = mysql_query($query , $connection);
    confirm_query($confirm_login);
    $confirm_login = mysql_fetch_array($confirm_login);
    if($confirm_login)
      redirect_to('content.php');
    else
      redirect_to('temp1.php');

  }
?>
