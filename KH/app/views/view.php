<h3><?=$post->title?></h3>
<p><?=$post->text?></p>
<div id="uc_comment_content"></div>

<script type="text/javascript">

var thread_id = '<?=$post->id?>';
var thread_title = '<?=$post->title?>';

(function() {
  var uc = document.createElement('script');
  uc.type = 'text/javascript';
  uc.async = true;
  uc.src = 'http://diskusijam.lv/comments/1106/841/'+thread_id+'/'+thread_title;
  (document.getElementsByTagName('head')[0]
    || document.getElementsByTagName('body')[0])
    .appendChild(uc);
})();
</script>
