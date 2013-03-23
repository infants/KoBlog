<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

  public function action_register()
  {
    if ($this->request->method() === Request::POST
        && Auth::instance()->logged_in() === FALSE)
    {
      // work with data
      try
      {
        $user = ORM::factory('User')
          ->values($this->request->post(), array('username','password'))
          ->create();
      }
      catch (ORM_Validation_Exception $e)
      {
        throw new Kohana_Exception('Something is wrong');
      }
    } else {
      $this->template->content = View::factory('User/Register');
    }
  }
}
