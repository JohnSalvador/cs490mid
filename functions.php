<?php
function post($key, $default = NULL) {
	if(isset($_POST[$key]) && !empty($_POST[$key]) )
		return $_POST[$key];
	else
		return $default;
}

function curl($fields) {
	//echo "testcurl";
	//print_r($fields);
	//$url = "http://web.njit.edu/~vc235/cs490/index.php";
	$url = "http://web.njit.edu/~jbs44/cs490back/index.php";
	$chandle = curl_init();
	curl_setopt($chandle, CURLOPT_URL, $url);
	curl_setopt($chandle, CURLOPT_POST, true);
	curl_setopt($chandle, CURLOPT_POSTFIELDS, http_build_query($fields));
	curl_setopt($chandle, CURLOPT_RETURNTRANSFER, true);
	$response = curl_exec($chandle);
	curl_close($chandle);

	//print_r($response);
	return $response;
}

function njit_curl($user,$pass) {
	$fields = array(
	 	"user" => $user,
	 	"pass" => $pass,
	 	"uuid" => "0xACA021");
	$ckfile=tempnam("","CURLCOOKIE");
	$ch = curl_init();
	//curl_setopt($ch, CURLOPT_URL, "https://webmail.njit.edu/saml/getAction.php");
	curl_setopt($ch, CURLOPT_URL, "https://cp4.njit.edu/cp/home/login");
	curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($fields));
	curl_setopt( $ch, CURLOPT_COOKIESESSION, true );
	curl_setopt( $ch, CURLOPT_COOKIEJAR, $ckfile );
	curl_setopt( $ch, CURLOPT_COOKIEFILE, $ckfile );
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	$result = curl_exec($ch);
	curl_close($ch);
	
	//echo 'test';
	//print_r($ckfile);
	//echo '<!-- /*'.$result.'*/-->';
	//return $result=="gmail";
	return strpos($result, "loginok.html") !== false;  
}

function njit_logout() {
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, "http://cp4.njit.edu/up/Logout?uP_tparam=frm&frm=");
	curl_exec($ch);
	curl_close($ch);
}
?>