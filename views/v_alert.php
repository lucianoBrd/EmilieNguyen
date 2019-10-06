<?php

if(isset($alert))
{
?>
	<div class="alert alert-dismissible alert-<?=$alert['typeAlert']?>">
		<button type="button" class="close" data-dismiss="alert">&times;</button>
		<strong>📷</strong> <?= $alert['messageAlert'] ?>
	</div>
<?php
}
