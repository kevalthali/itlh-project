<!DOCTYPE html>
<html>
<head>
	<title>add to chart</title>
    @include('stylesheet')
  <style type="text/css">
  
  .start{
  color: black;
  background-color: orange;
  text-align: center;
}

    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}
.checkout-info-element{
    font-family: Open Sans;
    font-size: 15px;
    font-weight: 600;
    color: #607077;
    margin-right: 20px;
    box-sizing: border-box;
    display: block;

  }

  .bag{
    font-style:italic;  
  font-family: "Times New Roman", Times, serif;
  font-size: 30px;
  padding-top: 30px;
  text-align: center;
  color: black;
  }

  .product{
  font-style:italic;  
  font-family: "Times New Roman", Times, serif;
  font-size: 30px;
  text-align: left;
}
.id{
  padding-bottom: 10px;
  font-size: 20;
  
}


</style>
</head>
<body>
    @include('nav')
  <div class="checkout-info-element">
              Need assistance? Call us at 351 210 497 840 
  </div>
  <div class="checkout-info-element">
    Free returns & exchanges - worldwide
  </div>

  <div class="bag">
  <p>/-SHOPPING BAG</p>
  </div>  



<div class="product"><h1>UNDANDY PRODUCT PAGE</h1></div>
<hr>
	<form >
    
    <div class="container">
    <div class="col-md-12">
      @foreach($addtocarts as $addtocart)
           <div class="col-md-6">
                <a href="{{url('addtocart',[$shoe->id])}}">
              <p>{{$shoe->name}}</p>
      
      
            </div>
                     
             <div class="col-md-6">
                
            <div>
            <p class="text-muted"> <strong>{{$shoe->prize}}</strong></p>
            </div>
      
            </div>   
    
   
          <div class="id">
                <button type="submit" class="registerbtn">Submit</button>
         </div>
          @endforeach
</div>
</div>
</form>
<hr>


</body>
</html>