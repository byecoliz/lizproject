
<!--start Modals (Popup contact form) -->
<div class="modal fade" id="contact" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<form class="form-horizontal" method="post" action="mailer.php">
				
				<div class="modal-header">
					<p>Contact us</p>
				</div>
				<div class="modal-body">
					<h3>Leave a comment / inquiry</h3>
					
					<div class="form-group">
						<label for="contact-name" class="col-lg-2 control-label">Name:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-name" name="contact-name" placeholder="fullname">
						</div>
					</div>
					
					<div class="form-group">
						<label for="contact-email" class="col-lg-2 control-label">Email:</label>
						<div class="col-lg-10">
							<input type="email" class="form-control" id="contact-email" name="contact-email" placeholder="you@example.com">
						</div>
					</div>
					<div class="form-group">
						<label for="contact-subject" class="col-lg-2 control-label">Subject:</label>
						<div class="col-lg-10">
							<input type="text" class="form-control" id="contact-subject" name="contact-subject" placeholder="Subject">
						</div>
					</div>
					
					<div class="form-group">
						<label for="contact-msg" class="col-lg-2 control-label">Message:</label>
						<div class="col-lg-10">
							<textarea class="form-control" rows="8" id="inputMessage" name="inputMessage"></textarea>
						</div>
					</div>

				</div>
				<div class="modal-footer">
					<button class="btn btn-primary" type="submit">Send</button>
					<a class="btn btn-default" data-dismiss="modal">Close</a>
				</div>
			</form>
		</div>
	</div>

</div>

	<!--start footer -->
<div class ="navbar navbar-default navbar-fixed-bottom">
	<div class="container">
		<p class="navbar-text puul-left">Copyright  &copy 2014 JL Hospital  </p>
		<a href="mailto:info@jlhospital.com" class ="navbar-btn btn-link pull-right">info@jlhospital.com</a>
	</div>
</div>
	
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js" charset="utf-8"></script>
    <script src="/jh/js/bootstrap.min.js"></script>
   
  </body>
</html>