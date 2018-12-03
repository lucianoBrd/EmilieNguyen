<?php

if(isset($alert))
{
?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
		<?php
			if(isset($alert['strongAlert'])){
		?>
			<button class="btn btn-default close" data-placement="top" data-content="Copié." type="button" id="copybutton" data-clipboard-text="<?= $alert['messageAlert'] ?>">
				<span class="icon-doc"></span>
			</button>
	  	<strong><?=$alert['strongAlert']?></strong>
			<a id="link" href=<?= $alert['messageAlert'] ?>><?= $alert['messageAlert'] ?></a>

		<?php
			} else {
		?>
			<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<strong>Erreur! </strong><?= $alert['messageAlert'] ?>
		<?php
			}
		?>
</div>
<?php
}
