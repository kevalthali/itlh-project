<!DOCTYPE html>
<html>
	<head>
		<title>itlh project</title>
		@include('stylesheet')
	</head>
	<body>

@include('nav')

		<div class="parent">
			<img src="images/body.png">
		</div>
							<div class="slider-box left-side">
								<div class=" square" >
									<div class="content">
										<h1>
										CREATE OUR LEGACY
										<h1>
									</div>
									<div class="unleash">
										<p>Unleash your creative genius by custoising shoes as authentic and utterly unique as you are
										</p>
									</div>

									<div>
									<a href="/designyours">
									<button class="btn">DESIGN YOURS</button>
									</a>
								</div>
									
								</div>
							</div>

							<div class="block"></div>
			<div class="sentence">
						<p>
						<strong> A TRADITIONAL WAY OF CRAFTING,A CONTEMPORARY WAY OF PURCHASING			</strong>
					</p>
			</div>


		<div class="designshoe">
		<div class="col-md-12">
			<div class="col-md-4">
					<a href="">Design <br> Yours</a>
			</div>

			<div class="col-md-4">
					<a href="">Your shoe <br>is handrafted</a>
			</div>

			<div class="col-md-4">
					<a href="">Unwrap your new <br>sole mate after 14 <br>days</a>
			</div>
		</div>
		</div>

		
		<div class="block"></div>
		<hr>
		<div class="leading">
			<p>
				LEADING MEN
			</p>
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
    				<p class="text-muted"> <strong>	${{$shoe->prize}}</strong></p>
    			</div>
    			</a>
    		</div>
		   	@endforeach
			</div>
		</div >

		<hr>
		<div class="block"></div>
		<div class="contemp">
			<p>-/CONTEMPORARY CRAFTMANSHIP</p>
		</div>
		<div class="art">
			<p>THE ART OF SHOEMAKING</p>
		</div>
		<hr>
		<div class="row">
			<div class="col-md-12">
				<div class="col-md-4" >
					<div class="site">
						<img src="images/site.webp" class="img-responsive height-50">
					</div>
				</div>
				<div class="col-md-4" >
					<div class="transperent">
						<p>Undandys are proudly handcrafted in a third-generation shoe workshop in São João da Madeira, often referred to as the shoe capital of Portugal. Portuguese craftsmanship is world renowned, most of our cobblers have been working with shoes for over 40 years passed from generation to generation, with incredible passion and dedication to crafting each and every pair of shoes.</p>
					</div>
				</div>
				<div class="col-md-4" >
					<div class="site">
						<img src="images/artofshoe.webp" class="img-responsive height-250">
					</div>
				</div>
			</div>
		</div>
		<div class="tab">
			<div><button>DISCOVER MORE</button></div>
		</div>
		<div class="block"></div>
		<div class="row ">
			<div class="col-md-12">
				<div class="col-md-6" >
					<div class="shoe-image">
						<img src="images/capture.webp" class="img-responsive height-260">
					</div>
				</div>
				<div class="col-md-6">
					<div class="text">
						-/PATINAS
					</div>
					<div class="strke">
						<p>THE STROKE OF GENIUS</p>
					</div>
					<hr>
					<div class="creme">
						<p>The creme de la creme of traditional, artisan craftmanship, this hand painted finish is utterly unique and breathes authenticity into each pair of shoes.</p>
					</div>
					<div >
						<button >DISCOVER THE COLLECTION</button>
					</div>
				</div>
			</div>
		</div>
		<div class="block">
		</div>
		<div class="name">
			<p>-/MR UNDANDY</p>
		</div>
		<div class="come">
			<p>COME WALK WITH US</p>
		</div>
		<div class="behind">
			<p>Behind every great pair of shoes, there should always be a greater man. Discover the path of <br>enlightenment.
			</p>
		</div>
		<div class="row ">
		<div class="col-md-12">
			<div class="col-md-6" >
				<div class="lat1">
					<img src="images/lat.webp">
					
					<p>	Mr Undandy | 22  Oct 2018</p>
				</div>
				<div class="lit">
					<p>	Invest In Shoes And Beds</p>
				</div>
				<div class="one">
					<p>One philosophy of success is that no-one will invest in you, until you truly begin to invest in yourself.</p>
				</div>
				<div class="read">
					<a href="readmore.html">READ MORE</a>
				</div>
			</div>
			<div class="col-md-6" >
				<div class="lat2" >
					<img src="images/lat2.webp" >
					<br>
					<p>Mr Undandy | 22  Oct 2018</p>
				</div>
				<div class="lit">
					<p>	Why Undandy Is Better For You Than Tinder
					<p>
				</div>
				<div class="one">
					<p>Whatever you want, the internet can provide it. But all these limitless options can start to get a bit exhausting, and no more so than when it comes to the dating world.</p>
				</div>
				<div class="read">
					<a href="">READ MORE</a>
				</div>
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
