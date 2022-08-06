<!DOCTYPE html>

<html lang="en">
<head>
<style>
.button {
  background-color: green ;
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
</head>
<?php include"head.php";?>
<body>


<?php include"top_nav.php";?>
    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('images/sk1.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/bb2.jpg');"></div>
                <div class="carousel-caption">
                   
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('images/b3.jpg');"></div>
                <div class="carousel-caption">
                    
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Marketing Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header text-primary">
                   <b>Online Blood Bank Management System</b>
                </h1>
            </div>
            		 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-user"></i> Donor Registration</h4>
                    </div>
                    <div class="panel-body">
                        <p></p><center>
                        <a href="Donor_reg.php" class="button button1">View</a>
                    </div>
                </div>
            </div>
			 <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-medkit"></i> Request For Blood</h4>
                    </div>
                    <div class="panel-body">
                        <p></p><center>
                        <a href="request_blood.php" class="button button1">View</a>
                    </div>
                </div>
            </div>
			 
			  <div class="col-md-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-search"></i>Search Donor</h4>
                    </div>
                    <div class="panel-body">
                        <p></p><center>
                        <a href="Search_Donor.php" class="button button1">View</a>
                    </div>
                </div>
            </div>
			 
        </div>
        <!-- /.row -->

        <!-- Portfolio Section -->
      <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary"><b>Blood Donor Camps</b></h2>
            </div>
            <div class="col-md-4 col-sm-6">
                
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/mm.jpg" alt="">
                
            </div>
            <div class="col-md-4 col-sm-6">
                
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/mm2.jpg" alt="">
                
            </div>
            <div class="col-md-4 col-sm-6">
                
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/mmmm.jpg" alt="">
         <!--       
            </div>
            <div class="col-md-4 col-sm-6">
                
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/m4.jpg" alt="">
                
            </div>
            <div class="col-md-4 col-sm-6">
              
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/mm5.jpg" alt="">
               
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="#">
                    <img class="img-responsive img-portfolio img-thumbnail img-hover" src="images/mm6.jpg" alt="">
                </a>
            </div>-->
        </div> 
        <!-- /.row -->

        <!-- Features Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header  text-primary"><b>Why Give Blood ?</b></h2>
            </div>
            <div class="col-md-6">
              <p><b>Blood donation is a community responsibility. While you're reading this, a local patient needs blood.</b></p>

			<p>
				 &#10004; Blood is needed every two seconds. <br><br>

                 &#10004; About one in seven people entering a hospital needs blood.<br><br>

				 &#10004; Blood is always needed for treatment of accident victims, <br>&nbsp;&nbsp;&nbsp;&nbsp;cancer patients, hemophiliacs and surgery patients.<br><br>

				 &#10004; Blood cannot be manufactured.<br><br>
				 &#10004; Only 37 percent of our country's population is eligible to give blood, &nbsp;&nbsp;&nbsp;&nbsp;and less than 10 percent of those who can donate actually do donate &nbsp;&nbsp;&nbsp; annually.<br>
            </p>
            </div>
            <div class="col-md-6">
                <img class="img-responsive" src="images/ct.jpg" alt="">
            </div>
        </div>
        <!-- /.row -->

        

        <!-- Footer -->
		<?php include"footer.php"; ?>

    </div>
   <!-- </script>-->

</body>

</html>
