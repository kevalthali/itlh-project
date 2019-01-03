@include('stylesheet')

@include('nav')

     
			

		<div class="row">
			<div class="col-md-12">
                @foreach($shoes as $shoe)
    	<div class="col-md-3">
    		<a href="{{url('shoeDetails',[$shoe->id])}}">
    			<div class="product-card text-center">
    				<img src="{{ $shoe->image}}" class="img-responsive height-250">
    				<div class="black">
    					<p><strong>{{$shoe->name}}</strong></p>
    				</div>
    				<p class="text-muted"> <strong>${{$shoe->prize}}</strong></p>
    				</div>
    			</a>
    			</div>
    			   @endforeach
    	</div>
    
      
  
		

	
@include('footer')

