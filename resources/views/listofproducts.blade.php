<!DOCTYPE html>
<html>
<head>
	<title>list of products</title>
</head>
<style type="text/css">
	.row{
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
<body>
	 
	<h1>LIST OF PRODUCTS</h1>

				<div class="row">
						<table class="myTable" border>
							<thead>
								<tr>
									<th>PRODUCT NAME</th>
									<th>QUANTITY</th>
									<th>PRIZE</th>
									<th>SIZE</th>
									<th>STATUS</th>
									<th>EDIT</th>
									<th>DELETE</th>>
								</tr>
							</thead>

							<tbody>
								@foreach($products as $product)

									<tr>
										

								          <td>{{ $product->name }} </td>

								          <td>{{ $product->quantity }} </td>

								          <td>{{ $product->prize }} </td>

								          <td>{{ $product->size }} </td>

								          <td>{{ $product->status }} </td>

								          <td><a href="/editproduct/{{ $product->id }}">edit</a></td>
								         
								           <td><a href="/deleteproduct/{{ $product->id }}">delete</a></td>
									</tr>

								@endforeach
							</tbody>
					
	
						</table>
					
					<br>
				 <p>
				 	<a  class='logout' href="login">logout</a>
			
				</p> 
</div>

				
</body>
					
					
</html>