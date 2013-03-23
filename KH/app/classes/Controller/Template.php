<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Template extends Kohana_Controller_Template {

  public $template = 'Template';

  public function before()
  {
    parent::before();
    $config = Kohana::$config->load('koblog');
    $this->template->content = "Nav nekas!";
    $this->template->scripts      = $config->scripts;
    $this->template->stylesheets  = $config->stylesheets;
  }

}
