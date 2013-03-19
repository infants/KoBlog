<?php defined('SYSPATH') or die('No direct script access.');

class Diskusijam {

  public function comment_count($id)
  {
    $conf = Kohana::$config->load('diskusijam');

    $page_apikey = $conf->page_apikey;
    $user_apikey = $conf->user_apikey;

    $api_link  = "http://diskusijam.lv/api/?action=count&page_apikey={$page_apikey}&user_apikey={$user_apikey}&threads={$id}";
    
    return file_get_contents($api_link);
  }
}


