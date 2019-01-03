
@include('stylesheet')
@include('nav')

<section id="form">
	
	<div class="container">
		<form name="paymentform" id="paymentform" action="{{ url ('/place-order') }}" method="post">
	{{csrf_field()}}
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login form">
					<h2>Bill To</h2>
					<div class="form-group">
						<input name="name"id="name" value="{{ $userDetails->name }}" type="text"  placeholder="Billing Name " class="form-control" required="require" />
					</div>

					<div class="form-group">
						<input name="address" id="address"  required="require" value="{{ $userDetails->address }}"type="text"  placeholder="Billing Address " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="city" id="city" required="require" value="{{ $userDetails->city }}" type="text"  placeholder="Billing City" class="form-control"/>
					</div>

					<div class="form-group">
						<input name="state" id="state" required="require" value="{{ $userDetails->state }}"type="text"  placeholder="Billing State " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="pincode" id="pincode" required="require" value="{{ $userDetails->pincode }}" type="text"  placeholder="Billing Pincode " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="number" id="number" required="require" value="{{ $userDetails->number}}" type="text"  placeholder="Billing Mobile " class="form-control"/>
					</div>

					

					
				
					

					</div>
			</div>
			<div class="col-sm-1">
				<h2></h2>
			</div> 

			 <div class="col-sm-4">
			<div class="signup form">
					<h2>Ship To</h2>
						
					<div class="form-group">
						<input name="name" id="name" required="require"  value="{{ $userDetails->name }}"type="text"  placeholder="Shipping Name "class="form-control"/>
					</div>

					<div class="form-group">
						<input name="address" id="address" required="require" value="{{ $userDetails->address }}" type="text"  placeholder="Shipping Address " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="city" name="city" required="require"  value="{{ $userDetails->city}}" type="text"  placeholder="Shipping City" class="form-control"/>
					</div>

					<div class="form-group">
						<input name="state" name="state" required="require" value="{{ $userDetails->state}}"type="text"  placeholder="Shipping State " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="pincode" required="require" id="pincode" value="{{ $userDetails->pincode }}"type="text"  placeholder="Shipping Pincode " class="form-control"/>
					</div>

					<div class="form-group">
						<input name="number" id="number" required="require" value="{{ $userDetails->number }}" type="text"  placeholder="Shipping Mobile " class="form-control"/>
					</div>

					
					
					
				</div>
 
 <div>
 <button type="submit" value="submit">Proceed to Purchase</button>
					</div>
		</div>
	</div>
</form>
</section>


@include('footer')