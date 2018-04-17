<?php
   include('php/config.php');
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($db,"select usersUsername from tblUsers where usersUsername = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['usersUsername'];
   
   if(!isset($_SESSION['login_user'])){
      header("location:/bvdo/login.php");
   }
?>