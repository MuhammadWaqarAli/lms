<?php
session_start();
// if(isset($_SESSION['user_id']) && $_SESSION['user_id']){
// 	echo "session created";
// }else{
// 	echo "not created";
// }
if(! (isset($_SESSION['user_id'])) && ! ($_SESSION['user_id'])){
	header('location: login.php');
}

?>