@include('stylesheet')

@include('nav')


	<title>user login form</title>
	<style type="text/css">
		
		#container_demo {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
    text-align: center;
}
h1{
	
	text-align: center;
}
input[type=submit]:hover {
    background-color:orange ;
    color: black;
}

input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
	</style>
</head>
<body>
	<p class="text-center">
		@if( Session::has( 'success' ))
		     {{ Session::get( 'success' ) }}
		@elseif( Session::has( 'warning' ))
		     {{ Session::get( 'warning' ) }} 
		@endif
	</p>
<form  method="post" action="/login">
		{{ csrf_field() }} 

	<div id="container_demo" >
	<a class="hiddenanchor" id="toregister"></a>
	<a class="hiddenanchor" id="tologin"></a>
	<div id="wrapper">
		<div id="login" class="animate form">			
				

				<h1> Login</h1> 
				<p>
		<label for="username" class="uname" data-icon="u" >E-mail</label>
		<input id="username" name="email" type="text" placeholder="enter username " required="require" /> 
				</p>

				<p> 
					<label for="password" class="youpasswd" data-icon="p"> Password </label>
					<input id="password" name="password" type="password" placeholder="eg. X8df!90EO" required="requure" /> 
				</p>

				<div><input type="submit" value="login"></div>
				
				
				<br>
					<li><a href="registration"><strong>Registration</strong></a></li>
		
		</div>
		<br>


@include('footer')