<?php if(Auth::instance()->logged_in()):?>
  Sveiki, 
  <?=HTML::anchor('user/profile', Auth::instance()->get_user()->username)?>
  <?=HTML::anchor('user/logout', 'Iziet')?>
<?php else:?>
  Sveiki, Viesi. 
  <?=HTML::anchor('user/login', 'Ienākt')?>
<?php endif;?>

