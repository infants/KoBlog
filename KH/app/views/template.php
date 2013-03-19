<!DOCTYPE html>
<html>
<head>
  <title>Blogs</title>
  <meta charset='utf-8'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,400&subset=latin-ext'
    rel='stylesheet'
    type='text/css'>
  <link href='/assets/css/kube.css' rel='stylesheet' type='text/css'>
  <link href='/assets/css/style.css' rel='stylesheet' type='text/css'>
</head>
<body>

<div id='header'>
  <div id='navi'>
    <ul>
      <li><?=HTML::anchor('', 'Sākums')?></li>
      <li><?=HTML::anchor('', 'Kautkas')?></li> 
      <li><?=HTML::anchor('', 'Vēl kaut kas!')?></li>
      <li><?=HTML::anchor('about', 'Par mani')?></li>
   </ul>
  </div>
</div>

<div id='content'>
  <?=$content?>
</div>

<div id='footer'>
</div>

</body>
</html>
