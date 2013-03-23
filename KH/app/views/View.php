<div class='post'>
<h3><?=$post->title?></h3>
<p><?=$post->text?></p>

<p>
  <a name='comments'>Komentāri</a>
  <a href='#top' style='float:right'>Uz augšu</a>
  <?php foreach($comments as $comment):?>
    <h5><?=$comment->author?></h5>
    <span><?=$comment->text?></span>
  <?php endforeach;?>
</p>
</post>
