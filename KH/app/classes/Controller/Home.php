<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller {

  public function action_index()
  {
    echo "Sanāca!";
    echo Session::instance()->id();
  }
}
