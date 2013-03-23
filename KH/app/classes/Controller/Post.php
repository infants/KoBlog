<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Post extends Controller_Template {

  public function action_view()
  {
    $id = $this->request->param('id');
    $post = ORM::factory('Post', $id);
    if ($post->loaded())
    {
      $comments = ORM::factory('Comment')
        ->where('post_id', '=', $id)
        ->find_all();
      $this->template->content = View::factory('View')
        ->bind('post', $post)
        ->bind('comments', $comments);
    }
    else
    {
      $this->redirect('');
    }
  }

}
