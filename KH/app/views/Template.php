<!DOCTYPE html>
<html>
<head>
  <title>Blogs</title>
  <meta charset='utf-8'>

<?php foreach($stylesheets as $stylesheet):?>
  <?=HTML::style($stylesheet)."\n"?>
<?php endforeach;?>
<?php foreach($scripts as $script):?>
  <?=HTML::script($script)."\n"?>
<?php endforeach;?>
</head>

<body>
<div id='header'>
  <div id='top'>
    <div id='logo'><img src='/assets/img/logo.png' /></div>
    <div id='userarea'>
      <?=View::factory('User/Area')?>
    </div>
  </div>
  <div id='navi'>
    <ul>
      <li><?=HTML::anchor('', 'Sākums', array('name'=>'top'))?></li>
      <li><?=HTML::anchor('', 'Kautkas')?></li> 
      <li><?=HTML::anchor('', 'Vēl kaut kas!')?></li>
      <li><?=HTML::anchor('about', 'Par mani')?></li>
   </ul>
  </div>
</div>

<div class='clear'></div>

<div id='content'>
  <?=$content?>
</div>

<div id='footer'>
</div>

</body>
</html>
