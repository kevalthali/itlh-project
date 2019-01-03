
	
	@include('stylesheet')

	@include('nav')

	<style type="text/css">
		.height-250{
			height: 600px;

		}
		.start{
	color: black;
	background-color: orange;
	text-align: center;


}
		.powel{
				font-style: italic;
				font-size: 30px;
				font-family: "Times New Roman", Times, serif;
		
		}
		.money{
			font-style: bold;
				font-size: 20px;
			}
			.made{
				font-size: 10px;
				font-style: bold;
			}
			.oxf{
				font-size: 15px;
				font-style: : normal;

			}
			button  {
    background-color: transparent;
    border: 1px solid black;
    color: arange;
    font-style: bold;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
      -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;
    cursor: pointer;
    margin-left: 70px;
    margin-bottom: 30px;
	padding: 5px 25px;
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

</style>
<body>
	<p class="text-center">
		
	</p>
	<div class="row">
			<div class="col-md-12">
				
				<div class="col-md-2" >
					
						<p><strong>OXFORD</strong></p>
					</div>  

    	<div class="col-md-5">
    		
    			<a href="{{url('shoeDetails',[$shoe->id])}}">
    			<img src="{{$shoe->image}}" class="img-responsive height-250">
    				
    			</a>
    	</div>
			
		

				<div class="col-md-5" >
					<form name="addtocartForm" id="addtocartForm" action="{{ url('add-cart') }}" 
					method="post" enctype="multipart/form-data"> 
					{{csrf_field() }}

              <input type="hidden"  name="name" value="{{$shoe->name}}">
              <input type="hidden" name="product_id" value="{{$shoe->id}}">


             <input type="hidden" name="prize" value="{{$shoe->prize}}">

             <input type="hidden" name="size" value="{{$shoe->size}}" required="require">

             <input type="hidden" name="image" value="{{$shoe->image}}">

            <input type="hidden" name="quantity" required="require" value="{{$shoe->quantity}}">

					<div class="oxf">
						<p><strong>OXFORD</strong></p>
					</div>

							


							<div class="powel">
								<p>{{$shoe->name}}</p>
							</div>

						<div class="money">
							<p>${{$shoe->prize}}</p>
						</div>

						<div class="made">
							<P>Made to order, typically delivers within 2 weeks. Free returns & exchanges - worldwide.</P>
						</div>	
						
						<hr>
						<p class="big-text">{{$shoe->description}} </p>

						<br>   
    <label class="id">SIZE:-</label>
     
      <select id = "size" name="size">
        
         <option value="38 UK 5 1/2 US 6">38 UK 5 1/2 US 6</option>
        
	</select>
    <br>    
							
						<div>
							<p>QUANTITY:</p>
							<input type="integer" required="require" name="quantity">

						</div>

						

					<br>
					<button type="submit">add to bag</button>

   					 	
					</form>

					</div>
					
			</div>
</div>
</body>
@include('mastershoe')


