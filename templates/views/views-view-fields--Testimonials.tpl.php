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
$title = "";
$project_name = "";
$img = "";
$location = "";
$full_testimonial = "";
$brief_testimonial = "";

?>
<?php foreach ($fields as $id => $field): ?>
	<?
		if($field->class == "field-image-fid")
		{	$img = $field->content;
		}
		if($field->class == "title")
		{	$title = $field->content;
		}
		if($field->class == "field-project-name-value")
		{	$project_name = $field->content;
		}
		if($field->class == "field-project-location-value")
		{	$location = $field->content;
		}
		if($field->class == "field-testimonial-fid")
		{	$full_testimonial = $field->content;
		}
		if($field->class == "field-testimonial-brief-value")
		{	$quote = $field->content;
		}
		
		if($project_name == "")
		{	$project_name = $title;
		}
	?>
<?php endforeach; ?>

<div style="padding-bottom:10px;">
<?
	print "<span style=\"font-size:12pt;font-weight:bold;\">" . $project_name . "</span>";
	print "<strong> - " . $location . "</strong>";
?>
</div>	
<div class="clear"></div>
<div style="padding-left:10px;padding-right:15px;padding-bottom:25px;text-align:left;" class="grid_3">
<?		
	print "<span style=\"font-size:12pt;font-weight:bold;\">" . $title . "</span><br />";
	print "<img src=\"" . base_path() . $img ."\" style=\"border:1px solid #000;\" alt=\"" . $title . "\"/>";		
?>
</div>
<div id="apm_testimonial_quote" style="background-color:#ffffff;" class="grid_11">
<?
		print $quote . "<br />&nbsp;<br />";
		print $full_testimonial;
?>
</div>
<div class="clear" style="padding-bottom:20px;"></div>
<hr />
