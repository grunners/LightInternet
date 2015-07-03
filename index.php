<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Home | AJG Web</title>

    <!-- Bootstrap core CSS - compiled from LESS -->
    <link href="css/styles.min.css" rel="stylesheet">
    
    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Cabin' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Hind' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Muli' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Kreon:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,700italic,700,400italic,300,300italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div id="wrapper">

      <!-- main -->
      <section id="main">
        <div class="container">
          <div class="row">
            <div class="col-md-12 vert-middle middle">
              <h1>ajgweb.com</h1>
              <h2>Web Design &amp; Development</h2>
              <div class="link">
                <a id="btnClients" class="btn btn-primary btn-lg" href="#clients">View My Work</a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- clients -->
      <section id="clients">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
            <h2>Latest Projects</h2>
            <!-- <div class="code">
              <i class="fa fa-desktop"></i>
            </div> -->
              
              <div class="row middle">
                <div class="col-sm-4">
                  <img src="/images/clients/rmfowler.png" alt="">
                </div>
                <div class="col-sm-4">
                  <img src="/images/clients/redskysupport.png" alt="">
                </div>
                <div class="col-sm-4">
                  <img src="/images/clients/chaindrive.png" alt="">
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="link">
                    <a id="btnContact" class="btn btn-primary btn-lg" href="#contact">Need a Website?</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="container">
          <div class="row">
            <div class="col-sm-6 col-sm-push-3">
              <h2>Get In Touch</h2>
              <div class="code">
                <i class="fa fa-paper-plane"></i>
              </div>
              <p>Either fill in the form below and I'll get back to you as soon as possible, or call me on 07534 906218 and we can discuss your requirements.</p>
              <form id="form" data-toggle="validator" role="form" data-disable="false">
                <div class="form-group">
                  <input id="txtName" name="txtName" type="text" class="form-control" placeholder="Your name" data-error="Please provide your name" required />
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input id="txtTel" name="txtTel" type="text" class="form-control" placeholder="Your number" data-error="Please provide a telephone number" required />
                  <div class="help-block with-errors"></div>
                </div>
                <div class="form-group">
                  <input id="txtEnquiry" name="txtEnquiry" type="text" class="form-control" placeholder="Your message" data-error="Please provide a message" required />
                  <div class="help-block with-errors"></div>
                </div>
                <div class="link">
                  <button type="submit" class="btn btn-primary" name="btnSubmit" id="btnSubmit" >Send Enquiry</button>
                </div>
                <div id="contact-results"></div>
              </form>

            </div>
          </div>
        </div>
      </section>

      
      <div id="push"></div>
    </div><!--close wrapper-->

    <footer>
      <div id="footerCopyright">
        <div class="container">
          <div class="row">
            <div class="col-md-12 center-text">
              <p>&copy; AJG Web 2015</p>
              <p><a href="mailto:info@lightinternet.co.uk">info@ajgweb.co.uk</a></p>
            </div>
          </div>
        </div>
      </div><!-- close copyright -->
    </footer><!-- close footer -->
    
	


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="/js/jquery.easing.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/validator.js"></script>
    
    <script type="text/javascript">
    $(document).ready(function(){

      //sticky responsive footer js
      var footerHeight = $("footer").height();
      $("#wrapper").css("margin:", "0 auto " -footerHeight);
      $("footer").css("height", footerHeight);
      $("footer").css("margin-top", -footerHeight)
      $("#push").css("height", footerHeight);

      //scroll to clients
      $("#btnClients").bind('click', function (event) {
        $('html, body').animate({
          scrollTop: $("#clients").offset().top
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
      });

      //scroll to contact
      $("#btnContact").bind('click', function (event) {
        $('html, body').animate({
          scrollTop: $("#contact").offset().top
        }, 1000, 'easeInOutExpo');
        event.preventDefault();
      });

      //contact form
      $('#form').validator().on('submit', function (e) {
        
        if (!e.isDefaultPrevented()) {

          //disable default behaviour first
          e.preventDefault();
          //then post
          post_data = {
              'txtName' : $('input[name=txtName]').val(),
              'txtTel' : $('input[name=txtTel]').val(),
              'txtEnquiry' : $('input[name=txtEnquiry]').val()
          };
         
          //Ajax post data to server
          $.post('/includes/mail.php', post_data, function(response){  
              if(response.type == 'error'){ //load json data from server and output message    
                  output = '<div class="alert alert-danger">' + response.text + '</div>';
              }else{
                  output = '<div class="alert alert-success">' + response.text + '</div>';
                  //disable the submit button
                  $('#btnSubmit').attr('disabled','disabled');
              }
              $("#form #contact-results").hide().html(output).fadeIn();
          }, 'json');
        }
      });

    });
    </script>
  </body>
</html>

