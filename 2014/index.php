<?php if (substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) ob_start("ob_gzhandler"); else ob_start(); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Search-Based Software Testing. June 2 - June 3, Hyderabad. Held in conjunction with ICSE 2014 - IEEE International Conference on Software Engineering.">
        <meta name="keywords" content="sbst,sbst 2014, search based software testing, icse workshops, icse 2014, search based software engineering,ssbse">

        <title>SBST 2014 - 7th International Workshop on Search-Based Software Testing</title>

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
				<link rel="stylesheet" href="style.css?i=2">
        <script src="//code.jquery.com/jquery-1.10.1.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-color/2.1.2/jquery.color.min.js"></script>


        <!-- Latest compiled and minified JavaScript -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">


        <script>
            $(document).ready(function(){

						$('.schedule-buttons .btn').click(function(e){
				e.preventDefault();
				$('.schedule-buttons .btn').removeClass('btn-info');
				$(this).addClass('btn-info');
				$('#day_schedules ul').hide();
				$('#'+$(this).data('schedule')).show();
			});

                $('a').click(function(){
                    $('html, body').animate({
                        scrollTop: $( $.attr(this, 'href') ).offset().top
                    }, 500);
                    return false;
                });

                var navHeight= $('.navbar').outerHeight(true) + 10;
                $('body').scrollspy({
                    target: '#topnav',
                    offset: navHeight
                })

                $('window').on('load', function () {
                    $('body').scrollspy('refresh')
                })

                $(document).scroll(function(e) {
                    if($(this).scrollTop() > $("#toptop").height()) {
                        $("#topnav").addClass('navbar-fixed-top');
                        $('body').css('paddingTop','50px');
                    } else {
                        $("#topnav").removeClass('navbar-fixed-top');
                        $('body').css('paddingTop','0');
                    }
                });
                if (!$(".navbar-toggle").is(":visible")) {
                    $(document).scroll(function() {
                        var x = $(this).scrollTop();
                        $("#toptop").css('background-position', '0% ' + parseInt(x / 2) + 'px');
                    });
                }


            });

            $(window).load(function(){
                $('#topinner').delay( 300 ).animate({
                    backgroundColor: "rgba(255,255,255,0)"
                }, 1500 );
            });

        </script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49937607-2', 'searchbasedsoftwaretesting.org');
  ga('send', 'pageview');

</script>
    </head>

    <body data-spy="scroll" data-target="#navbar-sbst">
        <style>
       
        </style>
        <div id="toptop">
            <div id="topinner">
                <div class="container" style="padding-top:130px;">
                    <center>
                        <div class="event_name_beginner"><h3 style="">7th International Workshop on</h3></div>
                        <h1 class="bigh1">Search-Based Software Testing</h1>
                        <h3 class="event_location">June 2 - June 3, Hyderabad</h3>
                        <h4 style="color:white">
                            Held in conjunction with ICSE 2014 - IEEE International Conference on Software Engineering
                        </h4></center>
                </div>
            </div>
        </div>

        <!-- Static navbar -->
        <nav id="topnav" class="navbar navbar-default" role="navigation">
            <div class="container">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand hidden-sm" href="#toptop">SBST 2014</a>
                </div>

                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#news">News</a></li>
                        <li class=""><a href="#about">About</a></li>
                        <li class=""><a href="#keynote">Keynotes</a></li>
						<li class=""><a href="#accepted">Accepted Papers</a></li>
                  <? /*      <li class=""><a href="#call">Call for Papers</a></li>
                        <li class="hidden-md hidden-sm"><a href="#submission">Submissions</a></li>
                        <li class=""><a href="#dates">Dates</a></li> 
                        <!--Phil: commented this out for now due to lack of space in menu bar -->*/ ?>
                        <li class=""><a href="#schedule">Schedule</a></li>
												<li class="hidden-sm hidden-md"><a href="#panel">Panel</a></li>
												<li class="hidden-sm hidden-md"><a href="#committee">Committee</a></li>
												<li class="visible-sm visible-md"><a href="#panel">Panel & Committee</a></li>
												<? /*<li class="hidden-sm"><a href="#organisation">Organisation</a></li>*/?>

                    </ul>

                    <ul class="nav navbar-nav navbar-right">
										<li class="hidden-sm"><a href="#organisation">Organisation & Contact</a></li>
										<li class="visible-sm"><a href="#organisation">Contact</a></li>
                        <li class="hidden-lg hidden-md hidden-sm"><a href="http://2014.icse-conferences.org/">ICSE 2014</a></li>
                    </ul>
                </div>
            </div></nav>


        <div class="container" id="news">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron" style="background:none;">
            <h2>Latest News</h2>
        <div class="bs-callout bs-callout-info" id="contact">
   <? /* <h3>Call for Position &amp; Discussion Papers</h3>
      <p>Put your position forward on SBST,  or, raise an issue of importance in 2 pages or less. Papers will be reviewed 
      with respect to relevance and their ability to spark discussions. <strong>(Deadline: 14th February)</strong> (<a href="#submission">Paper format and 
      submission details below</a>)</p>*/ ?>
	  <h3>Registration</h3>
	  <p>Registration is via the ICSE website: <a href="http://2014.icse-conferences.org/registration">http://2014.icse-conferences.org/registration</a></p>
	  <? /*<div class="alert alert-warning"><strong>Early Bird Discount:</strong> Obtain a discount by registering until <u>April 14th, 2014</u>. Students 
and members of the ACM/IEEE are entitled to reduced fees.</div> */?>
      <p>Visa letters are ordered with your registration. For more information please visit: <a href="http://icse2014.acm.org/visa">http://icse2014.acm.org/visa</a></p>
	  
    </div>
            </div>

        </div> <!-- /container -->

        <div class="container" id="about">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron"   style="background-color:rgb(231, 241, 250);">
                <h2>About the Workshop</h2>
                <p>Search-Based Software Testing (SBST) is the application of optimizing search techniques (for example, Genetic Algorithms) to solve problems in software testing. SBST is used to generate test data, prioritize test cases, minimize test suites, reduce human oracle cost, verify software models, test service-orientated architectures, construct test suites for interaction testing, and validate real-time properties.</p>
                <p>The objectives of this workshop are to bring together researchers and industrial practitioners both from SBST and the wider software engineering community to share experience and provide directions for future research, and to encourage the use of search techniques in novel aspects of software testing in combination with other aspects of the software engineering lifecycle.</p>
            </div>

        </div> <!-- /container -->

        <div class="container" id="keynote">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Keynotes</h2>
                <div class="row">
                    <div class="col-md-4"><a href="http://wwwen.uni.lu/snt/people/lionel_briand"><img class="media-object img-responsive img-thumbnail" src="assets/imgs/Briand-large-crop2.jpg" alt="Lionel Briand" style="max-width:210px;"></a></div>
                    <div class="col-md-8">
                        <h2 class="media-heading">Lionel Briand</h2>
                        <hr class="soften">
                        <p>Professor and FNR PEARL Chair, Interdisciplinary Centre for ICT Security, Reliability and Trust (SnT)
                            University of Luxembourg</p>
                        <hr class="soften">
                        <h3 class="talk_title">"Applying SBST in industry"</h3></div>
                </div>
								<hr>
								<div class="row">
                    <div class="col-md-4"><a href="http://www.doc.ic.ac.uk/~cristic/"><img class="media-object img-responsive img-thumbnail" src="assets/imgs/cristian.jpg" alt="Lionel Briand"></a></div>
                    <div class="col-md-8">
                        <h2 class="media-heading">Cristian Cadar</h2>
                        <hr class="soften">
                        <p>Cristian Cadar is a Senior Lecturer in the Department of Computing at Imperial College London, where he leads the Software Reliability Group. His research interests involve building practical tools for improving the reliability and security of software systems.</p>
                        <hr class="soften">
                        <h3 class="talk_title">"Combining DSE with SBST"</h3></div>
                </div>

            </div>

        </div> <!-- /container -->


<?php /*
        <div class="container" id="call">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Call for Papers <small><a href="cfp.pdf">(View in PDF)</a></small></h2>

                <p>Researchers and practitioners are invited to submit:
                <ul>
                    <li><span style="text-decoration: line-through">Full papers (maximum of 10 pages)<!-- to the workshop on original research--either empirical or theoretical--in SBST, practical experience of using SBST, or SBST tools.--></span>  (Deadline passed)</li>
                    <li><span style="text-decoration: line-through">Short papers (maximum of 4 pages)<!-- that describe novel techniques, ideas and positions that have yet to be fully developed; or are a discussion of the importance of a recently published SBST result by another author in setting a direction for the SBST community, and/or the potential applicability (or not) of the result in an industrial context.--></span>  (Deadline passed)</li>
                    <li><span style="text-decoration: line-through">PhD papers (maximum of 4 pages)<!-- PhD papers are invited for students to showcase their SBST research and to receive feedback from senior members of the SBST community. Papers
submitted to this track should be no more than 4 pages in length. To be eligible, a student must be registered on a doctoral or masters programme and must not yet have
completed their studies. It is the expectation that the student will give the presentation at the symposium, though there may be other authors on the paper. Papers need not contain a complete work, although initial experimental results would be very welcome. This would be an ideal venue for PhD students to present and discuss their research agenda in the company of leading experts in the domain.--></span>  (Deadline passed)</li>
                    <li>Position &amp; Discussion papers (maximum of 2 pages), that describe a position on SBST,  or, raise an issue of importance. Papers will be reviewed with respect to relevance and their ability to spark discussions. <strong>(Deadline: 14th Feb)</strong> </li>
                </ul>

                <p>In all cases, papers should address a problem in the software testing/verification/validation domain or combine elements of those domains with other concerns in the software engineering lifecycle.  Examples of problems in the software testing/verification/validation domain include (but are not limited to) generating testing data, prioritizing test cases, minimizing test suites, verifying software models, testing service-orientated architectures, constructing test suits for interaction testing, and validating real-time properties.</p>

                <p>The solution should apply a metaheuristic search strategy such as (but not limited to) random search, local search (e.g. hill climbing, simulated annealing, and tabu search), evolutionary algorithms (e.g. genetic algorithms, evolution strategies, and genetic programming), ant colony optimization, and particle swarm optimization.</p>


            </div>

        </div> <!-- /container -->
*/ ?>
<? /*
        <div class="container" id="submission">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
			
			<?php /*
                <h2>Abstracts</h2>
                <p>Friday January 24, 2014</p>
<hr style="border-top-color:#CBD7E0">
                <h2>Completed Paper</h2>
                <p>Friday January 31, 2014</p>
<hr style="border-top-color:#CBD7E0">
*/ /* ?>
				<h2>Submission and Format:</h2>

                <p>All papers must conform, at time of submission, to the <a href="http://www.acm.org/sigs/publications/proceedings-templates">ACM Formatting Guidelines</a> (LaTeX users, please use the "Option 2" style). All submissions must be in PDF format.  Details on where to submit your papers will appear here shortly.</p>
				<hr style="border-top-color:#CBD7E0">
				<a class="btn btn-lg btn-block btn-info" href="https://www.easychair.org/conferences/?conf=sbst2014" title="Click here to submit">Submission Link - EasyChair</a>
            </div>

        </div> <!-- /container -->
*/ ?>

<? /*
        <div class="container" id="dates">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Dates</h2>
                <p>
<ul class="list-group">
	<li class="list-group-item">Abstract Submission: January 24, 2014</li>
	<li class="list-group-item">Complete Paper Submission: January 31, 2014</li>
    <li class="list-group-item">Author Notification: February 24, 2014</li>
	<li class="list-group-item">Camera-Ready: March 14, 2014</li>
	<li class="list-group-item">Workshop: June 2 - June 3, 2014</li>
</ul>
								</p>
            </div>

        </div> <!-- /container -->
*/ ?>



<div class="" style="margin-bottom: 50px;
background: beige;
padding-bottom: 30px;" id="accepted">

<div class="container">
                <h1 style="text-align:center; margin:40px;">Accepted Papers</h1>

		

								<div class="list-group">
 <div  class="list-group-item">
    <h3 class="list-group-item-heading">Moving the Goalposts: Coverage Satisfaction Is Not Enough</h3>
    <h4 class="list-group-item-text">Gregory Gay, Matt Staats, Michael W. Whalen, and Mats P. E. Heimdahl</h4>
	<h5 class="list-group-item-text" style="color:#777">(University of Minnesota, USA; University of Luxembourg, Luxembourg)</h5>
  </div>
	<div  class="list-group-item">
    <h3 class="list-group-item-heading">An Overview of Search Based Combinatorial Testing </h3>
    <h4 class="list-group-item-text">Huayao Wu and Changhai Nie</h4>
	<h5 class="list-group-item-text" style="color:#777">(Nanjing University, China)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading">Root Cause Analysis for HTML Presentation Failures using Search-Based Techniques</h3>
    <h4 class="list-group-item-text">Sonal Mahajan, Bailan Li, and William G. J. Halfond</h4>
	<h5 class="list-group-item-text" style="color:#777">(University of Southern California, USA)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading">Code Hunt: Searching for Secret Code for Fun </h3>
    <h4 class="list-group-item-text">Nikolai Tillmann, Judith Bishop, Nigel Horspool, Daniel Perelman, and Tao Xie</h4>
	<h5 class="list-group-item-text" style="color:#777">(Microsoft Research, USA; University of Victoria, Canada; University of Washington, USA; University of Illinois at Urbana-Champaign, USA)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading">Test Generation across Multiple Layers</h3>
    <h4 class="list-group-item-text">Matthias Höschele, Juan Pablo Galeotti, and Andreas Zeller</h4>
	<h5 class="list-group-item-text" style="color:#777">(Saarland University, Germany)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading">Search-Based Security Testing of Web Applications</h3>
    <h4 class="list-group-item-text">Julian Thomé, Alessandra Gorla, and Andreas Zeller</h4>
	<h5 class="list-group-item-text" style="color:#777">(Saarland University, Germany)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading"><span class="label label-primary">PHD Paper</span> Model Based Test Case Generation with Metaheuristics for Networks of Timed Automata</h3>
    <h4 class="list-group-item-text">Joachim Haensel</h4>
	<h5 class="list-group-item-text" style="color:#777">(HPI, Germany)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading"><span class="label label-warning">Position Paper</span> Search Based Techniques for Software Fault Prediction: Current Trends and Future Directions</h3>
    <h4 class="list-group-item-text">Ruchika Malhotra</h4>
	<h5 class="list-group-item-text" style="color:#777">(Delhi Technological University, India)</h5>
  </div>
  <div  class="list-group-item">
    <h3 class="list-group-item-heading"><span class="label label-warning">Position Paper</span> Hybrid Test Optimization Framework using Memetic Algorithm with Cuckoo Flocking Based Search Approach</h3>
    <h4 class="list-group-item-text">Jeya Mala Dharmalingam, Sabarinathan S., and Balamurugan S.</h4>
	<h5 class="list-group-item-text" style="color:#777">(Thiagarajar College of Engineering, India; Tata Consultancy Services, India)</h5>
  </div>
									</div>




            </div>

        </div> <!-- /container -->












        <div class="container" id="schedule">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Program Schedule</h2>
                <p>
			<div class="schedule-buttons">
				<div class="btn-group btn-group-justified">
					<a href="#" class="btn btn-default btn-lg btn-info" data-schedule="day1_schedule">Day 1</a>
					<a href="#" class="btn btn-default btn-lg" data-schedule="day2_schedule">Day 2</a>
				</div>
			</div>


			<div id="day_schedules">
				<ul class="list-group schedule-table" id="day1_schedule">
				<? /*<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>–</h3></div>
							<div class="col-md-8 col-sm-7"><h3>TBD</h3></div>
						</div>
					</li>
				*/?>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>9:00am – 10:30am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Introduction</h3>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#d9534f"></span></small>
							Lionel Briand: "Applying SBST in industry"</h4></div>
						</div>
					</li>
				<? /*	<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>9:00am – 10:00am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>"Who's Who" session</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>10:00am – 11:30am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Keynote: Lionel Briand</h3></div>
						</div>
					</li>
					*/?>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>10:30am – 11:00am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Break</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>11:00am – 12:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Paper Session 1 (3 papers)</h3>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5bc0de"></span></small> Moving the Goalposts: Coverage Satisfaction Is Not Enough</h4>
								<h5>Gregory Gay, Matt Staats, Michael W. Whalen, and Mats P. E. Heimdahl</h5>
								<h5><small>(University of Minnesota, USA; University of Luxembourg, Luxembourg)</small></h5>
							</h4>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5bc0de"></span></small> 
								An Overview of Search Based Combinatorial Testing </h4>
								<h5>Huayao Wu and Changhai Nie</h5>
								<h5><small>(Nanjing University, China)</small></h5>
							</h4>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5bc0de"></span></small> 
								Root Cause Analysis for HTML Presentation Failures using Search-Based Techniques</h4>
								<h5>Sonal Mahajan, Bailan Li, and William G. J. Halfond</h5>
								<h5><small>(University of Southern California, USA)</small></h5>
							</h4>
</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>12:30pm – 2:00pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Lunch</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>2:00pm – 3:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>PhD Paper + Position Papers</h3>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#428bca"></span></small> 
							PhD paper: Model Based Test Case Generation with Metaheuristics for Networks of Timed Automata</h4>
								<h5>Joachim Haensel</h5>
								<h5><small>(HPI, Germany)</small></h5>
							</h4>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#f0ad4e"></span></small> 
								Position paper: Search Based Techniques for Software Fault Prediction: Current Trends and Future Directions </h4>
								<h5>Ruchika Malhotra</h5>
								<h5><small>(Delhi Technological University, India)</small></h5>
							</h4>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#f0ad4e"></span></small> 
								Position paper: Hybrid Test Optimization Framework using Memetic Algorithm with Cuckoo Flocking Based Search Approach</h4>
								<h5>Jeya Mala Dharmalingam, Sabarinathan S., and Balamurugan S.</h5>
								<h5><small>(Thiagarajar College of Engineering, India; Tata Consultancy Services, India)</small></h5>
							</h4>
							</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>3:30pm – 4:00pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Break</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>4:00pm – 5:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>All-participant discussion:</h3> 
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5cb85c"></span></small> Growing and developing the research community in India</h4></div>
						</div>
					</li>
					
				</ul>

				<ul class="list-group schedule-table" id="day2_schedule" style="display:none">
									<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>9:00am – 10:30am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Introduction</h3>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#d9534f"></span></small>
							Cristian Cadar: "Combining DSE with SBST"</h4></div>
						</div>
					</li>

					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>10:30am – 11:00am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Break</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>11:00am – 12:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Paper Session 2 (3 papers)</h3>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5bc0de"></span></small> 
							Code Hunt: Searching for Secret Code for Fun</h4>
								<h5>Nikolai Tillmann, Judith Bishop, Nigel Horspool, Daniel Perelman, and Tao Xie</h5>
								<h5><small>(Microsoft Research, USA; University of Victoria, Canada; University of Washington, USA; University of Illinois at Urbana-Champaign, USA)</small></h5>
							</h4>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5bc0de"></span></small> 
								Test Generation across Multiple Layers</h4>
								<h5>Matthias Höschele, Juan Pablo Galeotti, and Andreas Zeller</h5>
								<h5><small>(Saarland University, Germany)</small></h5>
							</h4>
							<hr>
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5bc0de"></span></small> 
								Search-Based Security Testing of Web Applications</h4>
								<h5>Julian Thomé, Alessandra Gorla, and Andreas Zeller</h5>
								<h5><small>(Saarland University, Germany)</small></h5>
							</h4>
</div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>12:30pm – 2:00pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Lunch</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>2:00pm – 3:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Panel with Lionel Briand, Cristian Cadar, Alex Orso, Paolo Tonella and Andreas Zeller</h3> 
							<h4><small><span class="glyphicon glyphicon-asterisk" style="color:#5cb85c"></span></small>
							Discussion statement: "The SBST community should be extending their work on testing to address the problem of testing X. Possible fitness functions for X could be ..."</h4></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>3:30pm – 4:00pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Break</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>4:00pm – 5:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Awards and Closing</h3></div>
						</div>
					</li>
					<? /*
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>9:00am – 10:30am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Keynote: Cristian Cadar</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>10:30am – 10:45am</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Break</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>10:45am – 12:45pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>PhD paper session (3 papers)</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>12:15pm – 1:00pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Lunch</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>1:00pm – 2:30pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Paper Session 3 (3 papers)</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>2:30pm – 2:45pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Break</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>2:45pm – 4:15pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Paper Session 4 (3 papers)</h3></div>
						</div>
					</li>
					<li class="list-group-item">
						<div class="row">
							<div class="col-md-4 col-sm-5"><h3>4:15pm</h3></div>
							<div class="col-md-8 col-sm-7"><h3>Close</h3></div>
						</div>
					</li>
					*/ ?>
				</ul>
				</div>
								</p>


            </div>

        </div> <!-- /container -->


<div class="container" id="panel">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Discussion Panel</h2>
                <p>
<div class="list-group">
	<a href="http://wwwen.uni.lu/snt/people/lionel_briand" class="list-group-item">Lionel Briand (University of Luxembourg, Luxembourg)</a>
	<a href="http://www.doc.ic.ac.uk/~cristic/" class="list-group-item">Cristian Cadar (Imperial College London, UK)</a>
	<a href="http://www.cc.gatech.edu/~orso/" class="list-group-item">Alex Orso (Georgia Institute of Technology, USA)</a>
<? /*	<a href="http://www.cmu.edu/silicon-valley/faculty-staff/pasareanu-corina.html" class="list-group-item">Corina Pasareanu (Carnegie Mellon University, USA)</a> */ ?>
	<a href="http://selab.fbk.eu/tonella/" class="list-group-item">Paolo Tonella (Fondazione Bruno Kessler–IRST, Italy)</a>
	<a href="http://www.st.cs.uni-saarland.de/zeller/" class="list-group-item">Andreas Zeller (Saarland University, Germany)</a>
</div>
 <div class="bs-callout bs-callout-info " id="contact">

	  <h2>Discussion Statement:</h2>
	  <p>"The SBST community should be extending their work on testing to address the problem of testing X. Possible fitness functions for X could be ..."</p>
	  
    </div>
<? /* <p>(All panelists are subject to travel constraints nearer the time)</p>*/?>
								</p>
            </div>

        </div> <!-- /container -->


        <div class="container" id="committee">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Program Committee</h2>
  <? /*<p>(All confirmed)</p>*/ ?>
<div class="list-group">
	<a href="http://www.es.mdh.se/staff/2591-Wasif_Afzal" class="list-group-item">Wasif Afzal (Mälardalen University, Sweden)</a>
	<a href="http://www-users.cs.york.ac.uk/~rda/" class="list-group-item">Rob Alexander (University of York, UK)</a>
	<a href="http://web.soccerlab.polymtl.ca/~antoniol/" class="list-group-item">Giuliano Antoniol (École Polytechnique de Montréal)</a>
	<a href="http://folk.uio.no/arcuri/" class="list-group-item">Andrea Arcuri (Simula Research Labs, Norway)</a>
	<a href="http://www0.cs.ucl.ac.uk/people/E.Barr.html" class="list-group-item">Earl Barr (University College London, UK)</a>
	<a href="http://selab.fbk.eu/ceccato/" class="list-group-item">Mariano Ceccato (FBK (Fondazione Bruno Kessler) Trento, Italy)</a>
	<a href="http://neo.lcc.uma.es/staff/francis/english/index_en.html#" class="list-group-item">Francisco Chicano (University of Málaga)</a>
	<a href="http://www-users.cs.york.ac.uk/~jac/" class="list-group-item">John Clark (University of York, UK)</a>
	<a href="http://cse.unl.edu/~myra/" class="list-group-item">Myra Cohen (University of Nebraska at Lincoln, USA)</a>
	<a href="http://www.rcost.unisannio.it/mdipenta/" class="list-group-item">Massimiliano Di Penta (University of Sannio, Italy)</a>
	<a href="http://www.robertfeldt.net" class="list-group-item">Robert Feldt (Chalmers University & Blekinge Inst of Tech., Sweden)</a>
    <a href="http://staffwww.dcs.shef.ac.uk/people/G.Fraser/" class="list-group-item">Gordon Fraser (University of Sheffield, UK)</a>
    <a href="http://people.ucalgary.ca/~vgarousi/" class="list-group-item">Vahid Garousi (University of Calgary, Canada & Atilim University, Ankara, Turkey)</a>
	<a href="http://www.cs.allegheny.edu/sites/gkapfham/" class="list-group-item">Gregory Kapfhammer (Allegheny College, USA)</a>
	<a href="http://squall.sce.carleton.ca/mediawiki/index.php/PI" class="list-group-item">Yvan Labiche (Carleton University, Canada)</a>
	<a href="http://cist.buct.edu.cn/zheng/" class="list-group-item">Zheng Li (Beijing University of Chemical Technology, China)</a>
	<a href="http://cs.nju.edu.cn/changhainie/" class="list-group-item">Changhai Nie (Nanjing University, China)</a>
	<a href="http://www0.cs.ucl.ac.uk/people/J.Petke.html" class="list-group-item">Justyna Petke (University College London, UK)</a>
	<a href="http://www-users.cs.york.ac.uk/smp/" class="list-group-item">Simon Poulding (University of York, UK)</a>
	<a href="https://personal.cis.strath.ac.uk/marc.roper/" class="list-group-item">Marc Roper (University of Strathclyde)</a>
	<a href="http://www.dei.ac.in/dei/science/index.php/faculty-staff/89-mathsfaculty/117-dr-gursaran" class="list-group-item">Gursaran Srivastava (Dayalbagh Educational Institute, India)</a>
	<a href="http://selab.fbk.eu/tonella/" class="list-group-item">Paolo Tonella (Fondazione Bruno Kessler–IRST, Italy)</a>
	<a href="http://tanvopol.webs.upv.es/" class="list-group-item">Tanja Vos (Universidad Politecnica de Valencia)</a>
	<a href="http://www.berner-mattner.com/en/berner-mattner-home/company/subsidiaries/berlin/index.html" class="list-group-item">Joachim Wegener (Berner & Mattner, Germany)</a>
	<a href="http://www.cs.virginia.edu/~weimer/" class="list-group-item">Westley Weimer (University of Virginia, USA)</a>
	<a href="http://www.gla.ac.uk/schools/computing/staff/davidwhite/" class="list-group-item">David White (University of Glasgow, UK)</a>
	<a href="http://www0.cs.ucl.ac.uk/staff/s.yoo/" class="list-group-item">Shin Yoo (University College London, UK)</a>
	<a href="http://www.st.cs.uni-saarland.de/zeller/" class="list-group-item">Andreas Zeller (Saarland University, Germany)</a>
</div>

            </div>

        </div> <!-- /container -->





			<div class="container" id="organisation">

            <!-- Main component for a primary marketing message or call to action -->
            <div class="jumbotron">
                <h2>Organisation and Contact</h2>

		<div class="bs-callout bs-callout-info" id="contact">
      <h3>Contacting the organisers</h3>
      <p>If you have any queries, please contact the organisers.</p>
    </div>

								<div class="list-group">
 <a href="http://philmcminn.staff.shef.ac.uk/" class="list-group-item">
    <h4 class="list-group-item-heading">Programme Chair</h4>
    <p class="list-group-item-text">Phil McMinn (University of Sheffield, UK) – <span class="label label-info">p.mcminn@sheffield.ac.uk</span></p>
  </a>
	<a href="http://www0.cs.ucl.ac.uk/staff/mharman/" class="list-group-item">
    <h4 class="list-group-item-heading">Programme Chair</h4>
    <p class="list-group-item-text">Mark Harman (University College London, UK) – <span class="label label-info">mark.harman@ucl.ac.uk</span></p>
  </a>
	<a href="http://www.dcs.shef.ac.uk/cgi-bin/makeperson?S.Shamshiri" class="list-group-item">
    <h4 class="list-group-item-heading">Web & Publicity Chair</h4>
    <p class="list-group-item-text">Sina Shamshiri (University of Sheffield, UK) – <span class="label label-info">sina.shamshiri@sheffield.ac.uk</span></p>
  </a>
	<a href="http://cist.buct.edu.cn/zheng/index.html" class="list-group-item">
    <h4 class="list-group-item-heading">Co-Publicity Chair</h4>
    <p class="list-group-item-text">Zheng Li (Beijing University of Chemical Technology, China) – <span class="label label-info">z.li@ieee.org</span></p>
  </a>
	<a href="http://cist.buct.edu.cn/zheng/index.html" class="list-group-item">
    <h4 class="list-group-item-heading">Co-Publicity Chair</h4>
    <p class="list-group-item-text">Gursaran Srivastava (Dayalbagh Educational Institute, India) – <span class="label label-info">gursaran.db@gmail.com</span></p>
  </a>
									</div>




            </div>

        </div> <!-- /container -->

				<style>

				</style>



    </body>
</html>
