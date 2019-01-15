<?php
$queried_object = get_queried_object();
?>

<div class="page-title-row row mb-4">
	<div class="page-title-col col-12 pt-4 pb-4">
		<h2 class="black-text mb-0" >
			<?php
			echo $queried_object->name;
			?>
		</h2>
	</div>
</div>
