<?php

	ini_set('display_errors',1);
    error_reporting(E_ALL);


	function logIn($username, $enteredpass, $ip) { //start login
		require_once("connect.php");

		$username = mysqli_real_escape_string($link, $username); 
		//$enteredpass = mysqli_real_escape_string($link, $enteredpass);
		$loginString = "SELECT * FROM tbl_user WHERE user_name='{$username}'";
		$user_set = mysqli_query($link, $loginString);
		if(mysqli_num_rows($user_set)) { //start user set
			$found_user = mysqli_fetch_array($user_set, MYSQLI_ASSOC); 
			$id = $found_user['user_id'];
			$_SESSION['user_id'] = $id;
			$_SESSION['user_name'] = $found_user['user_name'];
			$_SESSION['user_lastlogin'] = $found_user['user_lastlogin']; 
			//$storedhash= $_SESSION['user_hash'] = $found_user['user_hash'];
		
			$userinfo = "SELECT * FROM tbl_user WHERE user_id={$id}";
			$data = mysqli_query($link, $userinfo);
			
			if(!is_string($data)) { //start query
    		while ($row = mysqli_fetch_array($data)) { //start row
				
       		 //$attempts = $row['user_attempts'];
			 $logins = $row['user_logins'];
			 
			 //if($attempts>3){ //start lockout
			
				//$lockoutMsg = "You have used up all your login attempts. Please come back later."; 
				//return $lockoutMsg;
				//redirect_to("admin_login.php");
				
		/*end lockout*/	//}else 
		
		if(mysqli_query($link, $loginString)) { //start login
		
				$updateString = "UPDATE tbl_user SET user_ip= {$ip} WHERE user_name={$username}";
				$updateQuery = mysqli_query($link, $updateString);
				//if(password_verify($enteredpass, $storedhash)){
				
				//Boink. So I got the switching between the admin panel/edit user thing down. The only problem I'm running into is being unable to log out and log right back in inside the same tab, which is one that's persisted ever since I started coding this thing. I thought I could be smart and fix it on my own, but I may have to bug you about it during class. I'm not sure if it has to do with the termination of the session, some .ini stuff I don't fully understand, or just faulty code--but I'm pretty sure it's not the latter at this point, since I've tinkered with most of the stuff that could possibly break it and it remains the same. I dunno lol.
				
				if($logins>=1){
				redirect_to("admin_index.php");
				}
				if($logins<1){
				$updateCount = "UPDATE tbl_user SET user_logins = user_logins+1 WHERE user_name='{$username}'";
				$countQuery = mysqli_query($link, $updateCount);
				redirect_to("admin_edituser.php");
				}
				
				//So for this, the logic was pretty simple and I barely needed any external resources. It was just a simple if statement checking the amount of previous logins and determining where the user will go.
				
				//}
				
			/*end login*/}else{//start error msg
			
			//yeah still can't get that login attempt thing down RIP me.
			
			$message = "Username/Password were incorrect.<br>Please check your spelling and capitalization.";
			return $message;
			//$attempts++;
			//$updateAttempts = "UPDATE tbl_user SET user_attempts = {$attempts} WHERE user_name={$username}"; 
			//$updateDb = mysqli_query($link, $updateAttempts);
			redirect_to("admin_login.php");
			} //end error msg
	
			}//end row
			}//end query
			
		
		mysqli_close($link);
		
	}//end user set
	} //end login 
	
?>