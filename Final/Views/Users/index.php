<!-- <pre>
	<? print_r($model); ?>
</pre>
-->

	<table class="table">
		<thead>
			<tr>
				<th>FirstName</th>
				<th>LastName</th>
				<th>Password</th>
				<th>fbid</th>
				<th>UserType</th>
			</tr>
		</thead>
		
		<tbody>
			<? foreach ($model as $row): ?>
				<tr>
					<td><?=$row['FirstName']?></td>
					<td><?=$row['LastName']?></td>
					<td><?=$row['Password']?></td>
					<td><?=$row['fbid']?></td>
					<td><?=$row['UserType']?></td>
					
				</tr>
			<? endforeach; ?>
		</tbody>
			
	</table>
