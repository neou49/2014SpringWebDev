	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css">
	<h2>
		List of Products
	</h2>
	</link>
	
	<a ref ="?action=new">Create New </a>
	
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>Picture_Url</th>
				<th>Supplier</th>
				<th>Category</th> 
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['Name']?></td>
					<td><?=$row['Price']?></td>
					<td><?=$row['Description']?></td>
					<td><?=$row['Picture_Url']?></td>
					<td><?=$row['Supplier_Name']?></td>
					<td><?=$row['Category_Name']?></td>
				</tr>
			<? endforeach; ?>
		</tbody>
		
		<thead>
			
		</thead>
			
	</table>
	
	<? function JavaScripts(){ ?>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script type="text/javascript">
			// Always call jQuery function inside javascripts after it initialize properly
			$(function(){
			  $(".table").dataTable()
			})			
		</script>
	<? } ?>