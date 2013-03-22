<div id="sample">
<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js">
document.ready(function() { nicEditors.allTextAreas() });
</script>

<?=Form::open('home/process')?>

<?=Form::input('title')?>
<br>
<?=Form::textarea('text', '', array('rows'=>'10', 'cols'=>'40'))?>
<br>
<?=Form::submit('submit', 'submit')?>
<br>
<?=Form::close()?>
</div>
