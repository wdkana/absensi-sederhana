<?php

include("connection.php");
include("users_class.php");

$user = new Users();

if (isset($_POST['login'])) {
  $user->set_login_data($_POST['user_id'], $_POST['password']);

  $user_id = $user->get_user_id();
  $password = $user->get_password();

  $sql = "SELECT * FROM users WHERE user_id='$user_id' AND password='$password'";

  $result = $db->query($sql);

  if ($result->num_rows > 0) {
    while ($data = $result->fetch_assoc()) {
      session_start();
      $_SESSION['user_id'] = $data['user_id'];
      $_SESSION['nama_lengkap'] = $data['nama_lengkap'];
      $_SESSION['role'] = $data['role'];
      $_SESSION['status'] = "login";

      header("location:dashboard/index.php?message=selamat datang di sistem absensi sederhana 🎉");
    }

  } else {
    header("location:index.php?message=silahkan masukan data yang benar 😉");
  }

}

?>