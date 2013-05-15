<!DOCTYPE html>
<html lang="en">
	<head>
    <title>Kashyap Bhatt - Personal Web Site</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="css/custom.css" rel="stylesheet">
  </head>
	<body>
		<div class="navbar-wrapper">
			<div class="container-fluid">
				<div class="navbar">
				  <div class="navbar-inner">
				    <a class="brand" href="index.php">Kashyap's Website</a>
				    <ul class="nav">
				      <li class="active"><a href="index.php">Home</a></li>
				      <li><a href="project.php">Project</a></li>
				      <li><a href="resources.php">Resources</a></li>
				    </ul>
				  </div>
				</div>
			</div>
		</div>

		<!-- START carousel -->
		<div id="myCarousel" class="carousel slide">
	    <ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
	    </ol>
    	<!-- Carousel items -->
	    <div class="carousel-inner">
	    <div class="active item"><img src="images/img1.jpg" alt="Slide-01"></div>
	    <div class="item"><img src="images/img2.jpg" alt="Slide-01"></div>
	    <div class="item"><img src="images/img3.jpg" alt="Slide-01"></div>
	    </div>
    	<!-- Carousel nav -->
	    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
	    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
		<!-- END carousel -->
		
		<!-- START Main Container -->
		<div class="container marketing">
			<div class="hero-unit">
  			<h1>Website Features <small class="pull-right">IT146 - Final Exam</small></h1>
			</div>
		  <div class="row">
		        <div class="span4 custom-hero-unit">
		          <!--<img class="img-circle" data-src="holder.js/140x140">-->
		          <h2>Elegant Design</h2>
		          <p>Optimal viewing experince regardless of which device you are using to access this website. Use of twitter bootstrap tools for responsive behaviour.</p>
		          <p><a target="_blank" href="http://en.wikipedia.org/wiki/Responsive_web_design" class="btn btn-inverse">Learn more <i class="icon-chevron-right icon-white"></i></a></p>
		        </div><!-- /.span4 -->
		        <div class="span4 custom-hero-unit">
		          <h2>Open sourced</h2>
		          <p>Code is open sourced for every one to see. Any one can build upon this piece of code and extend this web page to suit their particular needs.</p>
		          <p><a target="_blank" href="https://github.com/kashyap-bhatt15/IT146_FINAL" class="btn btn-inverse">View Code <i class="icon-chevron-right icon-white"></i></a></p>
		        </div><!-- /.span4 -->
		        <div class="span4 custom-hero-unit">
		          <h2>Use of latest tools</h2>
		          <p>Use of HTML5, CSS3, Twitter bootstrap, Heroku, Git, Github, JavaScript, jQuery like latest tools.</p>
		          <p><a target="_blank" href="mailto:kpbhatt@mail.fresnostate.edu" class="btn btn-inverse">Ask for report <i class="icon-chevron-right icon-white"></i></a></p>
		        </div><!-- /.span4 -->
		      </div>
		</div>
		<!-- END Main Container -->

		<!-- START Footer -->
		<footer class="footer">
			<div class="container">
				<p class="pull-right">
					<a href="#">Back to top</a>
				</p>
				<p>Developed By: Kashyap Bhatt</p>

				<p class="pull-right">
					<a target="_blank" href="https://github.com/kashyap-bhatt15/IT146_FINAL">Codebase</a>
				</p>
				<p>Graduate Student at FresnoState</p>
			</div>
		</footer>
		<!-- END Footer -->

		<script src="http://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
    	$('#myCarousel').carousel({
  			interval: 1000
			})
    </script>
	<body>
</html>