<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */
?>
<?php 
global $user;
global $base_url;
$fid_current = $row->field_data_field_fotos_favoritas_field_fotos_favoritas_fid;

$result = db_select('field_data_field_fotos_favoritas', 'fav')
    ->fields('fav')
    ->condition('entity_id', $row->nid, '=')
    ->condition('field_fotos_favoritas_fid', $fid_current,'=')
    ->execute()
    ->fetchAssoc();

if(empty($result)){
  $icono = "favorito_icono_clic";
}else{
  $icono = "favorito_icono_noclic";
}


$html_favorito  = "<div class='content-link-favorite'>";
$html_favorito .= "<a href='" . $base_url . "/add/favorite/" . $fid_current . "' class='use-ajax output-favorite-" . $fid_current . "'><span class='" . $icono ." favorito_icono'></span></a>";
$html_favorito .= "</div>";
echo $html_favorito;

print $output;
?>

