<?php

//fungsi cek login
function login(){
	if(isset($_POST['btnLogin'])){
		$user = $_POST['username'];
		$pass = $_POST['password'];
		if(!is_array($user) && !is_array($pass)){
			$pass = md5($pass);			
			$dataLogin = tampil("SELECT * FROM user WHERE username='$user'");
			if($dataLogin){
				$passLogin = $dataLogin[0]['password'];
				
				if($pass == $passLogin){
					$_SESSION['username'] = $user;
					$_SESSION['LOGIN_AKTIF'] = 'AKTIF';
					return TRUE;
				}
			}
		}
		return FALSE;
	}
}


?>