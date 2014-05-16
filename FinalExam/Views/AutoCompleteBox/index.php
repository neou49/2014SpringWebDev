
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		City Search
	</h2>

	  <label for="city">Enter City: </label>
	  <input type="text" name="city" id="query" />
	  
	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/require.js/2.1.11/require.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.devbridge-autocomplete/1.2.7/jquery.devbridge-autocomplete.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<script type="text/javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.autocomplete.js"></script>
		<script type="text/javascript">		

			$jQuery(function(){
				var that = this;
				$.get(that.href, {format: 'json'}, function(results){
				
					var options, a;					
						options = results.data.city;
						// document.write(options);
						a = $('#query').autocomplete(options);
					},'json')
			});

		</script>
	<? } ?>
	