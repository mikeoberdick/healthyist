<?php
//Login Page Content
?>

<div class="row">
	<div class="col-md-4 offset-md-4">
		
		<ul class="nav nav-tabs" role="tablist">
	  		<li class="nav-item">
	    		<a class="nav-link active" data-toggle="tab" href="#login" role="tab">Login</a>
	 		 </li>
		  <li class="nav-item">
		    <a class="nav-link" data-toggle="tab" href="#enroll" role="tab">Enroll</a>
		  </li>
		</ul>

	<div class="tab-content">
	  <div class="tab-pane fade show active" id="login" role="tabpanel">
	  		<?php echo do_shortcode ('[ninja_form id=2]'); ?>
	  </div>

	  <div class="tab-pane fade" id="enroll" role="tabpanel">
	  		<?php echo do_shortcode ('[ninja_form id=4]'); ?>
	  </div>
	</div>

	</div>
</div>