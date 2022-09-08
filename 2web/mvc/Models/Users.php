<?php

namespace Users;

class Users
{
  public $username;
  public $firstname;
  public $lastname;
  private $password;

  function getPassword() {
    return $this->password;
  }
}