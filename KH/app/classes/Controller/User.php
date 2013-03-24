<?php defined('SYSPATH') or die('No direct script access.');

class Controller_User extends Controller_Template {

  public function action_register()
  {
    if ($this->request->method() === Request::POST
      && Auth::instance()->logged_in() === FALSE
      && Security::check($this->request->post('csrf')))
    {
      // work with data
      try
      {
        $user = ORM::factory('User')
          ->values($this->request->post(), array('username','email','password'))
          ->create();
        $user->add('roles', ORM::factory('Role', array('name'=>'login')));
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

  public function action_login()
  {
    if (Auth::instance()->logged_in())
    {
      $this->redirect('user/profile');
    }
    else
    {
      if ($this->request->method() == Request::POST
          && Security::check($this->request->post('csrf')))
      {
        $post = $this->request->post();
        $success = Auth::instance()
          ->login($post['username'], $post['password']);
        if ($success)
        {
          $this->redirect('home');
        }
        else
        {
          $this->redirect('user/login');
        }
      }
      else
      {
        $this->template->content = View::factory('User/Login');
      }
    }
  }

  public function action_logout()
  {
    $this->auto_render = FALSE;
    if (Auth::instance()->logged_in())
    {
      Auth::instance()->logout();
    }
    $this->redirect(URL::site());
  }
}
