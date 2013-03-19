<?php
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>
<? $is_first_exec = 1; ?>
<? $grid_clear = 1;		?>
<div class="grid_16" style="background-color:#ffffff;">
<?php foreach ($rows as $id => $row): ?>
	<? 	if($is_first_exec == 0)
		{
	?>
		  <div class="grid_16 <?php print $classes[$id]; ?>">
		    <?php print $row; ?>
		  </div>
		  <div class="clear" style="padding-bottom:25px;"></div>
	<?
		  $is_first_exec++;
	  	}
	  	else
  		{
	?>
		  <div class="grid_7 <?php print $classes[$id]; ?>">
		    <?php print $row; ?>
		  </div>
	<?		if($grid_clear == 2)
			{	print "<div class=\"clear\" style=\"padding-bottom:25px;\"></div>";
				$grid_clear = 1;
			}
			else
			{
				$grid_clear++;
			}
  		}
  	?>
<?php endforeach; ?>
</div>
