<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Layout Page</title>

    <!-- Bootstrap core CSS -->
    <link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" rel="stylesheet">

    <style type="text/css">
    	body {
		  padding-top: 50px;
		}
		
		body table.table .highlighted{
			background-color: #FFFFAA;
		}
		
		.error {
		color: red;
		}
		.my-horizontal label {
			display: inline-block;
			width: 150px;
			text-align: right;
			margin-right: 10px;
		}
		.my-horizontal .form-control{
			display: inline-block;
		}
	
		.has-feedback .form-control-feedback {
			display: inline-block;
			right: auto;
			top: auto;
			margin-left: -40px;
		}
		.has-error {
			color: red;
		}
	
		@media screen and (min-width: 768px) {
			.my-horizontal .form-control{
				width: 25%;
			}
		}
    </style>
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Vichea's eCommerce - Admin</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <!-- <li class="active"><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li> -->
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">View Table Selection <b class="caret"></b></a>
			  <ul class="dropdown-menu">
			    <li><a href="Addresses.php">Addresses</a></li>
			    <li><a href="ContactMethods.php">User Contact Methods</a></li>   
			    <li><a href="Keywords.php">Keywords</a></li>   
			    <li><a href="OrderItems.php">Order Items</a></li>
			    <li><a href="Orders.php">Orders</a></li>
			    <li><a href="ProductKeywords.php">Product Keywords</a></li>
			    <li><a href="Products.php">Products</a></li>
			    <li><a href="Suppliers.php">Suppliers</a></li>
			    <li><a href="Users.php">Users</a></li>			  
			  </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
        
      </div>
    </div>

    <div class="container">

      <? include $view; ?>


    </div><!-- /.container -->
    
	<div class="modal fade" id="myModal">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	        <h4 class="modal-title">Modal title</h4>
	      </div>
	      <div class="modal-body">
	        <p>One fine body&hellip;</p>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div><!-- /.modal-content -->
	  </div><!-- /.modal-dialog -->
	</div><!-- /.modal -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
    
    <?
    	if (function_exists("JavaScripts")){
    		JavaScripts();
    	}
    ?>
  </body>
</html>
