<?php 
session_start(); 

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: index.php?error=User Name is required");
	    exit();
	}else if(empty($pass)){
        header("Location: index.php?error=Password is required");
	    exit();
	}else{
        if ('admin' == $uname && 'admin' == $pass) {
            $_SESSION['user_name'] = 'admin';
            $_SESSION['name'] = 'admin';
            header("Location: home.php");
            exit();
        }else{
            header("Location: index.php?error=Incorect Username or Password");
            exit();
        }
		}
	}
    else{
	header("Location: index.php");
	exit();
}
?>