	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript">
			// Always call jQuery function inside javascripts after it initialize properly
			
			requirejs.config({
			    //appDir: ".",
			    baseUrl: "../Static/js",
			    paths: { 
			        /* Load jquery from cdnjs. On fail, load local file. */
			        'jquery': ['//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.0/jquery.min', 'libs/jquery-min'],
			        /* Load bootstrap from cdnjs. On fail, load local file. */
			        'bootstrap': ['//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min', 'libs/bootstrap-min'],
			        'datatables': ['//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min'],
			        'jqueryui': ['//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min']
			    },
			    shim: {
			        /* Set bootstrap dependencies (just jQuery) */
			        'bootstrap' : ['jquery'],
			        'datatables' : ['jquery'],
			        'jqueryui' : ['jquery']
			    }
			});
			
			require(['jquery', 'bootstrap', 'datatables', 'jqueryui'], function($) {
			    console.log("Loaded :)");    
			    $("#message").html('Loaded scripts using requirejs!');
			    
			$(function(){
				$(".table").dataTable()
			  	$(".highlighted td").delay(2000).animate({backgroundColor: ""}, 2000);
			   
			  	$(".close").click(function(){
			  		$(this).closest(".alert").slideUp();
			  	})
			  	$(".glyphicon-trash").click(function(event){
			  		var that = this;
			 		event.preventDefault();
			 		// $.get(url, data, callbackfunction, '')
			 		$.get(that.href, function(results){
			 			// if (confirm("Are you sure you want to delete " + results.data.FirstName + " " + results.data.LastName + "?")){
		 				if (confirm("Are you sure you want to delete " + results.data.Header + "?")){
			 				$.post(that.href, function(data){
			 					if(data.success){
			 						// message user success
			 						// delete row
			 						alert('Deleted Successfully');
			 						$(that).closest('tr').remove();
			 					}else{
			 						alert(JSON.stringify(data.errors));
			 					}
			 				}, 'json')
			 			}
			 		}, 'json')
			 	});
			 	
			 	$(".glyphicon-edit, .cmd-new").click(function(event){
			 		var that = this;
			 		event.preventDefault();
			 		
			 		$.get(that.href, { format: 'plain'}, function(data){
			 			var $myModal = $("#myModal");
			 			$(".modal-content", $myModal).html(data);
			 			$myModal.modal('show');
			 		})
			 		
			 	});
		 	})
		</script>
	<? } ?>

