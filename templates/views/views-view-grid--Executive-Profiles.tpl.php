<?php
/**
 * @file views-view-grid.tpl.php
 * Default simple view template to display a rows in a grid.
 *
 * - $rows contains a nested array of rows. Each row contains an array of
 *   columns.
 * - $class contains the class of the table.
 * - $attributes contains other attributes for the table.
 * @ingroup views_templates
 */
?>
<?php if (!empty($title)) : ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<? $is_first_exec = 0; ?>
<div class="grid_16" style="background-color:#ffffff;">
	<?php foreach ($rows as $row_number => $columns): ?>
	<?php
        $row_class = 'row-' . ($row_number + 1);
        if ($row_number == 0) {
          $row_class .= ' row-first';
        }
        if (count($rows) == ($row_number + 1)) {
          $row_class .= ' row-last';
        }
      ?>
      <div class="grid_16" style="margin:0; padding:0; border:0;">
      	<?php foreach ($columns as $column_number => $item): ?>
      	<?
      		if($is_first_exec == 0)
			{
				?>	<div style="margin:0; padding:10px 0 10px 0; border:0; background-color: #ffffff; text-align:left" class="grid_16 <?php /*print $column_classes[$row_number][$column_number]; */ ?>">
						<?php print $item;   ?>
        	  		</div>
		<?		$is_first_exec = 1;
			}
			else
			{
		?>
          <div style="margin:0; padding:10px 0 10px 0; border:0; background-color: #ffffff; text-align:left" class="grid_8 <?php /*print $column_classes[$row_number][$column_number]; */ ?>">
            <?php print $item;   ?>
          </div>
        <? }	?>
        <?php endforeach; ?>
        <div class="clear"></div>
      </div>
	<?php endforeach; ?>
</div>
<div class="clear"></div>

<? /*
<table class="<?php print $class; ?>"<?php print $attributes; ?> style="width:100%">
  <tbody>
    <?php foreach ($rows as $row_number => $columns): ?>
      <?php
        $row_class = 'row-' . ($row_number + 1);
        if ($row_number == 0) {
          $row_class .= ' row-first';
        }
        if (count($rows) == ($row_number + 1)) {
          $row_class .= ' row-last';
        }
      ?>
      <tr class="<?php print $row_class; ?>">
        <?php foreach ($columns as $column_number => $item): ?>
          <td class="<?php print $column_classes[$row_number][$column_number]; ?>">
            <?php print $item; ?>
          </td>
        <?php endforeach; ?>
      </tr>
    <?php endforeach; ?>
  </tbody>
</table>

*/
?>