<?php
session_start();

$userinfo = array(
                'pikachu'=>'pokemon',
				'charmander'=>'master'
                );

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location: index.html ' );
}

if(isset($_POST['username'])) {
    if($userinfo[$_POST['username']] == $_POST['password']) {
        $_SESSION['username'] = $_POST['username'];
		header('Location:welcome.php');
    }else {
        //Invalid Login
    }
}
?>
