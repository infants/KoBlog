<?php defined('SYSPATH') or die('No direct script access.');

class URL extends Kohana_URL {
  
  public static function post($id, $slug)
  {
    $id = (int) $id;
    $slug = trim($slug);
    return self::site('t_'.$id.'_'.$slug);
  }

  public static function comments($id, $slug)
  {
    $id = (int) $id;
    $slug = trim($slug);
    return self::site('t_'.$id.'_'.$slug.'/#comments');
  }
}

// URL Class 
