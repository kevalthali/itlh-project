<!DOCTYPE html>
<html>
<head>
	<title>designyours</title>
		@include('stylesheet')

<style type="text/css">
	.width-70{
	width:100%;
	padding-left: 60px;
	padding-right: 40px;


	

	

	}

	.start{
	color: black;
	background-color: orange;
	text-align: center;
	}

	.box{
	width:100%;
	height:210px;
	background-color: #E0E0E0;
	margin:0px auto;
	display: inline-block;
     padding-left: 30px;
	}

	.details{
	padding-top: 10px;
	text-align: center;
	color:black;
	font-style: bold;
	font-weight: 25px;
	}

	.customer{
	text-align: center;
	color:orange;
	font-style: bold;
	font-weight: 25px;
	}

	.para{
	text-align: center;
	font-style: bold;
	font-weight: 8px;
	}

	.get{
	padding-top: 20px;
	text-align: center;
	font-style: italic;
	font-family: "Times New Roman", Times, serif;
	font-size: 40px;
	}

	.may{
	font-style: italic;
	font-size: 18px;
	text-align: center;
	font-family: "Times New Roman", Times, serif;
	}

	.box2{
	width:100%;
	height:100px;
	background-color:orange;
	margin:0px auto;
	display: inline-block;
	}
 
 	.apply{
	padding-top: 20px;
 	font-style: italic;
 	text-align: center;
 	color: black;
 	font-family:  "Times New Roman", Times, serif;
 	font-size: 30px;
	 }

	footer{
	background-color: #E0E0E0;
	padding-top: 20px;
}
ol{
	list-style-type: none;
}
.traditional{
	font-style:bold;	
	font-size: 20px;
	font-family: "Times New Roman", Times, serif;
	color: black;
	text-align: center;
}
.div1{
	font-family: "Times New Roman", Times, serif;
	color: black;
	text-align: center;
	font-style: italic;
	font-size: 18px;
}

.left-side
{
	margin-top: 100px;

}
.content{
	padding-top: 30px;
	font-style: italic;
	font-size: 80px;
	font-family: "Times New Roman", Times, serif;
	color: #ffffff;
	margin-left: 70px;
	opacity: none;
}

.unleash{
	opacity: none;
	font-style: italic;
	font-size: 38px;
	font-family: "Times New Roman", Times, serif;
	color: #ffffff;
	margin-left: 70px;
}

.sen{
	font-size: 50px;
	font-style: italic;
}

.who{
	font-family: "Times New Roman",Times,serif;
	font-size: 25px;
	text-align: center;
}

	</style>
</head>
<body>
	@include('nav')

    

			<div class="designyours">
					<img src="images/body.png" class="img-responsive width-70">
				

			

				 	<div class="block"></div>

				 	
				 <div class="division">
				 	<div class="col-md-12">
				 		<div class="col-md-4">
				 			<div class="div1">
				 				<P>Design <br>yours</P>
				 			</div>
				 		</div>

				 		<div class="col-md-4">
				 			<div class="div1">
				 				<P>Your shoe is <br>handicrafted <br>yours</P>
				 			</div>
				 		</div>

				 		<div class="col-md-4">
				 			<div class="div1">
				 				<P>Unwrap your new <br>sole mate after 14 <br>days <br>yours</P>
				 			</div>
				 		</div>
				 	</div>
				 </div>


				 <div class="row ">
			<div class="col-md-12">
		 	@foreach( $shoes as $shoe)
    		<div class="col-md-4">
    			<a href="{{url('shoeDetails',[$shoe->id])}}">
    			<div class="product-card text-center">
    				<img src="{{ $shoe->image}}" class="img-responsive height-250">
    				<div class="black">
    					<p><strong>{{$shoe->name}}</strong></p>
    				</div>
    				<p class="text-muted"> <strong>{{$shoe->prize}}</strong></p>
    			</div>
    			</a>
    		</div>
		   	@endforeach
			</div>
		</div >

		<div><p align="center"><strong>SPECIAL OCCASIONS</p></strong></div>

		<div class="sen" ><p align="center" >EVERY STEP OF THE WAY </p></div>
			<div class="who">
				<p align="center">
				Whoever you are, wherever you go, you can be sure that there is a pair of Undandys for each and every occasion.
				<br>
				Therefore, permit us to suggest some standout styles so you can be sure
				<br>
				you are putting your best foot forward.
				<br>
				</p>
				</div>
 
		

			<div class="box">
							<div class="get">
								<p>Get in touch</p>
							</div>
							<div class="may">
								<p>May we be of assistance? There is nothing that we love more than helping our <br>customers find their sole mate. Whether it's fit, function or just to get better <br>acquainted with Undandy, we're here to help.</p>
							</div>
						</div>
						
			<div class="box">
				<div class="col-md-12">
					<div class="col-md-4">
						<div class="details">
							<p>EMAIL</p>
						</div>
						<div class="customer">
							<p>CUSTOMERCARE@UNDANDY.COM</p>
						</div>
						<div class="para">
							<p>We're delighted to converse over emails. You shall be responded to within 24 hours, and a gentleman never breaks a promise.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="details">
							<p>CALL</p>
						</div>
						<div class="customer">
							<p>+351 210 497 840</p>
						</div>
						<div class="para">
							<p>In the digital age, sometimes there is nothing better than a good old-fashioned chit chat on the telephone. We are awaiting your call.</p>
						</div>
					</div>
					<div class="col-md-4">
						<div class="details">
							<p>CHAT</p>
						</div>
						<div class="customer">
							<p>IN A DASH ?</p>
						</div>
						<div class="para">
							<p>Talk to a real person, quick as a flash and conveniently through our live chat service. Impatience is a virtue here.</p>
						</div>
					</div>
				</div>
			</div>
			
			@include('footer')

</body>
</html>