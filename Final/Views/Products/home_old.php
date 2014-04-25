
<h2> Welcome to TheSeng Store</h2>

<div id="holder"></div>

<script type="text/template" id="product-tmpl">
	<div class="row">
		{{#each data}}
		<div class=" col-md-4">
		<div class="panel panel-info">
		  <div class="panel-heading">
			<code class="pull-right">${{Price}}</code>
		    <h3 class="panel-title">{{Name}}</h3>
		  </div>
		  <div class="panel-body">
				<img src="{{Picture_Url}}" class="img-thumbnail pull-right" alt="140x140" style="width: 140px; height: 140px;" >
				<p>{{Description}}</p>
				<a class="btn btn-success">Purchase</a>
		  </div>
		</div>
		</div>
		{{/each}}
	</div>	
</script>


	<div id="shopping-cart-list" class="closed" >
		<div class="scrolling"  data-bind="foreach: cart" >
			<div class="well well-sm clearfix">
				<img alt="item image" data-bind="attr: {src: Picture_Url}" />
				<h6 data-bind="text: Name"></h6>
				<p data-bind="text: Description"></p>
				$<span data-bind="text: Price"></span>
				<button class="btn btn-warning btn-sm pull-right" data-bind="click: $root.removeFromCart">
					<span class="glyphicon glyphicon-shopping-del"></span>
					Remove
				</button>
			</div>
		</div>
		<div>
			Total: $ <span data-bind="text: cartTotal"></span>
		</div>
	</div>
	
<script type="text/template" id="cart-tmpl">
	<ul class="nav navbar-nav navbar-right ">
		<li>
			<button class="navbar-btn btn" data-bind="click: toggleCartList">
				<i class="glyphicon glyphicon-shopping-cart"></i>
				Cart
				<span class="badge label-danger" data-bind="text: cart().length">0</span>
				</button>			
		</li>
		<li><a></a></li>
	</ul>
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