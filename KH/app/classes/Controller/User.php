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
          ->values($this->request->post(), array('username','email','password'))
          ->create();
        $this->template->content = View::factory('User/Success');
      }
      catch (ORM_Validation_Exception $e)
      {
        throw new Kohana_Validation_Exception(
          'Something is wrong.'.$e->getMessage()
        );
      }
    } else {
      $this->template->content = View::factory('User/Register');
    }
  }

  public function action_profile()
  {
    if (Auth::instance()->logged_in())
    {
      $this->template->content = View::factory('User/Profile');
    }
    else
    {
      $this->redirect('user/register');
    }
  }
}
