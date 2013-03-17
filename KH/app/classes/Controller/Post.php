<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Post extends Controller_Template {

  public $template = 'template';

  public function action_view()
  {
    $id = $this->request->param('id');
    $post = ORM::factory('Post', $id);
    if ($post->loaded())
    {
      $this->template->content = View::factory('view')
        ->bind('post', $post);
    }
    else
    {
      $this->redirect('');
    }
  }

}
