<?php

namespace myLibary;

use myLibary\core\Db;

class User extends Db
{
  public function __construct(){
    echo __CLASS__;
  }
}