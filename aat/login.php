<?php
$log = array
(
    array('ali','reza'),
    array(15,13),

);
$i=0;
$username = $_GET['username'];
$password = $_GET['password'];

foreach ($log[0] as $user)
{

    if($user==$username){


    if($log[1][$i]==$password){



        header("Location: /javan/aat/login_form.php?show=2");
//        readfile('login_form.php');
    }

    else{

        header("Location: /javan/aat/login_form.php?show=1");

    }
}
    $i+=1;
}


// mod_php
if (isset($_SERVER['PHP_AUTH_USER'])) {
    $username = $_SERVER['PHP_AUTH_USER'];
    $password = $_SERVER['PHP_AUTH_PW'];

// most other servers
} elseif (isset($_SERVER['HTTP_AUTHORIZATION'])) {

    if (strpos(strtolower($_SERVER['HTTP_AUTHORIZATION']),'basic')===0)
        list($username,$password) = explode(':',base64_decode(substr($_SERVER['HTTP_AUTHORIZATION'], 6)));

}



?>