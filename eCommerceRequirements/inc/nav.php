    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="./">e-Commerce Requirements</a>
        </div>
        <div class="navbar-collapse collapse">
        
		    <ul class="nav navbar-nav">
		    	
		    	<li <? $curSection == 'contact' ? 'class="active"' : ''?> > <a href="contact.php">Contact Us</a></li>
		    	<li <? $curSection == 'links' ? 'class="active"' : ''?> > <a href="links.php">Links</a></li>
		    	
<!--		      <li class="active"><a href="contact.php">Contact Us</a></li>
		      <li><a href="links.php">Links</a></li>
-->
		      
		    </ul>        
        
          <form class="navbar-form navbar-right" role="form">
            <div class="form-group">
              <input type="text" placeholder="Email" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" class="form-control">
            </div>
            <button type="submit" class="btn btn-success">Sign in</button>
          </form>
        </div><!--/.navbar-collapse -->
      </div>
    </div>
