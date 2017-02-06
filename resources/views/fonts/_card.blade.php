<?php
if (!isset($inverse)){
	$inverse = false;
}
?>
<div class="col-sm-6 col-md-3">
	
@if ($inverse)
	<div class="card card-invsere" style="background-color: #333; border-color: #333;" />
@else
	<div class="card">
@endif
	  <img class="card-img-top" width="100%" src="/img/fonts-card-img.jpg" alt="Card image cap">
	  <div class="card-block">
	    <h4 class="card-title">Card title</h4>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <a href="#" class="button-text btn btn-primary">Link</a>
	  </div>
	</div>
</div>

<div class="col-sm-6">
@if ($inverse)
	<div class="card card-invsere" style="background-color: #333; border-color: #333;" />
@else
	<div class="card">
@endif
	  <div class="card-block">
	    <h4 class="card-title">Card title</h4>
	    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
	    <p class="card-text">
	    	Some quick example text to build on the card title and make up the bulk of the card's content.
	    	Some quick example text to build on the card title and make up the bulk of the card's content.
	    </p>
	    <p class="card-text">
	    	Some quick example text to build on the card title and make up the bulk of the card's content.
	    	Some quick example text to build on the card title and make up the bulk of the card's content.
	    </p>
	    <p class="card-text">
	    	Some quick example text to build on the card title and make up the bulk of the card's content.
	    	Some quick example text to build on the card title and make up the bulk of the card's content.
	    </p>
	  </div>
	</div>	
</div>

<div class="col-sm-6 col-md-3">
@if ($inverse)
	<div class="card card-invsere" style="background-color: #333; border-color: #333;" />
@else
	<div class="card">
@endif
	  <div class="card-block">
	    <h4 class="card-title">Card title</h4>
	  	<ul>
	  		<li>Item 1</li>
	  		<li>Item 2</li>
	  		<li>Item 3</li>
	  		<li>Item 4. With some extra text.</li>
	  		<li>Item 4. With some extra text.</li>
	  		<li>Item 4. With some extra text.</li>
	  		<li>Item 4. With some extra text.</li>
	  	</ul>
	  </div>
	</div>
</div>
