<!DOCTYPE html>
<html>
<head>
	<title>lynjet</title>
	<link rel="stylesheet" href="{{asset("bower_components/AdminLTE/bootstrap/css/bootstrap.min.css")}}">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<style type="text/css">
		body{
			font-family: 'Open Sans', sans-serif;
			margin: 0px;
			padding: 0px;
		}
		.content-wrap{
			background: url('images/admin/background/Airplane-Sunset-View-Wallpaper.jpg');
			background-size:cover;
			background-repeat: no-repeat;
			background-position: center center;
			min-height: 100vh;
			position: relative;
		}
		.content-overlay{
			display: block;
			background:rgba(6, 222, 240, 0.94);
			min-height: 100vh;
		}
		.content{
			color: #fff;
			font-size: 45px;
			font-weight: 300;
			position: absolute;
			top: 40%;
			transform: translateY(-50%);
		}
		.btn-conf a{
			display: inline-block;
			text-decoration: none;
			color: #fff;
			padding: 10px 40px;
			background:rgba(6, 222, 240, 0.94);
			font-size: 20pt;
			text-transform: uppercase;
			letter-spacing: 2px;
			box-shadow: 1px 3px 5px #001F3F;
			transition: 300ms ease-in-out;
		}
		.btn-conf a:hover{
			color:#001f3f;
			background-color: #fff;
		}
		.btn-conf a:hover i{
			margin-left: 30px;
		}
		#vrfy{
			font-size: 60px;
			color:#001f3f;
			font-weight: 600;
		}
		.btn-conf a i{
			color:#001f3f;
			margin-left: 10px;
			transition: 300ms ease-in-out;

		}

	</style>
</head>
<body>
<div class="content-wrap">
	<div class="content-overlay">
		<div class="content col-sm-6 col-sm-offset-3 col-xs-12">
			<div class="logo">
				<img src="{{asset('images/admin/logo/lynjet-logo-login.png')}}">
			</div>
			<p>We have sent you an email please check your email to <span id="vrfy">verify</span> your account</p>
			<div class="btn-conf">
				<a href="{{URL::to('login')}}">login<i class="fa fa-sign-in"></i></a>
			</div>
		</div>
	</div>
</div>

</body>
</html>