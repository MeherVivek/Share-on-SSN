<?php
include_once("config.php");
//destroy facebook session if user clicks reset
if(isset($_GET["reset"]) && $_GET["reset"]==1)
{
	$facebook->destroySession();
	header("Location: ".$homeurl);
}

if(!$fbuser)
{
		$fbuser = null;
		$loginUrl = $facebook->getLoginUrl(array('redirect_uri'=>$homeurl,'scope'=>$fbPermissions));
		echo '<a href="'.$loginUrl.'"><img src="images/facebook-login.png"></a>'; 
		
}else{

?>
<!DOCTYPE html>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <style>
	body
	{
background-color:#375794;
	 }
	</style>

<link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
<meta charset=utf-8 />
<title>Share Your designs..!!</title>
<script>
     function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result)
                        .width(150)
                        .height(200);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }</script>
<title>JS Bin</title>
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<style>
  article, aside, figure, footer, header, hgroup, 
  menu, nav, section { display: block; }
</style>
</head>
<body>
<div class="fbpagewrapper" style="margin-top:15%;">
<div id="fbpageform" class="pageform">
<form action="process.php" method="post" enctype="multipart/form-data" name="form" id="form">
<h1>Share Your designs on FACEBOOK</h1>
<p> The image will be posted on your profile wall! .</p>
<label>Design
<span class="small">Select Designs</span>
</label>
  <input type='file' onchange="readURL(this);"  name="pictureFile" id="pictureFile"  />
    <img id="blah" src="#" alt="your image" style="width:100px; height:100px; margin-left:25%" /><br /><br/>
	<label>Message
<span class="small">Write something to post!</span>
</label>
<textarea name="message"></textarea>
<button type="submit" class="btn btn-info" id="submit_button">Post Picture</button>
<div class="spacer"></div>
<a href="?reset=1">Facebook Logout</a>
</form>
 
<!-- <a href="http://www.tumblr.com/share/link?url=http%3A%2F%2Fwww.tumblr.com%2Fexamples%2Fshare%2Fsharing-links-to-articles.html&name=Sharing%20links%20to%20articles&description=This%20example%20uses%20an%20advanced%20Tumblr%20Button%20in%20the%20article's%20footer%20to%20let%20Tumblr%20users%20easily%20share%20a%20beautifully%20formatted%20link%20to%20this%20article%20on%20their%20blogs." title="Share on Tumblr" style="display:inline-block; text-indent:-9999px; overflow:hidden; width:129px; height:20px; background:url('//platform.tumblr.com/v1/share_3.png') top left no-repeat transparent;">Share on Tumblr</a>-->
</div>
</div>
</body>
</html>
<?php
}
?>

</body>
</html>
