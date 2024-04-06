<?php
/* These are our valid username and passwords */
$user = 'bca';
$pass = 'bca';

if (isset($_POST['username']) && isset($_POST['password'])) {
    
    if (($_POST['username'] == $user) && ($_POST['password'] == $pass)) {    
        
        if (isset($_POST['rememberme'])) {
            /* Set cookie to last 1 year */
            setcookie('username', $_POST['username'], time()+60*60*24*365, '/', '');
            setcookie('password', ($_POST['password']), time()+60*60*24*365, '/', '');   
        
        } else {
            /* Cookie expires when browser closes */
            setcookie('username', $_POST['username'], false, '/', '');
            setcookie('password', ($_POST['password']), false, '/', '');
        }
        header('Location: index.php');
        
    } else {
        echo 'Username/Password Invalid';
    }
    
} else {
    echo 'You must supply a username and password.';
}
?>