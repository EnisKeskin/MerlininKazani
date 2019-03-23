<?php

unset($_SESSION['username']);
unset($_SESSION['userpass']);
unset($_SESSION['userlogin']);
unset($_SESSION['userid']);
unset($_SESSION['adsoyad']);
setcookie('username', 0, time() - 3600);
setcookie('userpass', 0, time() - 3600);
setcookie('userlogin', 0, time() - 3600);
setcookie('adsoyad', 0, time() - 3600);
setcookie('userid', 0, time() - 3600);
header('location:' . site_url('index'));    