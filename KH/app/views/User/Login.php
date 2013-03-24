<div id='user'>
<p>
Neesi reģistrējies? <?=HTML::anchor('user/register', 'Dari to!')?>
</p>

<?=Form::open('')?>
<fieldset>
<legend>Login</legend>
<?=Form::hidden('csrf', Security::token())?>
<label for='username'>Lietotājvārds: </label>
<?=Form::input('username', '')?>

<label for='password'>Parole: </label>
<?=Form::password('password', '')?>

<?=Form::submit('submit', 'Ienākt')?><br>
<?=Form::close()?>

</fieldset>
</div>
