<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends ORM {

  protected $_has_many = array(
    'comments' => array(),
  );
}
