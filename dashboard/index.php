<?php
session_start();
$user_id = $_SESSION['user_id'];
$nama_lengkap = $_SESSION['nama_lengkap'];
$role = $_SESSION['role'];
$status = $_SESSION['status'];

if ($status != "login") {
  header("location:../index.php?message=silahkan login terlebih dahulu!");
}

if (isset($_POST['logout'])) {
  session_destroy();
  header("location:../index.php?terimakasih sudah berkunjung");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DASHBOARD</title>
</head>

<body>
  <h3>Dashboard</h3>
  <p>
    <?php
    if (isset($_GET['message'])) {
      echo $_GET['message'];
    }
    ?>
  </p>
  <i>Halo <?= $nama_lengkap ?></i>
  <p>Status kepegawaian: <?= $role ?></p>
  <br />

  <form action="" method="POST">
    <button type="submit" name="logout">logout</button>
  </form>

</body>

</html>