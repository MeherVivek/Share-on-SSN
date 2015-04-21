<?php
include_once("config.php");
if($_POST)
{
	//Post variables we received from user
	$userPhoto 	= $_FILES["pictureFile"]["tmp_name"];
	$userMessage 	= $_POST["message"];
	
	if(strlen($userMessage)<1) 
	{
		//message is empty
		$userMessage = 'No message was entered!';
	}
	
		//HTTP POST request to PAGE_ID/photos with the publish_stream
		$post_url = '/'.$fbuser.'/photos';	
		//posts message on page statues 
		$msg_body = array(
		'source'=>'@'.$userPhoto,
		'message' => $userMessage
		);
	
	if ($fbuser) {
	  try {
			$postResult = $facebook->api($post_url, 'post', $msg_body );
		} catch (FacebookApiException $e) {
		echo $e->getMessage();
	  }
	}else{
	 $loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
	 header('Location: ' . $loginUrl);
	}
	
	//Show sucess message
	if($fbuser && !empty($postResult))
	 {
		 echo '<html><head><title>Message Posted</title><link href="style.css" rel="stylesheet" type="text/css" /></head><body>';
		 echo '<div id="fbpageform" class="pageform" align="center">';
		 echo '<h1>Your message is posted on your facebook wall.</h1>';
		 echo '<a class="button" href="'.$homeurl.'">Back to Main Page</a> <a target="_blank" class="button" href="http://www.facebook.com/'.$fbuser.'">Visit Your Page</a>';
		 echo '</div>';
		 echo '</body></html>';
	 }
}
?>
