<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

  public $template = 'template';

  public function action_index()
  {
    $posts = ORM::factory('Post')->find_all();
    $this->template->content = View::factory('posts')
      ->bind('posts', $posts);
  
  }
}
