@include ('stylesheet')

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
	.container{
		padding-left: 20%;
	}
.bag{
	text-align: center;
	font-style: italic;
	font-size: 50px;
}
</style>
	<div class="bag"><p>Your Bag</p>	</div>
	
				
						
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

								          

								          <td>{{ $product->prize*(int)$product->quantity}} </td>
								         

								           <td><a href="/removeshoe/{{ $product->id }}">delete</a></td>
									</tr>
									@php($total += ((int)$product->quantity *(int) $product->prize))
								@endforeach

								
							</tbody>

						</table>
						<br>
						
					
					<a class="btn btn-default check_out" href="{{ url('/checkout')}}">Proceed to Purchase</a> 

							</div>
				</div>

							
							
								
								
							
						
					
	
				
					


					
					
		
	
		
			
		