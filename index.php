<?php

if(isset($_POST['submit'])) {
		$to = "wuntujoy@gmail.com";
		$from = $_POST['email'];
		$full_name = $_POST['full_name'];
		$subject = $_POST["subject"];
		$subject2 = $_POST["subject2"];
		$message = $full_name . ", said" . "\n\n" . $_POST["message"];
		$message2 = "This a copy of your feedback submission: " . "\n\n" . $_POST["message"] . "\n\n" . "If you didn't send this feedback, please ignore it or delete it. Thank you";

		$headers = "From: " . $from;
		$headers2 = "From: " . $to;
		if (!empty($_POST['anti-spam'])){
			die("Nice Try Spammer!");
		};
		mail($to,$subject,$message,$headers);
		mail($from,$subject2,$message2,$headers2);
}

?>

<html>

	<head>
		<title> Jonathan Wuntu </title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Megrim|Quicksand|VT323" rel="stylesheet">
		<script
		src="https://code.jquery.com/jquery-3.2.1.js"
		integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
		crossorigin="anonymous"></script>
		<script
		src="https://code.jquery.com/jquery-2.2.4.js"
		integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
		crossorigin="anonymous"></script>
		<script
		src="https://code.jquery.com/jquery-1.12.4.js"
		integrity="sha256-Qw82+bXyGq6MydymqBxNPYTaUXXq7c8v3CwiYwLLNXU="
		crossorigin="anonymous"></script>
		<script src="panelist.js"></script>
		<script text="text/javascript">
		
		
		var token = '2043820113.e2b47d9.1bd4815ee7c84ebbbc555098b63fd000',
			userId = 2043820113,
			num_photo = 10;
			
		$.ajax ({
			url: 'https://api.instagram.com/v1/users/self/?access_token=' + token,
			dataType: 'jsonp',
			type: 'GET',
			data: {
			access_token: token
			},
			success: function(data){
				console.log(data);
				$(".username-insta").append("<h2><a href='https://instagram.com/" + data.data.username + "'>" + data.data.username + "</a></h2>");
				$(".profile-image-insta").append("<img src='" + data.data.profile_picture + "' height='128' width='128' />")
				$(".instagram-main-content").append("<h3>" + data.data.full_name + "</h3>");
				$(".posts-insta").append("<h3> Posts <br>" + data.data.counts.media +  "</h3>");
				$(".followers-insta").append("<h3> Followers <br>" + data.data.counts.followed_by + "</h3>");
				$(".following-insta").append("<h3> Following <br>" + data.data.counts.follows + "</h3>" );
				$(".instagram-main-content").append("<h3>" + data.data.bio + "</h3>");
				$(".follow-button").append("<a href='https://instagram.com/" + data.data.username + "'> Follow </a>")
				$.ajax ({
					url2 : "https://api.instagram.com/v1/users/self/media/recent/?access_token=" + token,
					dataType: 'jsonp',
					type: 'GET',
					data: {access_token: token, count: num_photo},
					success: function(data2) {
						console.log(data2);
					},
					error: function(data2) {
						console.log(data2)
					}
				});
			},
			error: function(data){
				console.log(data);
			}
		});
		
		</script>
		<style>
			* {
				margin: 0;
				padding: 0;
				
			}
			
			.pane-icon {
				
			}
			
			@keyframes glitchbef {
				 0% {
				    clip: rect(25px, 500px, 45px, 0);
				}
				5.88235% {
				    clip: rect(114px, 500px, 76px, 0);
				}
				11.76471% {
				    clip: rect(70px, 500px, 67px, 0);
				}
				17.64706% {
				    clip: rect(70px, 500px, 103px, 0);
				}
				23.52941% {
				    clip: rect(52px, 500px, 14px, 0);
				}
				29.41176% {
				    clip: rect(103px, 500px, 2px, 0);
				}
				35.29412% {
 				   clip: rect(113px, 500px, 67px, 0);
				}
				41.17647% {
				    clip: rect(34px, 500px, 27px, 0);
				}
				47.05882% {
				    clip: rect(46px, 500px, 107px, 0);
				}
				52.94118% {
				    clip: rect(77px, 500px, 107px, 0);
				}
				58.82353% {
				    clip: rect(48px, 500px, 73px, 0);
				}
				64.70588% {
				    clip: rect(89px, 500px, 113px, 0);
				}
				70.58824% {
				    clip: rect(41px, 500px, 39px, 0);
				}
				76.47059% {
				    clip: rect(94px, 500px, 31px, 0);
				}
				82.35294% {
				    clip: rect(63px, 500px, 5px, 0);
				}
				88.23529% {
				    clip: rect(27px, 500px, 76px, 0);
				}
				94.11765% {
				    clip: rect(56px, 500px, 35px, 0);
				}
				100% {
				    clip: rect(24px, 500px, 63px, 0);
				}
			}
			
			@keyframes glitchbef2 {
				 0% {
				    clip: rect(25px, 550px, 45px, 0);
				}
				5.88235% {
				    clip: rect(114px, 550px, 76px, 0);
				}
				11.76471% {
				    clip: rect(70px, 550px, 67px, 0);
				}
				17.64706% {
				    clip: rect(70px, 550px, 103px, 0);
				}
				23.52941% {
				    clip: rect(52px, 550px, 14px, 0);
				}
				29.41176% {
				    clip: rect(103px, 550px, 2px, 0);
				}
				35.29412% {
 				   clip: rect(113px, 550px, 67px, 0);
				}
				41.17647% {
				    clip: rect(34px, 550px, 27px, 0);
				}
				47.05882% {
				    clip: rect(46px, 550px, 107px, 0);
				}
				52.94118% {
				    clip: rect(77px, 550px, 107px, 0);
				}
				58.82353% {
				    clip: rect(48px, 550px, 73px, 0);
				}
				64.70588% {
				    clip: rect(89px, 550px, 113px, 0);
				}
				70.58824% {
				    clip: rect(41px, 550px, 39px, 0);
				}
				76.47059% {
				    clip: rect(94px, 550px, 31px, 0);
				}
				82.35294% {
				    clip: rect(63px, 550px, 5px, 0);
				}
				88.23529% {
				    clip: rect(27px, 550px, 76px, 0);
				}
				94.11765% {
				    clip: rect(56px, 550px, 35px, 0);
				}
				100% {
				    clip: rect(24px, 550px, 63px, 0);
				}
			}
			
			@keyframes glitchaft {
				0% {
				    clip: rect(91px, 500px, 75px, 0);
				}
				5.88235% {
				    clip: rect(13px, 500px, 59px, 0);
				}
				11.76471% {
				    clip: rect(68px, 500px, 67px, 0);
				}
				17.64706% {
				    clip: rect(20px, 500px, 69px, 0);
				}
				23.52941% {
				    clip: rect(30px, 500px, 53px, 0);
				}
				29.41176% {
				    clip: rect(21px, 500px, 106px, 0);
				}
				35.29412% {
				    clip: rect(34px, 500px, 8px, 0);
				}
				41.17647% {
				    clip: rect(36px, 500px, 32px, 0);
				}
				47.05882% {
				    clip: rect(24px, 500px, 48px, 0);
				}
				52.94118% {
				    clip: rect(17px, 500px, 93px, 0);
				}
				58.82353% {
				    clip: rect(73px, 500px, 52px, 0);
				}
				64.70588% {
				    clip: rect(69px, 500px, 37px, 0);
				}
				70.58824% {
				    clip: rect(2px, 500px, 3px, 0);
				}
				76.47059% {
				    clip: rect(15px, 500px, 73px, 0);
				}
				82.35294% {
				    clip: rect(50px, 500px, 28px, 0);
				}
				88.23529% {
				    clip: rect(93px, 500px, 56px, 0);
				}
				94.11765% {
				    clip: rect(93px, 500px, 108px, 0);
				}
				100% {
					clip: rect(112px, 500px, 34px, 0);
				}
			}
			
			@keyframes glitchaft2 {
				0% {
				    clip: rect(91px, 550px, 75px, 0);
				}
				5.88235% {
				    clip: rect(13px, 550px, 59px, 0);
				}
				11.76471% {
				    clip: rect(68px, 550px, 67px, 0);
				}
				17.64706% {
				    clip: rect(20px, 550px, 69px, 0);
				}
				23.52941% {
				    clip: rect(30px, 550px, 53px, 0);
				}
				29.41176% {
				    clip: rect(21px, 550px, 106px, 0);
				}
				35.29412% {
				    clip: rect(34px, 550px, 8px, 0);
				}
				41.17647% {
				    clip: rect(36px, 550px, 32px, 0);
				}
				47.05882% {
				    clip: rect(24px, 550px, 48px, 0);
				}
				52.94118% {
				    clip: rect(17px, 550px, 93px, 0);
				}
				58.82353% {
				    clip: rect(73px, 550px, 52px, 0);
				}
				64.70588% {
				    clip: rect(69px, 550px, 37px, 0);
				}
				70.58824% {
				    clip: rect(2px, 550px, 3px, 0);
				}
				76.47059% {
				    clip: rect(15px, 550px, 73px, 0);
				}
				82.35294% {
				    clip: rect(50px, 550px, 28px, 0);
				}
				88.23529% {
				    clip: rect(93px, 550px, 56px, 0);
				}
				94.11765% {
				    clip: rect(93px, 550px, 108px, 0);
				}
				100% {
					clip: rect(112px, 550px, 34px, 0);
				}
			}
			
			.content-body {
				overflow-x: hidden;
				height: 100%;
				width: 100%;
			}
			
			.glitch {
				font-family: VT323, sans-serif;
				position: relative;
				font-size: 88px;
				color: white;
			}
			
			.glitch2 {
				font-family: VT323, sans-serif;
				position: relative;
				font-size: 88px;
				color: black;
			}
			
			.glitch3 {
				font-family: VT323, sans-serif;
				position: relative;
				font-size: 43px;
				color: white;
				
			}
			
			#glitch1 {
				top: 40%;
				left: 31.85%;
			}
			
			#glitch2 {
				top: 15%;
				left: 35%;
			}
			
			#glitch3 {
				top: 25%;
				left: 40%;
			}
			
			#glitch4 {
				top: 45%;
				left: 30.85%;
			}
			
			.glitch:before, .glitch:after {
				clip: rect(0, 0, 0, 0);
				top: 0;
				left: 0;
				background-color: rgba(0,0,0,0);
				position: absolute;
				width: 100%;
			}
			
			.glitch2:before, .glitch2:after {
				clip: rect(0, 0, 0, 0);
				top: 0;
				left: 0;
				background-color: white;
				position: absolute;
				width: 100%;
			}
			
			.glitch3:before, .glitch3:after {
				clip: rect(0, 0, 0, 0);
				top: 0;
				left: 0;
				background-color: rgba(0,0,0,0);
				position: absolute;
				width: 100%;
			}
			
			.glitch:before {
				left: -2px;
				text-shadow: 2px 0 blue;
				content:attr(data-text);
				animation: glitchbef 2s infinite linear alternate-reverse;
			}
			
			.glitch2:before {
				left: -2px;
				text-shadow: 2px 0 blue;
				content:attr(data-text);
				animation: glitchbef 2s infinite linear alternate-reverse;
			}
			
			.glitch3:before {
				left: -2px;
				text-shadow: 2px 0 blue;
				content:attr(data-text);
				animation: glitchbef2 1s infinite linear alternate-reverse;
			}
			
			.glitch:after {
				left: 2px;
				text-shadow: -1px 0 red;
				content:attr(data-text);
				animation: glitchaft 3s infinite linear alternate-reverse;
			}
			
			.glitch2:after {
				left: 2px;
				text-shadow: -1px 0 red;
				content:attr(data-text);
				animation: glitchaft 3s infinite linear alternate-reverse;
			}
			
			.glitch3:after {
				left: 2px;
				text-shadow: -1px 0 red;
				content:attr(data-text);
				animation: glitchaft2 2s infinite linear alternate-reverse;
			}
			
			.wrap {
				width: 100%;
				background-color: black;
				height: 100%;
			}
			
			@media only screen and (max-width: 800px) {
				
				#glitch1 {
					left: 17%;
				}
				
				#glitch2 {
					left: 30%;
				}
				
				#glitch3 {
					top: 35%;
					left: 33%;
				}
				#glitch4 {
					left: 15%;
				}
			}
			
			@media only screen and (max-width: 600px) {
				
				.glitch {
					
				}
				
				.glitch2 {
					
				}
				
				#glitch1 {
					left: 3%;
					text-align: center;
				}
				
				/* Contact Me */
				
				#glitch2 {
					left: 20%;
				}
				/*  About me */
				
				#glitch3 {
					top: 35%;
					left: 27%;
				}
				
				#glitch4 {
					left: 1%;
					text-align: center;
				}
			}
			
			@media only screen and (max-width: 450px) {
				
				.glitch {
					font-size: 50px;
				}
				
				.glitch2 {
					font-size: 50px;
				}
				
				#glitch1 {
					left: 0;
					text-align: center;
				}
				
				/* Contact Me */
				
				#glitch2 {
					left: 24%;
				}
				/*  About me */
				
				#glitch3 {
					top: 35%;
					left: 30%;
				}
				
				#glitch4 {
					left: 0;
					text-align: center;
				}
			}
			
			@media only screen and (max-width: 400px) {
				
				.glitch {
					font-size: 64px;
				}
				
				.glitch2 {
					font-size: 64px;
				}
				
				.glitch3 {
					text-align: center;
				}
				
				#glitch1 {
					left: 0;
					text-align: center;
				}
				
				/* Contact Me */
				
				#glitch2 {
					left: 18%;
				}
				/*  About me */
				
				#glitch3 {
					top: 35%;
					left: 23%;
				}
				
				#glitch4 {
					left: 0;
				}
			}
			
			@media only screen and (max-width: 350px) {
				
				.glitch {
					font-size: 55px;
				}
				
				.glitch2 {
					font-size: 55px;
				}
				
				#glitch1 {
					left: 0;
					text-align: center;
				}
				
				#glitch2 {
					left: 15%;
				}
				
				#glitch3 {
					top: 35%;
					left: 23%;
				}
			}
			
		</style>
	</head>
	
	<body>
		<div class="content-body">
		<div class="wrap" style="background-image:url('vaporwave3.gif'); background-attachment: fixed; background-position: center; background-size: cover;">
			<div class="glitch" id="glitch1" data-text="Jonathan Wuntu">
				Jonathan Wuntu <br>
			</div>
			<div class="glitch3" id="glitch4" data-text="A self-proclaimed Web Developer">
				<p> A self-proclaimed Web Developer </p>
			</div>
		</div>
		
		<div class="glitch2" id="glitch3" data-text="About Me">
			About Me
		</div>
		
		<div class="about" id="about" >
			<div class="about-content">
				<div class="about-main-content" id="about-content1">
				<p> I'm 14 years old. A boy who lives in his hometown, a beautiful tropical island in Asia. I'm a student,
				that spend most of my life in front of the computer. 
				My hobby and passion are programming and watching anime. 
				Even though my hobby is programming, I really need to learn much.</p>
				<h1 style="text-align: center; font-family: VT323, sans-serif;" > I  &#9829; 90s </h1>
				</div>
			</div>
		</div>
		
		<div class="glitch" id="glitch2" data-text="Contact Me">
						Contact Me
		</div>
		<div class="contact" id="contact">
			
			<div class="contact-content">

				<div class="contact-main-content" id="contact-content1">
					
					<p> If you want to try to do something awesome with me, contact me! </p>
					<div class="contact-form">
						<form method="POST" action="">
							<p>
							<br>
							<input type="text" name="full_name" placeholder=" Full Name"/>
							<br><input type="text" name="email" placeholder=" E-mail"/>
							<br><input type="text" name="subject" placeholder=" Subject"/>
							<br><textarea name="message" placeholder=" Message"></textarea>
							<br><input type="text" name="anti-spam" class="anti-spam"/>
							<br><input type="submit" name="submit" style="text-align: center;" value="Submit">
							</p>
						</form>
					</div>
				</div>
			</div>
		</div>
		</div>
	</body>

</html>