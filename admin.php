<div class="wrap">

	<h1 class="wp-heading-inline"><?php echo __('Viaplay Import'); ?></h1>

	<hr class="wp-header-end">

	<?php if(!empty($_FILES['viaplay_file']['name'])): ?>

		<div class="notice success is-dismissible">Success!</div>

	<?php endif; ?>

	<form method="post" enctype="multipart/form-data">

		<input type="file" name="viaplay_file">
		<input type="submit" name="submit" value="Import">

	</form>

</div>
