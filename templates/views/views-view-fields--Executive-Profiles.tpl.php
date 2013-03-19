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
 *   - $field->wrapper_prefix: A complete wrapper containing the inline_html to use.
 *   - $field->wrapper_suffix: The closing tag for the wrapper.
 *   - $field->separator: an optional separator that may appear before a field.
 *   - $field->label: The wrap label text to use.
 *   - $field->label_html: The full HTML of the label to use including
 *     configured element type.
 * - $row: The raw result object from the query, with all data it fetched.
 *
 * @ingroup views_templates
 */
?>
<?
$title = "";
$img = "";
$job_title = "";
$phone = "";
$email = "";
$designation = "";
?>
<?php foreach ($fields as $id => $field): ?>
	<?
		//print $field->class . "<br />";
		if($field->class == "field-image-fid")
		{	$img = $field->content;
		}
		if($field->class == "title")
		{	$title = $field->content;
		}
		if($field->class == "field-job-title-value")
		{	$job_title = $field->content;
		}
		if($field->class == "field-phone-value")
		{	$phone = $field->content;
		}
		if($field->class == "field-email-value")
		{	$email = $field->content;
		}
		
		if($field->class == "field-designation-value")
		{
			$designation = $field->content;
		}
	?>
	  <?  /*	?>

		<?php if (!empty($field->separator)): ?>
	    <?php print $field->separator; ?>
	  <?php endif; ?>
	
	  <?php print $field->wrapper_prefix; ?>
	    <?php print $field->label_html; ?>
	    <?php print $field->content;     ?>
	  <?php print $field->wrapper_suffix; ?>
	  
	  <?  */   ?>
<?php endforeach; ?>
	<div style="float:left;padding-left:10px;padding-right:5px;">
<?		print $img;		?>
</div>
<div id="apm_exec" style="margin-left:129px;">
<?
		print "<span style=\"font-size:12pt;font-weight:bold;\">" . $title . "</span><br />";
		if($designation != "")
		{
			print "<em>" . $designation . "</em><br />";
		}
		print "<strong>" . $job_title . "</strong><br />";
		print $phone . "<br />";
		print "<a href=\"mailto:". $email . "\">" . $email . "</a><br />";
?>
</div>
