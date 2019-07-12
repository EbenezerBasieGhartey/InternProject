@extends('layout.profile')

@section('content')



<!-- beginning of carousel -->
<div class="container-fluid" style="padding: 0px;">
<div class="carousel slide" id="mycarousel" data-ride="carousel"> 
<ol class="carousel-indicators">
	<li data-target="mycarousel" data-slide-to="0"></li>
	<li data-target="mycarousel" data-slide-to="1"></li>
	<li data-target="mycarousel" data-slide-to="2"></li>
	<li data-target="mycarousel" data-slide-to="3"></li>

</ol>
<div class="carousel-inner">
<div class="item active">
	<img src="/img/BALME.jpg" style="height:500px; width:100%;">
</div>
<div class="item">
	<img src="/img/ug.jpg" style="height:500px; width:100%;">
</div>
<div class="item">
	<img src="/img/ug1.png" style="height:500px; width:100%;">
</div>
<div class="item">
	<img src="/img/ug2.png" style="height:500px; width:100%;">
</div>
<!-- <a href="#mycarousel" role="button" class="left carousel-control" data-slide="prev">
	<span class="glyphicon glyphicon-chevron-left"></span> </a>
	<a href="#mycarousel" role="button" class="right carousel-control" data-slide="next">
	<span class="glyphicon glyphicon-chevron-right"></span> </a>
 -->
<!-- Left and right controls -->
        <a class="left carousel-control" href="#mycarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#mycarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
</div>
</div>
</div>


<div class="container" id="con" >
<center><strong id="service">SERVICE</strong></center>
<p style="font-family: verdana;">we create variety of websites ranging from the home and to the public. we are dedicated to the do the things of programing and we need partners </p>
<div class="row">
<div class="col-md-3 "  >
	<div  id="col_1">
		<center><div class="icons"><i class="fa fa-cogs"></i></div>
	 <a style="font-size: 20px; color:#f44542; "> <strong >MORE</strong></a>
	<p style="font-family: verdana; opacity: 0.9; ">programming</p>
	<p style="font-family: verdana; opacity: 0.9; ">computer</p>
	<p style="font-family: verdana; opacity: 0.9; ">architecture</p>
	<p style="font-family: verdana; opacity: 0.9; ">electronics</p>
	<p style="font-family: verdana; opacity: 0.9; ">admissions</p>
	<button class="btn btn-success">read me</button>

	</center>
	  </div>
</div>
<div class="col-md-3 " >
	<div  id="col_1">
		<center>
			<div class="icons"><i class="fa fa-mobile"></i></div>
   <a style="font-size: 20px; color:#f44542;"> <strong >PROJECTS</strong></a>
<p style="font-family: verdana; opacity: 0.9;">Undergraduate</p>
<p style="font-family: verdana; opacity: 0.9;">Graduate</p>
<p style="font-family: verdana; opacity: 0.9;">International Students</p>
<p style="font-family: verdana; opacity: 0.9;">Entry Requirements</p>
<p style="font-family: verdana; opacity: 0.9;">Contact Us</p>
<button class="btn btn-success">read me</button>
</center>
     </div>
</div>

<div class="col-md-3 ">
	<div  id="col_1">
	<center>	
		<div class="icons"><i class="fa fa-laptop"></i></div>
	<a style="font-size: 20px; color:#f44542;"><strong >DOINGS</strong> </a>
	<p style="font-family: verdana; opacity: 0.9;">examination</p>
	<p style="font-family: verdana; opacity: 0.9;">promotion</p>
	<p style="font-family: verdana; opacity: 0.9;">grade point</p>
	<p style="font-family: verdana; opacity: 0.9;">marks</p>
	<p style="font-family: verdana; opacity: 0.9;">class division</p>
	<button class="btn btn-success">read me</button>
</center>
</div>
</div>
<div class="col-md-3 " >
	<div  id="col_1">
		<center>
			<div class="icons"><i class="fa fa-signal"></i></div>
	<a style="font-size: 20px; color:#f44542; "> <strong >ABOUT</strong></a>
<p style="font-family: verdana; opacity: 0.9;">Undergraduate Courses</p>
<p style="font-family: verdana; opacity: 0.9;">Graduate Courses</p>
<p style="font-family: verdana; opacity: 0.9;">Course Schedule</p>
<p style="font-family: verdana; opacity: 0.9;">Student Support</p>
<p style="font-family: verdana; opacity: 0.9;">Academic Calendar</p>
<button class="btn btn-success">read me</button>
</center>
     </div>
</div>
</div>
</div>


<div id="color"><div class="container">
	<div class="row">
		<center><strong id="we">We Are Everywhere</strong></center>
		<div>
		<div class="col-md-6"">
			<img src="/img/ug5.jpg" id="img1">
		</div>

		<div class="col-md-6" id="col_2">
<div class="row">
<p style="font-family: verdana;">we create variety of websites ranging from the home and to the public. we are dedicated to the do the things of programing and we need partners </p>
			<div class="col-md-2" >
			<img  src="/img/ug4.jpeg " id="img">
		</div>
		<div class="col-md-2" >
			<img src="/img/arch.jpg" id="img">
		</div>
		<div class="col-md-2" >
			<img src="/img/code.jpg" id="img">
		</div>
		<div class="col-md-2" >
			<img src="/img/ug6.jpg" id="img">
		</div>
		<div class="col-md-2">
			<img src="/img/arch1.jpg" id="img">
		</div>
		<div class="col-md-2">
			<img src="/img/win.jpg" id="img">
		</div>
		</div>

		      <div class="row">
			<div class="col-md-2">
			<img  src="/img/ug4.jpeg " id="img2">
		</div>
		<div class="col-md-2" >
			<img src="/img/arch.jpg" id="img2">
		</div>
		<div class="col-md-2" >
			<img src="/img/code.jpg" id="img2">
		</div>
		<div class="col-md-2" >
			<img src="/img/ug6.jpg" id="img2">
		</div>
		<div class="col-md-2">
			<img src="/img/arch1.jpg" id="img2">
		</div>
		<div class="col-md-2">
			<img src="/img/win.jpg" id="img2">
		</div>
		</div>
	</div>
</div></div>
	
</div>
</div>

<!-- beginning of faq --> 
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
			<strong><h2 id="h2">QUESTIONS YOU MAY ASK</h2></strong>
			<div id="faq"><strong >HOW ARE YOU?<a href="#target" data-toggle="collapse"><span class="glyphicon glyphicon-chevron-down pull-right"></span></a></strong></div>

			<p id="target">Questions like this refers to you the individual and needs a straight forward answer based on your condition at the moment.
			Eg. I'm fine. With this, the person asking the question gets to know your condition and feeling and if there is any problem, he/she can be of aid to you. Avoid beating about the bush.</p>

			<div id="faq"><strong >WHAT IS YOUR NAME? <a href="#target1" data-toggle="collapse"><span class="glyphicon glyphicon-chevron-down pull-right"></span></a></strong></div>
			<div><p id="target1">Questions like this refers to you the individual and needs a straight forward answer based on your condition at the moment.
			Eg. I'm fine. With this, the person asking the question gets to know your condition and feeling and if there is any problem, he/she can be of aid to you. Avoid beating about the bush.</p></div>

			<div id="faq"><strong>HOW OLD ARE YOU? <a href="#target2" data-toggle="collapse"><span class="glyphicon glyphicon-chevron-down pull-right"></span></a></strong></div>
			<p id="target2">Questions like this refers to you the individual and needs a straight forward answer based on your condition at the moment.
			Eg. I'm fine. With this, the person asking the question gets to know your condition and feeling and if there is any problem, he/she can be of aid to you. Avoid beating about the bush.</p>

			<div id="faq"><strong >WHERE DO YOU COME FROM? <a href="#target3" data-toggle="collapse"><span class="glyphicon glyphicon-chevron-down pull-right"></span></a></strong></div>

			<p id="target3">Questions like this refers to you the individual and needs a straight forward answer based on your condition at the moment.
			Eg. I'm fine. With this, the person asking the question gets to know your condition and feeling and if there is any problem, he/she can be of aid to you. Avoid beating about the bush.</p>
			
		</div>
		<div class="col-md-1"></div>
	</div>
</div>


<!-- <button class="btn btn-success">submit</button> --> 
 <!-- 
<div style=" color:blue; text-align: center;font-size: bold;">
<p >@copyright</p>
</div> -->
@endsection