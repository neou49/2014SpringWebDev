
<h2> This is home page</h2>

<div id="holder"></div>

<script type="text/template" id="product-tmpl">
	<div class="row">
		<div class="col-md-4">
			
			<div class="well well-lg clearfix">
				<img data-src="holder.js/140x140" class="img-thumbnail pull-right" alt="140x140"  style="width: 140px; height: 140px;">
				<h5>Title</h5>
				<span>Price</span>
				<img />	<a class="btn btn-success">Purchase</a>
			</div>
			
		</div>
	</div>
</script>

	<? function JavaScripts(){  ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/handlebars.js/2.0.0-alpha.2/handlebars.min.js"></script>
		<script type="text/javascript">
			$(function(){
				var tmpl = Handlebars.compile($("#product-tmpl").html());
				$.get('?action=index&format=json', function(data){
					 // $("#row").append(data));
					 // document.write(data.data[row]);
					$("#holder").html(tmpl(data));
					}, 'json'
					);
		
			});
		</script>
		
	<? } ?>