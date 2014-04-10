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
	
	<?
		include __DIR__ . "/../../inc/jsFunctions.php";
		@$id = $_REQUEST['id'];
	?>
	
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/css/jquery.dataTables.min.css" />
	<h2>
		List of Users
	</h2>
	
	<style type="text/css">
		body table.table .highlighted{
			background-color: #FFFFAA;
		}
	</style>
	
	<? if(isset($_REQUEST['sub_action'])): ?>
		<div class="alert alert-success">
			<a class="close">&times;</a>
			The row has been <?=$_REQUEST['sub_action']?> successfully!
		</div>
	<? endif; ?>
	
	<a href ="?action=new">Create New</a>
	
	<table class="table">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>Description</th>
				<th>PictureUrl</th>
				<th>Supplier</th>
				<th>Category</th> 
				<th>Actions</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr class="<?=$id==$row['id'] ? "highlighted" : "" ?>" >
					
					<td><?=$row['Name']?></td>
					<td><?=$row['Price']?></td>
					<td><?=$row['Description']?></td>
					<td><?=$row['Picture_Url']?></td>
					<td><?=$row['Supplier_Name']?></td>
					<td><?=$row['Category_Name']?></td>
					<td>
						<div class="btn-group">
							<a class="btn btn-sm btn-default glyphicon glyphicon-edit" title="Edit" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-eye-open" title="Details" href="?action=edit&id=<?=$row['id']?>"></a>
							<a class="btn btn-sm btn-default glyphicon glyphicon-trash" title="Delete" href="?action=delete&format=json&id=<?=$row['id']?>"></a>
						</div>
					</td>
					<!-- <td>
						<a href="Users.php?action=edit&id=<?=$row['id']?>">Edit</a>
					</td> -->
				</tr>
			<? endforeach; ?>
		</tbody>
		
		<thead>
			
		</thead>
			
	</table>
