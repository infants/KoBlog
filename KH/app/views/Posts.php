<?php foreach($posts as $post):?>
<div class="post">
<h2>
  <?=HTML::anchor(URL::post($post->id, $post->slug), $post->title)?>
</h2>

<h5>
  <?=date('Y-m-d', $post->created)?>

<?php if($post->comments->count()>0):?>
    <?=HTML::anchor(URL::comments($post->id, $post->slug),
      '('.$post->comments->count().' komentāri)')?>
<?php endif;?>
</h5>

<p>
<?php
  $end = HTML::anchor(URL::site('t_'.$post->id.'_'.$post->slug),
    ' (Lasīt tālāk)');
  echo Text::limit_words($post->text, 80, $end);
?>

</p>
</div>

<?php endforeach;?>
