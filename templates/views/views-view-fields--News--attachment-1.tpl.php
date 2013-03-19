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
	$img = "";
	$title = "";
	$publish_date = "";
	$teaser = "";
	$link = "";
	$html_link = "";

?>
<?php foreach ($fields as $id => $field): ?>
  	<?php if (!empty($field->separator)): ?>
    	<?php print $field->separator; ?>
  	<?php endif; ?>

	<?
  		if($field->class == "field-image-fid")
		{	$img = $field->content;
		}
		if($field->class == "title")
		{	$title = $field->content;
		}
		if($field->class == "field-news-publish-date-value")
		{	$publish_date = $field->content;
		}
		if($field->class == "teaser")
		{	$teaser = $field->content;
		}
		if($field->class == "path")
		{	$html_link = $field->content;
		}
	?>
<?php endforeach; ?>

<?
		print "<div class=\"grid_3\">" . $img . "</div>";
		print "<div class=\"grid_12 apm_news_front\">";
		print "<span class=\"apm_news_front_title\">" . $title . "  <a class=\"freelink\" alt=\"Read News Release\" href=\"" . $html_link . "\"><img src=\"" . $base_path . $directory . "/images/icon-external.png\" /></a></span><br />";
		

		print "<span class=\"apm_news_front_date\">" . $publish_date . "</span><br />";
		print "</div><div class=\"clear\"></div>";
?>