<div class="container">
	<div class="row">
		<div class="col-lg-9">
			<div class=" panel panel-default">
				<div class="panel-body">
					<div class="page-header">
						<h3>Already have an account? </h3>
					</div>
					
					<?php
						
						
			$image_properties = array(
          'src' => 'img/image5.jpg',
         'class' => 'featuredimg',
          'width' => '50%');
		  echo img($image_properties);
					?>
					
					<div id="signup_form">
         <!--<p class="heading">User Login</p>-->
 
 <h3>Login</h3>
<?php echo form_open('login/validate_credentials'); ?>
<?php echo validation_errors('<p class="error">','</p>'); ?>
<p>
<label for="username">*Patient ID: </label>
<?php echo form_input('patientid',set_value('patientid')); ?>
</p>
<p>
<label for="password">*Password: </label>
<?php echo form_password('password'); ?>
</p>

<!--<div class="errors" <?php echo validation_errors() ?></div>-->
<p>
<?php echo form_submit('submit','Login'); ?>
</p>
<p><?php echo form_close(); ?></p>



</div>
					
					
					
					
					
				</div>
			</div>
		</div>
		
		<div class="col-lg-3">
			<div class="list-group">
				<a href="#" class="list-group-item">
				<h4 class="list-group-item-heading">Details</h4>
				<!--<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
					<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" id ="search"class="btn btn-default">Submit</button>
				</form>-->
				
				<p class="list-group-item-text">
				Our selection of amazing stock photos and images is huge, with millions of professional photos that have been carefully chosen and sorted specifically for Microsoft Office users like you. Whether you are looking for cool backgrounds, clipart or digital pictures to illustrate PPT slide presentations, Outlook emails, webpages, printed brochures or other Word documents, we’ve got you covered. And whether your application is high-tech business, education or medical technology, and whether you are looking for something creative or corporate, you guessed it: We’ve got you covered. 
				</p>
				
				</a>
			
			</div>
		</div>
	</div>

</div>