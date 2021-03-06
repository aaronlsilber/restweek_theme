<?php

/**
 * @file
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<?php foreach ($rows as $id => $row): ?>
	<div class="meal-wrapper <?php if ($id == 0): echo 'is-active'; endif; ?>" data-id="<?php echo 'menu-'.($id+1); ?>">
	<?php print $row; ?>
	</div>
<?php endforeach; ?>