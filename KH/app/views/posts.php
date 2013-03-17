<?php foreach($posts as $post):?>
  <h3><?=HTML::anchor(URL::site('t_'.$post->id.'_'.$post->slug),
                                $post->title)?></h3>
  <p><?=$post->text?></p>
  <h6><?=date('Y-m-d', $post->created)?></h6>
<?php endforeach;?>
