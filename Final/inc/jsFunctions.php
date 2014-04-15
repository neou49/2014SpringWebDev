	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript">
			// Always call jQuery function inside javascripts after it initialize properly
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

