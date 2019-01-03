 <!DOCTYPE html>
<html>
<head>
  <title>product</title>
  <style type="text/css">
    input[type=text], select, textarea {
   
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    
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

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}

  </style>
</head>
<h1 align="center"> UPDATE PRODUCT </h1>
<body>
 <form  method="POST" action="/updateproduct">
            {{ csrf_field() }} 
            <input type="hidden" name="id" value="{{$product->id}}">

  <div class="container">
     <label for="fname">PRODUCT NAME:-</label>
    <input type="text"  name="name" placeholder="enter product name" value="{{$product->name}}" size="40" required="require">
<br>

   
<br>

  <label class="id">PRIZE:-</label>
      <input type="text" name="prize" placeholder="enter prize" size="20" 
      required="require" value="{{$product->prize}}">

    <br> 
     <label class="id">QUANTITY:-</label>
      
           <select id = "myList"name="quantity" 
      required="require" value="{{$product->quantity}}">
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
     <label for="description">DESCRIPTION:-</label>
     <input type="text" name="description"  size="20" required="requere"                           value="{{$product->description}}">>
<br>
 <label for="image"> image</label>
    <input type="file"  name="image" id="image" src="public/images/uploads">
     <br>
     
    <input type="submit" value="Submit"> 


</div>


</body>
</html>