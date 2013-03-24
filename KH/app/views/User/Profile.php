<p>
Tavs lietotājvārds: <?=Auth::instance()->get_user()->username?>
</p>
<p>
Pēdējais apmeklējums: <?=date('Y-m-d H:m:s', 
                              Auth::instance()->get_user()->last_login)?>
</p>
<p>
Tava IP adrese: <?=Request::$client_ip?>
</p>
<p>
User agent: <?=Request::$user_agent?>
</p>
<?=Request::$current?>
