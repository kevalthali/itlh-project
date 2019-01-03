<!DOCTYPE html>
<html>
<head>
	<title> add product</title>
	<style type="text/css">
		input[type=text], select, textarea {
   
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    
}
.h1{
    text-align: center;
}
.container{
    text-align: center;
}

/* Style the submit button with a specific background color etc */
input[type=submit] {
    background-color: orange;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* When moving the mouse over the submit button, add a darker green color */
input[type=submit]:hover {
    background-color:orange ;
    color: black;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

	</style>
</head>
<h1 align="center"> ADD PRODUCT </h1>
<body>
	<div class="container">
        <form  method="POST" action="/addproduct"  enctype="multipart/form-data">
            {{ csrf_field() }} 
		

    <label for="fname">PRODUCT NAME:-</label>
    <input type="text"  name="name" placeholder="enter product name" size="40" required="require">
<br>

                <label for="description">DESCRIPTION</label>
            <input type="text" name="description" placeholder="product details" size="40" required="require">
         <br>                  
    <label class="id">QUANTITY:-</label>
         <select id = "myList" name="quantity">
                <option value = "1">1</option>
                <option value = "2">2</option>
                <option value = "3">3</option>
                <option value = "4">4</option>
                <option value = "5">5</option>
                <option value = "6">6</option>
                <option value = "7">7</option>
                <option value = "8">8</option>
                <option value = "9">9</option>
                <option value = "10">10</option>
            </select>      

	<br>   
    <label class="id">SIZE:-</label>
     
      <select id = "size" name="size">
         <option value="Select your shoe">Select your shoe</option>
         <option value="38 UK 5 1/2 US 6">38 UK 5 1/2 US 6</option>
         <option value="39 UK 6  US 6 1/2">39 UK 6  US 6 1/2</option>
         <option value="40 UK 7 US 7">40 UK 7 US 7</option>
         <option value="41 UK 8 US 7 1/2">41 UK 8 US 7 1/2</option>
         <option value="42 UK 9  US 8">42 UK 9  US 8</option>
         <option value="43 UK 10 US 8 1/2">43 UK 10 US 8 1/2</option>
         <option value="44 UK 11 US 9">44 UK 11 US 9</option>
         <option value="45 UK 11 US 9 1/2">45 UK 11 US 9 1/2</option>
	</select>
    <br>    

  <label class="id">PRIZE:-</label>
  		<input type="text" name="prize" placeholder="enter prize" size="20"required>
<br>    

 <label for="image"> image</label>
    <input type="file"  name="image" id="fileupload" > <br>

    
<input type="submit" name="submit" value="submit"> 

</form>
</div>


</body>
</html>