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

<?php 
  $oauth = new Oauth();
  $link = $oauth->authorize();
  $request = Request::factory($oauth->authorize_url)
    ->method('Request::POST')
    ->headers('Authorization', 'Basic '.$oauth->create_token())
    ->headers('Content-Type', 'application/x-www-form-urlencoded;charset=UTF-8')
    ->headers('Accept-Encoding', 'gzip')
    ->headers('grant_type', 'client_credentials');

  $request->execute();

  print_r(Request::$current->headers());
?>

</div>

