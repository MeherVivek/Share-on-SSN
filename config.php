<?php
include_once("inc/facebook.php"); //include facebook SDK
######### edit details ##########
$appId = 'xxxxxxxxxxxxxxxxx'; //Facebook App ID
$appSecret = 'xxxxxxxxxxxxxxxxxx'; // Facebook App Secret
$return_url = 'own link here refer readme';  //return url (url to script)
$homeurl = 'own link here';  //return to home
$fbPermissions = 'publish_stream,user_photos';  //Required facebook permissions
##################################

//Call Facebook API
$facebook = new Facebook(array(
  'appId'  => $appId,
  'secret' => $appSecret,
  'fileUpload' => true,
  'cookie' => true

));
$fbuser = $facebook->getUser();
?>