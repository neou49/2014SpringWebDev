	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css">
	<h2>
		List of User's Addresses 
	</h2>
	</link>
	
	<a ref ="?action=new">Create New </a>
	
	<table class="table">
		<thead>
			<tr>
				<th>FirstName</th>
				<th>LastName</th>
				<th>AddressType</th>
				<th>Addresses</th>
				<th>City</th>
				<th>State</th>
				<th>Zip</th> 
				<th>Country</th> 
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['FirstName']?></td>
					<td><?=$row['LastName']?></td>
					<td><?=$row['Address_Type']?></td>
					<td><?=$row['Addresses']?></td>
					<td><?=$row['City']?></td>
					<td><?=$row['State']?></td>
					<td><?=$row['Zip']?></td>
					<td><?=$row['Country']?></td>
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