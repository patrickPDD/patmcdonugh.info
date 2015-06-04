<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
<!-- <meta http-equiv="X-UA-Compatible" content="IE=edge">-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Patrick McDonough Vancouver Web Developer-Project Manager</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
        <link rel="stylesheet" href="css/angular.css" type="text/css">

<!--         HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-1.7.2.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!--         Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <!--ANGULAR -->
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.21/angular.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.7/angular-resource.min.js"></script>
        <script src="js/sampleSites.js"></script>
        <script src="js/readmore.js"></script>
<!--        <script src="js/contact.js"></script>-->
        <script src="http://code.jquery.com/jquery-latest.js"></script>
        <script type="text/javascript" src="http://use.typekit.com/thg3ssc.js"></script>
        <script type="text/javascript">try {
            Typekit.load();
        } catch (e) {
        }</script>
<script src="js/tabbedContent.js" type="text/javascript"></script>
        <script src="js/respond.js"></script>
        <script src="js/app.js"></script>
        <script src="js/controllers.js"></script>
        <!--<script type="text/javascript" src="js/custom.js"></script>-->
<!--        <script type="text/javascript" src="js/combined.js"></script>-->
    </head>
  <body>
      
    
              

      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
          <div class="container-fluid">
              <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Patrick McDonough</a>
              </div>
              <?php require_once('./config.php'); ?>

              <form action="charge.php" method="post">
                  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                          data-key="<?php echo $stripe['publishable_key']; ?>"
                          data-amount="5000" data-description="One year's subscription"></script>
              </form>
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                  <li class="active"><a href="#about">About Me</a></li>
                  <li class="hidden-phone"><a class="transition" href="#skills">Skills</a></li>
                  <li class="hidden-phone"><a href="#samples">Portfolio</a></li>
                  <li class="hidden-phone"><a href="#webGallery">Web Gallery</a></li>
                  <li><a href="#contactMe">Contact</a></li>
              </ul>

          </div>
          </div>
      </nav>
       
     

    <!--   //<?php include 'inc/header.inc'; ?> -->
<div class="container-fluid">
    <div class="row transition" id="about"> 
        <section id="branding" class="col col-lg-10 col-md-6 col-sm-6 col-sm-offset-2 col-lg-offset-2 col-md-offset-2">
            <!--<h2 id="name" class="span5 pull-left">Patrick McDonough</h2>-->
            <div class="page-header">
                <h1 contenteditable="true">Patrick McDonough <small>Vancouver WA </small></h1>
                <h4>Web Developer/Project Manager</h4>
            </div>
        </section>
        <!--        <div class="col-md-0 col-sm-6 hidden-phone hidden-sm hidden-xs">&nbsp;</div>-->
    </div>
    <main class="row">
        <h3 class="col articleTitle col-lg-2 col-md-offset-0 col-sm-2 hidden-phone hidden-xs ">About Me</h3>
        <section class=" col-lg-9 col-md-8 col-md-offset-0 col-sm-6 col-xs-7 col-xs-offset-0">
            <p class="lead">I am currently developing under the m   oniker ProDesignDevelop out of Vancouver WA. 
                I am a LAMP stack developer with front and back end experience. I just finished a contract position with 
                <a href="http://cmdagency.com">CMD Agency of Portland OR </a> as a LAMP stack developer.</p>
            <figure id="patrick" class="img-rounded pull-right hidden-phone" >
            <img style="margin:0 10px; width: 100%" src="img/PatrickAlone2.png" 
                 alt="Patrick McDonough Web Developer Portland OR">
            <figcaption>Patrick McDonough</figcaption>
            </figure>

            <p class="more"><strong>Project Management :</strong> I have many management skills including, portfolio management, client management, planning, 
                estimating, budgeting, organizing, prioritizing, vendor management, calendar management and project management. 
                All my projects are developed in a development environment with appropriate sign offs and testing before live 
                material is posted or delivered. I am familiar with or have used several software development methodologies including 
                waterfall, agile and RAD.</p>

            <p><strong>Design :</strong> I have many design skills that I have developed over the years. Design is an important 
                component for many aspects of web development. Design comes into the equation for everything from logo design to 
                affordance in UX/UI design and to Object Orientated database design. 
            </p>

            <p><strong>Development :</strong> I have spent thousands of hours (at least it seems) pouring over code and grudgingly 
                learning the syntax and best practices for developing websites. I have coding abilities in HTML, HTML5, XHTML, 
                PHP<a href="http://www.refsnesdata.no/certification/w3certified.asp?id=5155312">
                    <img src="/img/w3cert.png" alt="W3Certified" width="50" ></a>, ColdFusion, CSS, SQL, Java-script, Jquery and
                a few others. </p>
        </section>
        <div class="col col-lg-1 col-xs-7">&nbsp;</div>
    </main>
      
    <article class="row  transition" id="skills">

        <div class="col col-lg-2 col-md-offset-0 col-sm-2 col-sm-offset-0 hidden-phone  hidden-xs">
            <h3 class="articleTitle">Skills</h3>
        </div>

        <div id="oldStyleSkills" class="col tabbed_content hidden-phone col-sm-10 col-xs-3 col-lg-8 col-md-6 col-lg-offset-0 col-md-offset-0 col-sm-offset-1">

            <div class='tabs'>
                <div class='moving_bg'>
                    &nbsp;
                </div>
                <span class='tab_item'>Project Management</span>
                <span class='tab_item'>Design</span>
                <span class='tab_item'>Development</span>
                <span class='tab_item'>Internet Marketing</span>
                <span class='tab_item'>IT</span>
            </div>

            <div class='slide_content'>
                <div class='tabslider'>

                    <ul>
                        <li><i class=" icon-check icon-white"></i>Scope Management</li>
                        <li><i class=" icon-check icon-white"></i>Planning</li>
                        <li><i class=" icon-check icon-white"></i>Monitoring</li>
                        <li><i class=" icon-check icon-white"></i>Testing</li>
                        <li><i class=" icon-check icon-white"></i>Work Breakdown Schedule</li>
                        <li><i class=" icon-check icon-white"></i>Waterfall, Agile and Lean</li>
                    </ul>

                    <ul>
                        <li><i class=" icon-check icon-white"></i>Graphic Design</li>
                        <li><i class=" icon-check icon-white"></i>Web Design</li>
                        <li><i class=" icon-check icon-white"></i>UX/UI</li>
                        <li><i class=" icon-check icon-white"></i>Photo Processing</li>
                        <li><i class=" icon-check icon-white"></i>Wireframe</li>
                        <li><i class=" icon-check icon-white"></i>High Definition Internet Prototyping</li>
                    </ul>
                    <ul id="description">
                        <li>
                            <table class="table table-condensed" style="width: 85%">
                                <tr>
                                    <td>HTML</td>
                                    <td>HTML5</td>
                                    <td>XHTML</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>PHP<a href="http://www.refsnesdata.no/certification/w3certified.asp?id=5155312">
                                            <img alt="w3C certification" src="/img/w3cert.png" width="50" ></a>"</td>
                                    <td>SQL</td>
                                    <td>Web Services</td>
                                    <td>SOAP</td>
                                </tr>
                                <tr>
                                    <td>CSS</td>
                                    <td>CSS3</td>
                                    <td>Twitter Bootstrap</td>
                                    <td>SaSS</td>
                                </tr>
                                <tr>
                                    <td>Java-script</td>
                                    <td>JQuery</td>
                                    <td>Actionscript</td>
                                    <td>AngularJS</td>
                                </tr>
                                <tr>
                                    <td>Joomla</td>
                                    <td>Drupal</td>
                                    <td>Wordpress;</td>
                                    <td>&nbsp;</td>
                                </tr>
                            </table>
                        </li>

                    </ul>
                    <ul>
                        <li><i class=" icon-check icon-white"></i>Optimization SEO</li>
                        <li><i class=" icon-check icon-white"></i>Social Media</li>
                        <li><i class=" icon-check icon-white"></i>Email Marketing</li>
                        <li><i class=" icon-check icon-white"></i>PPC</li>

                    </ul>
                    <ul>
                        <li><i class=" icon-check icon-white"></i>LAN Deployment and Administration</li>
                        <li><i class=" icon-check icon-white"></i>Windows Server 2008</li>
                        <li><i class=" icon-check icon-white"></i>Domain Deployment and Administration</li>
                        <li><i class=" icon-check icon-white"></i>Multi Platform </li>
                    </ul>

                </div>

            </div>  
        </div>


    </article>
<?php include( 'inc/portfolioCar.inc'); ?>
   <!-- col-md-offset-0 gal col-lg-8 col-md-8 col-sm-4 col-lg-offset col-md-offset-2 col-xs-3 col-xs-offset-0
         col-lg-3 pull-right vcenter hidden-phone hidden-sm hidden-xs   --> 

    <article> 
        <div class="row container-fluid" id="webGallery"  ng-app="webGallery">
        <div class="col col-lg-2 col-md-2 ">
            <h3 class="articleTitle">Web Gallery</h3>
        </div>
            
        
        <div class="row" ng-controller="GalleryController as gallery">
            <ul class="col gal col-lg-9 col-md-8 col-sm-9 col-md-offset-2 col-xs-7 col-xs-offset-0 ">
                <li ng-repeat="sites in gallery.websites">

                    <h3>{{sites.name}}</h3>
                    <div ng-hide="!sites.url"> 
                        <p><a href="{{sites.url}}">Click to visit site</a></p>
                    </div>
                    <div class="webGalPar"> <p class="rush">{{sites.description}}</p>
                    <h4>{{sites.skills}}</h4>
                    </div>
                    <div class="col col-lg-3 col-md-3 col-sm-3 col-xs-3 pull-right vcenter hidden-phone" ng-hide="!sites.shortname"> 
                        <img class="webGalImg" alt="sample web site image for {{sites.name}}" ng-src="img/webGallery/JPEG/{{sites.shortname}}.jpg"/>
                    </div>

                </li>
            </ul>
        </div>
               
        </div>
    </article>
   
       <article id="contactMe">
           <div class="row container-fluid">
        <div class="col col-lg-2 col-md-2 ">
            <h3 class="articleTitle">Contact Me</h3>
        </div>
                   <div class="col-lg-9 col-md-8 col-sm-9 col-md-offset-2 col-xs-6 col-xs-offset-0 ">
                       <h3 class="phone">Phone: 503-805-5431</h3><br>
                       <h3 class="email">email: <a href="mailto:patrick@prodesigndevelop.com">patrick@prodesigndevelop.com</a></h3>
               </div>
            
   </article>
      
<!--       <section class="row" ng-app="contactApp" id="contactMe">
    <body ng-app="contactApp" > 
    <div class="vertical-middle">
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h2 class="panel-title">Contact Form</h2>
                </div>
                <div ng-controller="ContactController" class="panel-body">
                    <form ng-submit="submit(contactform)" name="contactform" method="post" action="" class="form-horizontal" role="form">
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputName.$invalid && submitted }">
                            <label for="inputName" class="col-lg-2 control-label">Name</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputName" type="text" class="form-control" id="inputName" name="inputName" placeholder="Your Name" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputEmail.$invalid && submitted }">
                            <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputEmail" type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputSubject.$invalid && submitted }">
                            <label for="inputSubject" class="col-lg-2 control-label">Subject</label>
                            <div class="col-lg-10">
                                <input ng-model="formData.inputSubject" type="text" class="form-control" id="inputSubject" name="inputSubject" placeholder="Subject Message" required>
                            </div>
                        </div>
                        <div class="form-group" ng-class="{ 'has-error': contactform.inputMessage.$invalid && submitted }">
                            <label for="inputMessage" class="col-lg-2 control-label">Message</label>
                            <div class="col-lg-10">
                                <textarea ng-model="formData.inputMessage" class="form-control" rows="4" id="inputMessage" name="inputMessage" placeholder="Your message..." required></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-2 col-lg-10">
                                <button type="submit" class="btn btn-default" ng-disabled="submitButtonDisabled">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                    <p ng-class="result" style="padding: 15px; margin: 0;">{{ resultMessage }}</p>
                </div>
            </div>
        </div>
    </div>
</section>-->
       
    <footer class="row footer navbar-fixed-bottom">

        <div class="container">
            <div id="footer">
                <p>Copyright <?php echo date("Y"); ?> - All rights reserved &bull; 
                    Photography by Rob Layman - All rights reserved <br>
                    <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fpatmcdonough.info%2F">
                        Page validated to be W3C compliant!</a></p>
            </div>
        </div> 

    </footer>
   
   </div> <!-- close container -->
    
  
    
        <script type="text/javascript">
                $('#name').hide;
		$(document).ready(function(){
		$('#name').fadeIn('slow');
		});
        </script>
        <script>
  $('#myTab a').click(function (e) {
  e.preventDefault();
  $(this).tab('show');
});
</script>
        <script type="text/javascript">
$('.navbar-nav a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') 
        || location.hostname === this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html,body').animate({
                 scrollTop: target.offset().top
            }, 1000);
            return false;
        }
    }
});
</script> 
  </body>
</html>