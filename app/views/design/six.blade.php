<!DOCTYPE html>
<html lang="">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Title Page</title>
	<!-- Bootstrap CSS -->
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<style type="text/css">
		/*SOCIAL BUTTONS*/
		@import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
		.btn-social{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis}.btn-social :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
		.btn-social.btn-lg{padding-left:61px}.btn-social.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}
		.btn-social.btn-sm{padding-left:38px}.btn-social.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}
		.btn-social.btn-xs{padding-left:30px}.btn-social.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}
		.btn-social-icon{position:relative;padding-left:44px;text-align:left;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;height:34px;width:34px;padding:0}.btn-social-icon :first-child{position:absolute;left:0;top:0;bottom:0;width:32px;line-height:34px;font-size:1.6em;text-align:center;border-right:1px solid rgba(0,0,0,0.2)}
		.btn-social-icon.btn-lg{padding-left:61px}.btn-social-icon.btn-lg :first-child{line-height:45px;width:45px;font-size:1.8em}
		.btn-social-icon.btn-sm{padding-left:38px}.btn-social-icon.btn-sm :first-child{line-height:28px;width:28px;font-size:1.4em}
		.btn-social-icon.btn-xs{padding-left:30px}.btn-social-icon.btn-xs :first-child{line-height:20px;width:20px;font-size:1.2em}
		.btn-social-icon :first-child{border:none;text-align:center;width:100% !important}
		.btn-social-icon.btn-lg{height:45px;width:45px;padding-left:0;padding-right:0}
		.btn-social-icon.btn-sm{height:30px;width:30px;padding-left:0;padding-right:0}
		.btn-social-icon.btn-xs{height:22px;width:22px;padding-left:0;padding-right:0}
		.btn-bitbucket{color:#fff;background-color:#205081;border-color:rgba(0,0,0,0.2)}.btn-bitbucket:hover,.btn-bitbucket:focus,.btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{color:#fff;background-color:#183c60;border-color:rgba(0,0,0,0.2)}
		.btn-bitbucket:active,.btn-bitbucket.active,.open .dropdown-toggle.btn-bitbucket{background-image:none}
		.btn-bitbucket.disabled,.btn-bitbucket[disabled],fieldset[disabled] .btn-bitbucket,.btn-bitbucket.disabled:hover,.btn-bitbucket[disabled]:hover,fieldset[disabled] .btn-bitbucket:hover,.btn-bitbucket.disabled:focus,.btn-bitbucket[disabled]:focus,fieldset[disabled] .btn-bitbucket:focus,.btn-bitbucket.disabled:active,.btn-bitbucket[disabled]:active,fieldset[disabled] .btn-bitbucket:active,.btn-bitbucket.disabled.active,.btn-bitbucket[disabled].active,fieldset[disabled] .btn-bitbucket.active{background-color:#205081;border-color:rgba(0,0,0,0.2)}
		.btn-dropbox{color:#fff;background-color:#1087dd;border-color:rgba(0,0,0,0.2)}.btn-dropbox:hover,.btn-dropbox:focus,.btn-dropbox:active,.btn-dropbox.active,.open .dropdown-toggle.btn-dropbox{color:#fff;background-color:#0d70b7;border-color:rgba(0,0,0,0.2)}
		.btn-dropbox:active,.btn-dropbox.active,.open .dropdown-toggle.btn-dropbox{background-image:none}
		.btn-dropbox.disabled,.btn-dropbox[disabled],fieldset[disabled] .btn-dropbox,.btn-dropbox.disabled:hover,.btn-dropbox[disabled]:hover,fieldset[disabled] .btn-dropbox:hover,.btn-dropbox.disabled:focus,.btn-dropbox[disabled]:focus,fieldset[disabled] .btn-dropbox:focus,.btn-dropbox.disabled:active,.btn-dropbox[disabled]:active,fieldset[disabled] .btn-dropbox:active,.btn-dropbox.disabled.active,.btn-dropbox[disabled].active,fieldset[disabled] .btn-dropbox.active{background-color:#1087dd;border-color:rgba(0,0,0,0.2)}
		.btn-facebook{color:#fff;background-color:#3b5998;border-color:rgba(0,0,0,0.2)}.btn-facebook:hover,.btn-facebook:focus,.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{color:#fff;background-color:#30487b;border-color:rgba(0,0,0,0.2)}
		.btn-facebook:active,.btn-facebook.active,.open .dropdown-toggle.btn-facebook{background-image:none}
		.btn-facebook.disabled,.btn-facebook[disabled],fieldset[disabled] .btn-facebook,.btn-facebook.disabled:hover,.btn-facebook[disabled]:hover,fieldset[disabled] .btn-facebook:hover,.btn-facebook.disabled:focus,.btn-facebook[disabled]:focus,fieldset[disabled] .btn-facebook:focus,.btn-facebook.disabled:active,.btn-facebook[disabled]:active,fieldset[disabled] .btn-facebook:active,.btn-facebook.disabled.active,.btn-facebook[disabled].active,fieldset[disabled] .btn-facebook.active{background-color:#3b5998;border-color:rgba(0,0,0,0.2)}
		.btn-flickr{color:#fff;background-color:#ff0084;border-color:rgba(0,0,0,0.2)}.btn-flickr:hover,.btn-flickr:focus,.btn-flickr:active,.btn-flickr.active,.open .dropdown-toggle.btn-flickr{color:#fff;background-color:#d6006f;border-color:rgba(0,0,0,0.2)}
		.btn-flickr:active,.btn-flickr.active,.open .dropdown-toggle.btn-flickr{background-image:none}
		.btn-flickr.disabled,.btn-flickr[disabled],fieldset[disabled] .btn-flickr,.btn-flickr.disabled:hover,.btn-flickr[disabled]:hover,fieldset[disabled] .btn-flickr:hover,.btn-flickr.disabled:focus,.btn-flickr[disabled]:focus,fieldset[disabled] .btn-flickr:focus,.btn-flickr.disabled:active,.btn-flickr[disabled]:active,fieldset[disabled] .btn-flickr:active,.btn-flickr.disabled.active,.btn-flickr[disabled].active,fieldset[disabled] .btn-flickr.active{background-color:#ff0084;border-color:rgba(0,0,0,0.2)}
		.btn-foursquare{color:#fff;background-color:#0072b1;border-color:rgba(0,0,0,0.2)}.btn-foursquare:hover,.btn-foursquare:focus,.btn-foursquare:active,.btn-foursquare.active,.open .dropdown-toggle.btn-foursquare{color:#fff;background-color:#005888;border-color:rgba(0,0,0,0.2)}
		.btn-foursquare:active,.btn-foursquare.active,.open .dropdown-toggle.btn-foursquare{background-image:none}
		.btn-foursquare.disabled,.btn-foursquare[disabled],fieldset[disabled] .btn-foursquare,.btn-foursquare.disabled:hover,.btn-foursquare[disabled]:hover,fieldset[disabled] .btn-foursquare:hover,.btn-foursquare.disabled:focus,.btn-foursquare[disabled]:focus,fieldset[disabled] .btn-foursquare:focus,.btn-foursquare.disabled:active,.btn-foursquare[disabled]:active,fieldset[disabled] .btn-foursquare:active,.btn-foursquare.disabled.active,.btn-foursquare[disabled].active,fieldset[disabled] .btn-foursquare.active{background-color:#0072b1;border-color:rgba(0,0,0,0.2)}
		.btn-github{color:#fff;background-color:#444;border-color:rgba(0,0,0,0.2)}.btn-github:hover,.btn-github:focus,.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{color:#fff;background-color:#303030;border-color:rgba(0,0,0,0.2)}
		.btn-github:active,.btn-github.active,.open .dropdown-toggle.btn-github{background-image:none}
		.btn-github.disabled,.btn-github[disabled],fieldset[disabled] .btn-github,.btn-github.disabled:hover,.btn-github[disabled]:hover,fieldset[disabled] .btn-github:hover,.btn-github.disabled:focus,.btn-github[disabled]:focus,fieldset[disabled] .btn-github:focus,.btn-github.disabled:active,.btn-github[disabled]:active,fieldset[disabled] .btn-github:active,.btn-github.disabled.active,.btn-github[disabled].active,fieldset[disabled] .btn-github.active{background-color:#444;border-color:rgba(0,0,0,0.2)}
		.btn-google-plus{color:#fff;background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}.btn-google-plus:hover,.btn-google-plus:focus,.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{color:#fff;background-color:#ca3523;border-color:rgba(0,0,0,0.2)}
		.btn-google-plus:active,.btn-google-plus.active,.open .dropdown-toggle.btn-google-plus{background-image:none}
		.btn-google-plus.disabled,.btn-google-plus[disabled],fieldset[disabled] .btn-google-plus,.btn-google-plus.disabled:hover,.btn-google-plus[disabled]:hover,fieldset[disabled] .btn-google-plus:hover,.btn-google-plus.disabled:focus,.btn-google-plus[disabled]:focus,fieldset[disabled] .btn-google-plus:focus,.btn-google-plus.disabled:active,.btn-google-plus[disabled]:active,fieldset[disabled] .btn-google-plus:active,.btn-google-plus.disabled.active,.btn-google-plus[disabled].active,fieldset[disabled] .btn-google-plus.active{background-color:#dd4b39;border-color:rgba(0,0,0,0.2)}
		.btn-instagram{color:#fff;background-color:#3f729b;border-color:rgba(0,0,0,0.2)}.btn-instagram:hover,.btn-instagram:focus,.btn-instagram:active,.btn-instagram.active,.open .dropdown-toggle.btn-instagram{color:#fff;background-color:#335d7e;border-color:rgba(0,0,0,0.2)}
		.btn-instagram:active,.btn-instagram.active,.open .dropdown-toggle.btn-instagram{background-image:none}
		.btn-instagram.disabled,.btn-instagram[disabled],fieldset[disabled] .btn-instagram,.btn-instagram.disabled:hover,.btn-instagram[disabled]:hover,fieldset[disabled] .btn-instagram:hover,.btn-instagram.disabled:focus,.btn-instagram[disabled]:focus,fieldset[disabled] .btn-instagram:focus,.btn-instagram.disabled:active,.btn-instagram[disabled]:active,fieldset[disabled] .btn-instagram:active,.btn-instagram.disabled.active,.btn-instagram[disabled].active,fieldset[disabled] .btn-instagram.active{background-color:#3f729b;border-color:rgba(0,0,0,0.2)}
		.btn-linkedin{color:#fff;background-color:#007bb6;border-color:rgba(0,0,0,0.2)}.btn-linkedin:hover,.btn-linkedin:focus,.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{color:#fff;background-color:#005f8d;border-color:rgba(0,0,0,0.2)}
		.btn-linkedin:active,.btn-linkedin.active,.open .dropdown-toggle.btn-linkedin{background-image:none}
		.btn-linkedin.disabled,.btn-linkedin[disabled],fieldset[disabled] .btn-linkedin,.btn-linkedin.disabled:hover,.btn-linkedin[disabled]:hover,fieldset[disabled] .btn-linkedin:hover,.btn-linkedin.disabled:focus,.btn-linkedin[disabled]:focus,fieldset[disabled] .btn-linkedin:focus,.btn-linkedin.disabled:active,.btn-linkedin[disabled]:active,fieldset[disabled] .btn-linkedin:active,.btn-linkedin.disabled.active,.btn-linkedin[disabled].active,fieldset[disabled] .btn-linkedin.active{background-color:#007bb6;border-color:rgba(0,0,0,0.2)}
		.btn-tumblr{color:#fff;background-color:#2c4762;border-color:rgba(0,0,0,0.2)}.btn-tumblr:hover,.btn-tumblr:focus,.btn-tumblr:active,.btn-tumblr.active,.open .dropdown-toggle.btn-tumblr{color:#fff;background-color:#1f3346;border-color:rgba(0,0,0,0.2)}
		.btn-tumblr:active,.btn-tumblr.active,.open .dropdown-toggle.btn-tumblr{background-image:none}
		.btn-tumblr.disabled,.btn-tumblr[disabled],fieldset[disabled] .btn-tumblr,.btn-tumblr.disabled:hover,.btn-tumblr[disabled]:hover,fieldset[disabled] .btn-tumblr:hover,.btn-tumblr.disabled:focus,.btn-tumblr[disabled]:focus,fieldset[disabled] .btn-tumblr:focus,.btn-tumblr.disabled:active,.btn-tumblr[disabled]:active,fieldset[disabled] .btn-tumblr:active,.btn-tumblr.disabled.active,.btn-tumblr[disabled].active,fieldset[disabled] .btn-tumblr.active{background-color:#2c4762;border-color:rgba(0,0,0,0.2)}
		.btn-twitter{color:#fff;background-color:#55acee;border-color:rgba(0,0,0,0.2)}.btn-twitter:hover,.btn-twitter:focus,.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{color:#fff;background-color:#309aea;border-color:rgba(0,0,0,0.2)}
		.btn-twitter:active,.btn-twitter.active,.open .dropdown-toggle.btn-twitter{background-image:none}
		.btn-twitter.disabled,.btn-twitter[disabled],fieldset[disabled] .btn-twitter,.btn-twitter.disabled:hover,.btn-twitter[disabled]:hover,fieldset[disabled] .btn-twitter:hover,.btn-twitter.disabled:focus,.btn-twitter[disabled]:focus,fieldset[disabled] .btn-twitter:focus,.btn-twitter.disabled:active,.btn-twitter[disabled]:active,fieldset[disabled] .btn-twitter:active,.btn-twitter.disabled.active,.btn-twitter[disabled].active,fieldset[disabled] .btn-twitter.active{background-color:#55acee;border-color:rgba(0,0,0,0.2)}
		.btn-vk{color:#fff;background-color:#587ea3;border-color:rgba(0,0,0,0.2)}.btn-vk:hover,.btn-vk:focus,.btn-vk:active,.btn-vk.active,.open .dropdown-toggle.btn-vk{color:#fff;background-color:#4a6a89;border-color:rgba(0,0,0,0.2)}
		.btn-vk:active,.btn-vk.active,.open .dropdown-toggle.btn-vk{background-image:none}
		.btn-vk.disabled,.btn-vk[disabled],fieldset[disabled] .btn-vk,.btn-vk.disabled:hover,.btn-vk[disabled]:hover,fieldset[disabled] .btn-vk:hover,.btn-vk.disabled:focus,.btn-vk[disabled]:focus,fieldset[disabled] .btn-vk:focus,.btn-vk.disabled:active,.btn-vk[disabled]:active,fieldset[disabled] .btn-vk:active,.btn-vk.disabled.active,.btn-vk[disabled].active,fieldset[disabled] .btn-vk.active{background-color:#587ea3;border-color:rgba(0,0,0,0.2)}
	</style>
	
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
			<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
			<![endif]-->
		</head>
		<body style='background-image:url({{ URL::to("images/background/texture3.png")}})'>
			<div class="container" style='width:100%'>
				<div class="row" style='height:30px;background-color:rgb(6, 6, 6)'>
					<div class='pull-right' style='font-family:Open Sans;color:white;font-size:15px;padding:5px;'>Book online or Call us : 09267545749</div>
				</div>
				<div class="row" style='border-bottom:1px solid #d8d8d8;height:100px;background-image:url({{ URL::to("images/background/texture2.png") }}) '>
					<div class="container">
						<div class="navbar">
							<img src="http://www.giligansrestaurant.com/site/images/gililogo.png">
						</div>
					</div>
				</div>
				<div class="row" style='background-image:url("http://crimsonhotels.com/chelseaplaza/wp-content/uploads/2014/10/201303190906430.header_11.jpg");height:400px;background-size:cover;
				-webkit-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.75);
				-moz-box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.75);
				box-shadow: 0px 10px 15px 0px rgba(0,0,0,0.75);'>
				<div class="container">
						<!-- <div class="row">
								<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" style='margin-top:100px;height:50px;'>
										<h2 style='font-family:Open Sans' style='position:absolute;z-index:1000'>Welcome to hotel</h2>
										<div style='background-color:black;position:absolute;height:50px;width:100%;height:100%;opacity:0.9'>
											
										</div>
								</div>
							</div> -->
						</div>
					</div>
					<div class="row" style='margin-top:10px;'>
						<div class="container" style='background-color:white;margin-top:-10px;height:500px;'>
							<div class="col-xs-9 col-sm-11 col-md-6 col-lg-6 col-sm-offset-3 col-md-offset-3 col-lg-offset-3" style='height:70px;margin-top:-30px;
							'>
							<div style='background-color:black;position:absolute;width:100%;height:100%;
							-webkit-box-shadow: 0px 10px 136px -20px rgba(0,0,0,1);
							-moz-box-shadow: 0px 10px 136px -20px rgba(0,0,0,1);
							box-shadow: 0px 10px 136px -20px rgba(0,0,0,1);'></div>
						</div>
					</div>
				</div>
			</div>
			<!-- jQuery -->
			<script src="//code.jquery.com/jquery.js"></script>
			<!-- Bootstrap JavaScript -->
			<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
		</body>
		</html>