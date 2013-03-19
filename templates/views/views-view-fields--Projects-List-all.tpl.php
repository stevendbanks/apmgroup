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
 
	$img = "";
	$title = "";
	$location = ""; 
	$project_sheet = "";
	$project_url ="";
	$junk = $row->nid;
?>
<?php foreach ($fields as $id => $field): ?>
<?php
		if($field->class == "field-image-fid")
		{	$img = $field->content;
		}
		if($field->class == "title")
		{	$title = $field->content;
		}
		if($field->class == "field-project-location-value")
		{	$location = $field->content;
		}
		if($field->class == "field-project-sheet-fid")
		{
			$project_sheet = $field->content;
		}
		if($field->class == "view-node")
		{
			$project_url = $field->content;
		}
		

?>
<?php endforeach; ?>


	<div class="grid_5" style="padding-left:10px;padding-right:10px;">
		<? print $img; 	
		?>
	</div>
	<div class="grid_6">
		<?
			print "<span class=\"apm_project_title\">" . $title . "</span>";
			print "<br />";
			print $location;
		?>
		<p class="apm_project_links">	<br />
			<? 	if($project_sheet != "")
				{
			?>
					<a href="<? print $project_sheet; ?>" target="_blank">Project Sheet</a>
			<br />
			<?	}
				else
				{
					//print "Click here for project sheet";
				}
			?>
		 <? print $project_url; ?>
			
		</p>
	</div>