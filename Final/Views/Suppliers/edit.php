
<h2><?=ucfirst($action)?>: <?=$model['Name']?> </h2>

	<ul class="error">
		<? foreach ($errors as $key => $value): ?>
			<li><b><?=$key?>:</b> <?=$value?></li>
		<? endforeach; ?>
	</ul>
	
<form action="?action=save" method="post" class="my-horizontal">
	
	
	<input type="hidden" name="id" value="<?=$model['id']?>" />
	
	<div class="form-group <?if(isset($errors['Name'])) echo 'has-error has-feedback' ?> ">
		<label class="control-label" for="Name">Name:</label>
		<input class="required form-control" type="text" name="Name" id="Name" value="<?=$model['Name']?>" placeholder="Name" />
		<? if(isset($errors['Name'])): ?>
			<span class="glyphicon glyphicon-remove form-control-feedback"></span>
			<span ><?=$errors['Name']?></span>
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
			})
		</script>
		
	<? } ?>
