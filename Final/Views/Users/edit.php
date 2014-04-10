
<h2><?=ucfirst($action)?>: <?=$model['FirstName']?> <?=$model['LastName']?></h2>

	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-group <?if(isset($errors['FirstName'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="FirstName">First Name:</label>
		<input class="required form-control" type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" placeholder="First Name" />
		<? if(isset($errors['FirstName'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['FirstName']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group <?if(isset($errors['LastName'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="LastName">Last Name:</label>
		<input class="required form-control" type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" placeholder="Last Name" />
		<? if(isset($errors['LastName'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['LastName']?></span>
		<? endif ?>
	</div>
	
	<div class="form-group">
		<label class="control-label" for="Password">Password:</label>
		<input class="form-control" type="password" name="Password" id="Password" value="<?=$model['Password']?>" placeholder="Password" />
	</div>
	
	<div class="form-group">
		<label class="control-label" for="fbid">fbid:</label>
		<input class="form-control" type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" placeholder="fbid" />
	</div>

	<div class="form-group <?if(isset($errors['UserType'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="UserType">User Type:</label>
				
		<select size="1" class="required form-control" name="UserType" id="UserType">
			<option value="">--User Type--</option>
			<? foreach (Keywords::SelectionListFor(2) as $row): ?>
				<option value="<?=$row['id']?>">
					<?=$row['Name']?>
				</option>
				<!-- <option <?if($row['id'] == $model['UserType']) echo 'Selected'; ?> 
					value="<?=$row['id']?>"><?=$row['Name']?>				
				</option>			 -->				
			<? endforeach; ?>
		</select>
		
		<? if(isset($errors['UserType'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['UserType']?></span>
		<? endif ?>
	</div>
	
	<label class="control-label"></label>
	<input class="btn btn-primary" type="submit" value="Save" />
</form>

	<? function JavaScripts(){ global $model; ?>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.js"></script>
		<script type="text/javascript" src="//ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/additional-methods.js"></script>
		<script type="text/javascript">
			$(function(){
				
				$("form").validate();
				$("#UserType").val(<?=$model['UserType']?>);
			})
		</script>
		
	<? } ?>
