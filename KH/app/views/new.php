<div id="sample">

<?=Form::open('home/process')?>

<?=Form::input('title')?>
<br><br>
<?=Form::textarea('text', '', array('id'=>'text',
                                    'rows'=>'15',
                                    'cols'=>'40',
                                    'style'=>'width:90%;height:300px;',))?>
<br>
<button onclick='buton();'>On</button>
<button onclick='butoff();'>Off</button>
<?=Form::submit('submit', 'submit')?>
<br>
<?=Form::close()?>
</div>

<script type='text/javascript'>
  $('button').click(function(event){
    event.preventDefault();
  });

  $(window).resize(function(){
    alert('test');
  });

  var text;

  buton = (function(){
    text = new nicEditor({
      fullPanel: true,
      iconsPath:'/assets/js/nicEditorIcons.gif',
    }).panelInstance('text',{hasPanel:true});
  });
  butoff = (function(){
    text.removeInstance('text');

</script>

