<!DOCTYPE html>
<html>
<head>
  <title>Blogs</title>
  <meta charset='utf-8'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400&subset=latin-ext'
    rel='stylesheet'
    type='text/css'>
  <script href='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'
    type='text/javascript'></script>
  <script src='/assets/js/nicEdit.js' type='text/javascript'></script>
  <link href='/assets/css/kube.css' rel='stylesheet' type='text/css'>
  <link href='/assets/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div id='header'>
  <div id='top'>
    <div id='logo'><img src='/assets/img/logo.png' /></div>
    <div id='userarea'>
      <?=HTML::anchor('profile', 'Sveiks!')?>
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
