<style type="text/css">
	.my-horizontal label {
		display: inline-block;
		width: 150px;
		text-align: right;
		margin-right: 10px;
	}
	.my-horizontal .form-control{
		display: inline-block;
	}
	@media screen and (min-width: 768px) {
		.my-horizontal .form-control{
			width: 25%;
			margin-bottom: 5px;
		}
	}
</style>



<h2>Edit: <?=$model['FirstName']?> <?=$model['LastName']?></h2>

	<ul class="error">
		<? foreach ($error as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></b></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-grou <?if(isset($errors['FirstName'])) echo 'has-error has-feedback' ?> ">
		<label for="FirstName">First Name:</label>
		<input class="form-control" type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>" placeholder="First Name" />
	</div>
	<!-- <br /> -->
	
	<div class="form-grou <?if(isset($errors['LastName'])) echo 'has-error has-feedback' ?> ">
		<label for="LastName">Last Name:</label>
		<input class="form-control" type="text" name="LastName" id="LastName" value="<?=$model['LastName']?>" placeholder="Last Name" />
	</div>
	
	<!-- <br /> -->
	<div class="form-grou <?if(isset($errors['FirstName'])) echo 'has-error has-feedback' ?> ">
		<label for="Password">Password:</label>
		<input class="form-control" type="password" name="Password" id="Password" value="<?=$model['Password']?>" placeholder="Password" />
	</div>
	
	<!-- <br /> -->
	<label for="fbid">fbid:</label>
	<input class="form-control" type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>" placeholder="fbid" />
	<!-- <br /> -->
	
	<div class="form-grou <?if(isset($errors['UserType'])) echo 'has-error has-feedback' ?> ">
		<label for="UserType">User Type:</label>
		<input class="form-control" type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>" placeholder="User Type" />
	</div>
	<!-- <br /> -->
	<label></label>
	<input class="btn" type="submit" value="Save" />
</form>

<!-- <form action="Users.php?action=save" method="post">
	<input type='hidden' name="id" value="<?=$model['id']?>"/>
	
	<label for="FirstName">First Name: </label>
	<input type="text" name="FirstName" id="FirstName" value="<?=$model['FirstName']?>"/>
	<br />
	<label for="LastName">Last Name: </label>
	<input type="text" name="LastName" id="LirstName" value="<?=$model['LastName']?>"/>
	<br />
	<label for="Password">Password: </label>
	<input type="text" name="Password" id="Password" value="<?=$model['Password']?>"/>
	<br />
	<label for="fbid">fbid: </label>
	<input type="text" name="fbid" id="fbid" value="<?=$model['fbid']?>"/>
	<br />
	<label for="UserType">User Type:</label>
	<input type="text" name="UserType" id="UserType" value="<?=$model['UserType']?>"/>
	<br />
	<input type="submit" value="Save" />
</form> -->
<!--
<pre>
	<? print_r($_GET); ?>
	<? print_r($_POST); ?>
</pre>-->
