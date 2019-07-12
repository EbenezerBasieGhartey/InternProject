<!DOCTYPE html>
<html>
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">


    <script src="{{asset('js/app.js')}}"></script>
    <!-- <link href="{{asset('css/app.css')}}" rel="stylesheet"> -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet"> -->
    <!-- <link href="{{asset('fonts/font-awesome.min.css')}}" rel="stylesheet"> -->


	<title>My Profile</title>
</head>
<body>
<!--  beginning of nav bar -->
<nav id="top_bar" class="navbar navbar-inverse navbar-fixed-top" style="margin-bottom: 0px">
	<!-- division of nav bar -->
	<div class="container-fluid">
	<div class="row">
		<!-- division 1 -->
			
			<!-- division 2 -->
			<div class="col-md-8" style="color:white;">
			<div class="collapse navbar-collapse" id="robust">
				<ul id="ice" class="nav navbar-nav navbar-right">
					<li class=""><a href="#" >HOME</a></li>
<li class="" style=""><a href="#">ADMIN</a></li>
<li style=""><a href="#" >PURCHASE CARD</a></li>
<li style=""><a href="#" >REVIEW CARD</a></li>
<li style=""><a href="#" data-toggle="dropdown">TECNOLOGY<span class="caret"></span>
<ul class="dropdown-menu">
	<li style="background-color: #c2d6d6;"><a href="#">Education</a></li>
	<li style="background-color: #c2d6d6;"><a href="#">institution</a></li>
</ul>
</a>
</li>
<li  id="top" style=""><a href="#">SIGN IN</a></li>



		</ul>
			</div>
			</div>
	</div>
	</div>
	<!-- end of division -->
</nav>


	@yield('content')
<!-- beginning of footer -->
     
<div style="background-color: black;font-family:Calibri; padding: 10px; float: left; width: 100%;">
<ul style="float: left; margin-right: 250px; margin-left: 50px;">

<a href="#"><strong>GET IN TOUCH WITH ME</strong></a>
<li style="list-style-type: none; color:#a7a1a1;"> <img  style="width:20px; height:20px;" src="/img/telephone.jpeg">+233-(0)246192128</li>
<li style="list-style-type: none; color:#a7a1a1;"> <img  style="width:20px; height:20px;" src="/img/telephone.jpeg"> +233-(0)247585253</li>
<li style="list-style-type: none; color:#a7a1a1;"> <img  style="width:20px; height:20px;" src="/img/whatsapp.png"> +233-(0)553414573</li>

</ul>

<ul style="float: left; margin-right: 250px;">

<a href="#"><strong>MAIL ME ON</strong></a>
<li style="list-style-type: none; color:#a7a1a1;"><img  style="width:20px; height:20px;" src="/img/yahoo.png"> ebenezerbasie16@yahoo.com</li>
<li style="list-style-type: none; color:#a7a1a1;"><img  style="width:20px; height:20px;" src="/img/google.png"> ebenezerbasie16@gmail.com</li>
<li style="list-style-type: none; color:#a7a1a1;"><img  style="width:20px; height:20px;" src="/img/google.png"> egbasie@st.ug.edu.gh</li>
</ul>


<ul style="float: left;">

<a href="#"><strong>FOLLOW ME ON</strong></a>
<li style="list-style-type: none; color:#a7a1a1;"><img  style="width:20px; height:20px;" src="/img/facebook.png"> Ebenezer Basie Ghartey@facebook</li>
<li style="list-style-type: none; color:#a7a1a1;"><img  style="width:20px; height:20px;" src="/img/twitter.png"> EbGhartey@twitter</li>
<li style="list-style-type: none; color:#a7a1a1;"><img  style="width:20px; height:20px;" src="/img/instagram.jpeg"> EbGhartey@instagram</li>
</ul>


</div>

	
<link href="{{asset('js/jquery.min.js')}}" rel="stylesheet">
<link href="{{asset('js/bootstrap.min.js')}}" rel="stylesheet">


<script src="{{asset('js/jquery.min.js')}}" ></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
</body>
</html>