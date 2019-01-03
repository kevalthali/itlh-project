@include ('stylesheet')

@include('nav')
	<title>user registration form</title>
	<style type="text/css">
		h1{
			text-align: center;
		}
		#register {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
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
 

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div id="register" class="animate form">
			<form  method="POST" action="/register">
			{{ csrf_field() }} 


				

				<h1> USER REGISTRATION FORM </h1> 

				<p> 
					<label for="name" class="fname" data-icon="u">Name</label>
					<input id="name" name="name" required="required" type="text" placeholder="Enter your Name" />
				</p>

				<p> 
					<label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
					<input id="emailsignup" name="email" required="required" type="email" placeholder="Enter your email"/> 
				</p>

				<p> 
					<label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
					<input id="passwordsignup" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/>
				</p>
				<p> 
					<label for="number" class="number" data-icon="p">Enter Your Number</label>
					<input id="number" name="number" required="required" type="number" placeholder="Enter Number"/>
				</p>
					
				<p> 
					<label for="address" class="address" data-icon="p">Enter Your address</label>
					<input id="address" name="address" required="required" type="text" placeholder="address"/>
				</p>

				<p> 
					<label for="City" class="city" data-icon="p">City</label>
					<input id="City" name="city" required="required" type="text" 
					placeholder="City"/>
				</p>	
					
				<p> 
					<label for="State" class="state" data-icon="p">State</label>
					<input id="state" name="state" required="required" type="text" placeholder="State"/>
				</p>

				<p> 
					<label for="pincode" class="pincode" data-icon="p">Pincode</label>
					<input id="pincode" name="pincode" required="required" type="number" placeholder="pincode"/>
				</p>

				<p> 
					<label for="landmark" class="landmark" data-icon="p">Landmark</label>
					<input id="landmark" name="landmark" required="required" type="text" placeholder="landmark"/>
				</p>


				<p class="signin button"> 
					<input type="submit" value="Register"> 
				</p>
				<p class="register">  
					Already a member ?
					<a href="login" class="to_login"> Go and log in </a>
				</p>
			</form>
		</div>


@include('footer')
</body>
</html>