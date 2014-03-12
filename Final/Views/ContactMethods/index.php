	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css">
	<h2>
		List of Contact Methods
	</h2>
	</link>
	
	<a ref ="?action=new">Create New </a>
	
	<table class="table">
		<thead>
			<tr>
				<th>FirstName</th>
				<th>LastName</th>
				<th>ContactMethod</th>
				<th>Value</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['FirstName']?></td>
					<td><?=$row['LastName']?></td>
					<td><?=$row['Contact_Method_Name']?></td>
					<td><?=$row['Value']?></td>
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