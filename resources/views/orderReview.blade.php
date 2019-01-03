
@include('stylesheet')
@include('nav')


<style type="text/css">
.row{
		text-align: center;
		height: 100%;
		text-align: center;
		width:100%;
		display: table;
	}
	.myTable{
		margin:0 auto;
		border-collapse: collapse;
		font-family: arial,sans-serif;

	}
	td,th{
		padding: 8px;
		border:1px solid #dddddd;

	}
	tr:nth-child(even){
		background-color: #dddddd;
	}
	h1{
		text-align: center;
	}
	.logout{
		background-color: orange;
		color:white;
		padding: 12px 20px;
		border-radius: 4px;
		cursor: pointer;
		text-align: center;
	}
	.logout:hover{
		background-color: orange;
		color: black;
	}

</style>
<form  action="/confirm">
		{{ csrf_field() }} 
		<div class="row1">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login form">

					<h2>Bill To</h2>

					<div class="form-group">
						{{ $userDetails->name }}
					</div>

					<div class="form-group">
					{{ $userDetails->address }}
					</div>

					<div class="form-group">
						{{ $userDetails->city }}
					</div>

					<div class="form-group">
						{{ $userDetails->state }}
					</div>

					<div class="form-group">
						{{ $userDetails->pincode }}
					</div>

					<div class="form-group">
						{{ $userDetails->number}}
					</div>

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
					{{ $userDetails->name }}
					</div>

					<div class="form-group">
						{{ $userDetails->address }}
					</div>

					<div class="form-group">
						{{ $userDetails->city}}"  
					</div>

					<div class="form-group">
						{{ $userDetails->state}}
					</div>

					<div class="form-group">
						{{ $userDetails->pincode }}
					</div>

					<div class="form-group">
						{{ $userDetails->number }}
					</div>
					
				</div>
			</div>



				<div class="row">

					<div class="container">
						<table>
							<thead>
								<tr>
									<th> Id </th>
									<th>PRODUCT NAME</th>
									<th>QUANTITY</th>
									<th>PRIZE</th>
									<th>SIZE</th>
									<th>STATUS</th>
									<th>TOTAL</th>
									<th>DELETE</th>
								</tr>
							</thead>
							<tbody>
								@php($total = 0)
								@foreach($products as $product)

									<tr>
											<td>{{$product->id}}</td>

								          <td>{{ $product->name }} </td>

								          <td>{{ $product->quantity }} </td>

								          <td>{{ $product->prize }} </td>

								          <td>{{ $product->size }} </td>

								          <td>{{ $product->status }} </td>

								          <td>{{ $product->prize*(int)$product->quantity}} </td>
								         

								           <td><a href="/removeshoe/{{ $product->id }}">delete</a></td>
									</tr>
									@php($total += ((int)$product->quantity *(int) $product->prize))
								@endforeach

								Grand Total : {!! $total !!}
							</tbody>

						</table>
					</div>
					<hr>
					<input type="hidden" name="grand-total" value="grand-total">
						<div class="payment-option"> 

		

		
					<label><strong>Proceed to Payment</strong></label>
	
				
					<label><input type="radio" name="payment_method" id="COD" value="COD">
					COD</label>
				
			
				
			<button type="submit" class="btn btn-default">Confirm Order</button>
		
	</div>
</form>
				</div>
						

	


	

				
						
					

