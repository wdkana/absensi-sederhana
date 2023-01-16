<?php

class Users
{
  private $user_id;
  private $password;
  private $nama_lengkap;
  private $role;

  function set_login_data($user_id, $password)
  {
    $this->user_id = $user_id;
    $this->password = $password;
  }

  function get_user_id()
  {
    return $this->user_id;
  }

  function get_password()
  {
    return $this->password;
  }
}

?>