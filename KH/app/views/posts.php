<?php foreach($posts as $post):?>
  <h3>
<?php
  echo HTML::anchor(URL::site('t_'.$post->id.'_'.$post->slug),
    $post->title);
$dis = new Diskusijam;
$count = (int) $dis->comment_count($post->id);
  if ($count >= 0)
  {
    echo ' ('.$count.')';  
  }
?>

  </h3>
  <p>
<?php
  $end = HTML::anchor(URL::site('t_'.$post->id.'_'.$post->slug),
    ' (Lasīt tālāk)');
  echo Text::limit_words($post->text, 80, $end);
?>

  </p>
  <h6><?=date('Y-m-d', $post->created)?></h6>

<?php endforeach;?>
