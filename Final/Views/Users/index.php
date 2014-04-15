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
				<th>FirstName</th>
				<th>LastName</th>
				<th>Password</th>
				<th>fbid</th>
				<th>UserType</th>
				<th>Actions</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr class="<?=$id==$row['id'] ? "highlighted" : "" ?>" >
					
					<td><?=$row['FirstName']?></td>
					<td><?=$row['LastName']?></td>
					<td><?=$row['Password']?></td>
					<td><?=$row['fbid']?></td>
					<td><?=$row['UserType_Name']?></td>
					<td>
						<div class="btn-group">
							<!-- <a class="btn btn-sm btn-default glyphicon glyphicon-edit" data-toggle="modal" data-target="#myModal" title="Edit" href="?action=edit&id=<?=$row['id']?>"></a> -->
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
	



