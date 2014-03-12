	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css">
	<h2>
		List of Keywords
	</h2>
	</link>
	
	<a ref ="?action=new">Create New </a>
	
	<table class="table">
		<thead>
			<tr>
				<th>PID</th>
				<th>ParentKeyword</th>
				<th>CID</th>
				<th>ChildKeyword</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['PID']?></td>
					<td><?=$row['Parent_Keyword']?></td>
					<td><?=$row['CID']?></td>
					<td><?=$row['Child_Keyword']?></td>
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