<?php defined('SYSPATH') or die('No direct script access.');

abstract class Posts {

  public static function get()
  {
    $posts = ORM::factory('Post');
    foreach($posts as $post)
    {
      $post->count = '1';
    }

    return $posts;
  }
}

// Posts helper
