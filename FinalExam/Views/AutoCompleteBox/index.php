	<?
		@$id = $_REQUEST['id'];
	?>
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		City Search
	</h2>
	
	<style type="text/css">
		body table.table .highlighted td{
			background-color: #FFFFAA ; 
		}
	</style>
	
	<div class="ui-widget">
	  <label for="city">Enter City: </label>
	  <input id="city">
	</div>	

	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.11/require.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.7/jquery.devbridge-autocomplete.min.js"></script>
		<script type="text/javascript">
		

				// $(function(){
// 					
					// $(".table").dataTable();
					// $(".highlighted td").delay(2000).animate({backgroundColor: ""}, 2000)
// 					
					// $(".close").click(function(){
						// $(this).closest(".alert").slideUp();
					// })
					// $(".glyphicon-trash").click(function(event){
						// var that = this;
						// event.preventDefault();
						// $.get(that.href, function(results){
// 							
							// if(confirm("Are you sure that you want to delete " + results.data.FirstName + " " + results.data.LastName + "?")){
								// $.post(that.href, function(data){
									// if(data.success){
										// //msg user success
										// //delete row
										// alert('Deleted Successfuly');
										// $(that).closest('tr').remove();
									// }else{
										// //smg user error
										// alert(JSON.stringify(data.errors));
									// }
								// }, 'json');
							// }
// 							
						// },'json')
					// });
// 					
					// $(".glyphicon-edit, .cmd-new").click(function(event){
						// var that = this;
						// event.preventDefault();
// 						
						// $.get(that.href, { format: 'plain'}, function(data){
							// var $myModal = $("#myModal");
							// $(".modal-content", $myModal).html(data);
							// $myModal.modal('show');
						// })
// 						
					// });
				// })
			// });
		</script>
	<? } ?>
	
