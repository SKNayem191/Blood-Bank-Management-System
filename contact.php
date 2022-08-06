<?php include"config.php";?>
<!DOCTYPE html>
<html lang="en">
<style>
.button {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 2px 2px;
  cursor: pointer;
}
.button1 {font-size: 10px;}
.button1 {border-radius: 8px;}
</style>
<?php include"head.php";?>
<body>

<?php
	 include"top_nav.php";
?>
	
    <!-- Page Content -->
    <div class="container" style="margin-top:70px;">

			<div class="row">
				<div class="col-md-8">
				<?php
					if(isset($_POST["submit"]))
					{
					 $sql="INSERT INTO messages (NAME, CONTACT, EMAIL, MESSAGE, STATUS,LOGS) VALUES ('{$_POST["name"]}', '{$_POST["phone"]}', '{$_POST["email"]}', '{$_POST["message"]}', 1,NOW());";
						if($con->query($sql))
				{
					echo '
					<div class="alert alert-success">
						<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
						<strong>Success!</strong> Your message has been Successfully sent.
					</div>
					
					
					';
				}
					}
				?>
		
				<h3 class='text-primary'><b>Send us a Message</b></h3>
                <form method="post" action="contact.php" role="form" >
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" required>
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" required>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email"  >
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="5" cols="100" class="form-control" name="message" required maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <!-- For success/fail messages -->
                    <center>
                    <button type="submit" class="button button1" name="submit"> Send Message</button>
                </form>
				
			</div>
			
            <div class="col-md-4">
                <h3 class='text-primary'><b>Contact Details</b></h3>
                <p>
                4 Embankment Drive Road, <br>Off Dhaka-Ashulia Road, <br>Sector-10, Uttara Model Town,<br> Dhaka 1230
                </p>
                 <p><i class="fa fa-phone"></i> 
                    <abbr title="Phone">Phone</abbr>: 01765365583</p>
                <p><i class="fa fa-envelope-o"></i> 
                    <abbr title="Email">Email</abbr>: <a href="#" >bloodbank@iubat.edu</a>
                </p>
                <p><i class="fa fa-clock-o"></i> 
                    <abbr title="Hours">Working</abbr>: 24 Hours</p>
				<p><i class="fa fa-globe"></i> 
                    <abbr title="Website">Website</abbr>: <a href="https://www.iubat.edu" target=”_blank” >www.iubat.edu</a></p>
                <ul class="list-unstyled list-inline list-social-icons">
                    <li>
                        <a href="https://www.facebook.com/IUBAT" target=”_blank” ><i class="fa fa-facebook-square fa-2x"></i></a>
                    </li>
                    
                </ul>
            </div>
        </div>


        <hr>
		<?php include"footer.php"; ?>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

   

</body>

</html>
