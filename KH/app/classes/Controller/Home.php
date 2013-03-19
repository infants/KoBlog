<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

  public $template = 'template';

  public function action_index()
  {
    $posts = ORM::factory('Post')
      ->order_by('created', 'DESC')
      ->find_all();
    $this->template->content = View::factory('posts')
      ->bind('posts', $posts);
  
  }

  public function action_new()
  {
    $this->template->content = View::factory('new');
  }

  public function action_process()
  {
    if ($this->request->post())
    {
      $post = ORM::factory('Post');
      $post->title = $this->request->post('title');
      $post->text = $this->request->post('text');
      $post->created = time();
      if ($post->save())
      {
        $this->redirect('');
      } else {
        echo "Something is wrong";
      }
    }
  }

  public function action_test()
  {
    $this->auto_render = FALSE;
    $posts = Posts::get();
    print_r($posts);
  }

}

// Controller_Home
