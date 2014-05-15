
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		City Search
	</h2>
	
	<style type="text/css">
		body table.table .highlighted td{
			background-color: #FFFFAA ; 
		}
	</style>
	

	  <label for="city">Enter City: </label>
	  <input id="city">


	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.11/require.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.7/jquery.devbridge-autocomplete.min.js"></script>
		<script type="text/javascript">		

					$(function(){

						var that = this;
						$.get(that.href, function(results){
						
							var options, a = results.data.city;
								options = { serviceUrl:'service/autocomplete.ashx' };
								a = $('#city').autocomplete(options);
							},'json')
					});

		</script>
	<? } ?>
	
