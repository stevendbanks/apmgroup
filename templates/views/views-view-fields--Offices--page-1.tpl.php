<?php
/**
 * @file views-view-fields.tpl.php
 * Default simple view template to all the fields as a row.
 *
 * - $view: The view in use.
 * - $fields: an array of $field objects. Each one contains:
 *   - $field->content: The output of the field.
 *   - $field->raw: The raw data for the field, if it exists. This is NOT output safe.
 *   - $field->class: The safe class id to use.
 *   - $field->handler: The Views field handler object controlling this field. Do not use
 *     var_export to dump this object, as it can't handle the recursion.
 *   - $field->inline: Whether or not the field should be inline.
 *   - $field->inline_html: either div or span based on the above flag.
 *   - $field->separator: an optional separator that may appear before a field.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?
	$office_location = "";
	$office_type = "";
	$email = "";
	$fax = "";
	$mailing = "";
	$map_url = "";
	$phone = "";
	$visiting = "";
	$map_image = "";
	$anchor = "";
?>
<?php foreach ($fields as $id => $field): ?>
  	<?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
  	<?php endif; ?>

	<?
		if($field->class == "title")
		{	$office_location = $field->content;
		}
		if($field->class == "field-office-type-value")
		{	$office_type = $field->content;
		}

  		if($field->class == "field-email-value")
		{	$email = $field->content;
		}
		if($field->class == "field-fax-value")
		{	$fax = $field->content;
		}
		if($field->class == "field-mail-address-value")
		{	$mailing = $field->content;
		}
		if($field->class == "field-map-url")
		{	$map_url = $field->content;
		}
		if($field->class == "field-phone-value")
		{	$phone = $field->content;
		}
		if($field->class == "field-visit-address-value")
		{	$visiting = $field->content;
		}
		if($field->class == "field-map-image-fid")
		{	$map_image = $field->content;
		}
		if($field->class == "title")
		{	$anchor = $field->content;
		}
		
	?>
<?php endforeach; ?>


<div class="grid_22">
	<a name="<? print $anchor; ?>"></a><h2><? print $office_location . " - " . $office_type; ?></h2>
	<div class="clear"></div>
	<div class="grid_10" style="padding-left:50px; padding-bottom:20px; padding-top:20px;">
		<?
			print "<div class=\"grid_3\"><strong>Visit Us At:</strong> </div><div class=\"grid_6\">" . $visiting . "</div>";
			print "<div class=\"clear\" style=\"padding-bottom:15px;\"></div>";
			print "<div class=\"grid_3\"><strong>Mailing Address:</strong> </div><div class=\"grid_6\">" . $mailing . "</div>";
			print "<div class=\"clear\" style=\"padding-bottom:15px;\"></div>";
			print "<div class=\"grid_3\"><strong>E-Mail:</strong> </div><div class=\"grid_6\">" . $email . "</div>";
			print "<div class=\"clear\" style=\"padding-bottom:15px;\"></div>";
			print "<div class=\"grid_3\"><strong>Phone:</strong> </div><div class=\"grid_6\">" . $phone . "</div>";
			print "<div class=\"clear\" style=\"padding-bottom:15px;\"></div>";
			print "<div class=\"grid_3\"><strong>Fax:</strong> </div><div class=\"grid_6\">" . $fax . "</div>";
	?></div>
	<div class="grid_10">
	<?		print "<div style=\"text-align:center;\">" . $map_image . "</div>";
		?>
	</div>
	<div class="clear" style="padding-bottom:35px;"></div>
	<hr />
</div>
<div class="clear"></div>