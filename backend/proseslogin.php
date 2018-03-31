<?php
  session_start();
  if ($_SESSION) {
    header('location:index.php');
  }

  include ("../conn/connection.php");

  if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username) or empty($password)) {
      echo "<div class='alert alert-danger'>You must complete this fields.</div>";
    }else{
      $query = mysqli_query($koneksi, "SELECT * FROM tb_admin where username_admin='$username' and password_admin='$password' ");
      $data = mysqli_fetch_array($query);
      $count = $query -> num_rows;

      if($count == 1){
        $_SESSION['username'] = $data['username_admin'];
        $_SESSION['level'] = $data['level_admin'];
        header('location:index.php');
      }else{
        header('location:login.php');
      }
    }
  }
?>