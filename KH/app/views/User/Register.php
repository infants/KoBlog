<div class='register'>

<?=Form::open()?>
<?=Form::hidden('csrf', Security::token())?>
<br>Username
<?=Form::input('username', '')?>
<br>Email
<?=Form::input('email', '')?>
<br>Password
<?=Form::password('password', '')?>
<br>Password again
<?=Form::password('password_confirm', '')?>
<br>
<?=Form::submit('submit', 'Register')?>

<?=Form::close()?>

</div>

