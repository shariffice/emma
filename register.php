<!doctype html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="canonical" href="http://html5-templates.com/" />
    <title>Register form</title>
	<meta name="description" content="A minimalist Bootstrap theme by StartBootstrap. Contains everything you need to get started building your website. All you have to do is change the text and images.">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/modern-business.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Home</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Full Width Page
                    <small>Subheading</small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a>
                    </li>
                    <li class="active">Full Width Page</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
<div class="row">
            <div class="col-md-8">
                <h3>Registration form</h3>
        
            <form action="contact.php" method="post">
                <div class="control-group form-group">
                    <div class="controls">
<label>First Name:</label><input type="text" class="form-control" name="first_name" required data-validation-required-message="Please enter your first name."><br>
</div>
<div>
<label>Last Name:</label> <input type="text" class="form-control" name="last_name" required data-validation-required-message="Please enter your last name."><br>
</div>
<div class="controls">
                         <label>Gender:</label>   
<input type="radio" name="gender" value="male">Male<br />
<input type="radio" name="gender" value="female" style="text-align: left;">Female<br />
                        </div>
<div class="controls">
                            <label>Phone Number:</label>
                            <input type="tel" class="form-control" name="phone" required data-validation-required-message="Please enter your phone number."><br>
                        </div>
<div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" required data-validation-required-message="Please enter your email address."><br>
                        </div>
                        <div>
<label>Company:</label> <input type="text" class="form-control" name="company" required data-validation-required-message="Please enter your last name."><br>
</div><textarea rows="5" name="message" cols="30" style="display: none;"></textarea><br>
<input type="submit" name="submit" value="Register" style="display: none;"><br>
<button type="submit" class="btn btn-primary" name="submit">Register</button>
</form>
</div>

        <!-- Content Row -->
        <div class="row" style="display: none;">
            <div class="col-lg-12">
				<p>Quo debet vivendo ex. Qui ut admodum senserit partiendo. Id adipiscing disputando eam, sea id magna pertinax concludaturque. Ex ignota epicurei quo, his ex doctus delenit fabellas, erat timeam cotidieque sit in. Vel eu soleat voluptatibus, cum cu exerci mediocritatem. Malis legere at per, has brute putant animal et, in consul utamur usu.</p>
				<p>Te has amet modo perfecto, te eum mucius conclusionemque, mel te erat deterruisset. Duo ceteros phaedrum id, ornatus postulant in sea. His at autem inani volutpat. Tollit possit in pri, platonem persecuti ad vix, vel nisl albucius gloriatur no.</p>
				<p>Ea duo atqui incorrupte, sed rebum regione suscipit ex, mea ex dicant percipit referrentur. Dicat luptatum constituam vix ut. His vide platonem omittantur id, vel quis vocent an. Ad pro inani zril omnesque. Mollis forensibus sea an, vim habeo adipisci contentiones ad, tale autem graecis ne sit.</p>
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website, year</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
