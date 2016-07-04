<?php
if (!defined('ABSPATH'))
    die("Can't load this file directly");

$tablecolumnsArray = explode(',', $sortElement);
/*
 * Reset Variable
 */
$result.='';
$table_head_cell='';
$table_body_cell='';
$type='table';
/*
 * Generate Header
 */
if($tablecolumnsArray){
    foreach($tablecolumnsArray as $index=>$col){
        $table_head_cell.=dp_table_head( $index,${'dp_'.$col}['column_name'],$col);
    }
}
$result.='<div id="displayProduct" class="product_table dp-section dp-group woocommerce">';
$result.='<table id="dp-table-'.$id.'" class="dp-table-shortcode dp-table-Container">'
        . '<thead><tr>'.$table_head_cell.'</tr></thead>';
$result.='<tbody>';
// Define Variable
while ($r->have_posts()) {
    $r->the_post();
    global $product;
    $first = '';

    $result.='<tr id="displayProduct-' . $r->post->ID . '" class="dp_product_item dp-table-tr">';
    if($tablecolumnsArray):
        foreach($tablecolumnsArray as $index=>$gridcolumn):
            $result.= dp_table_body($index,$gridcolumn,$r->post->ID);
        endforeach;
    endif;
    $result.= '</tr>';
}
$result.='</table>';
$result.='<div style="clear: both;"></div>';
$result.='</div>';
function dp_table_head($index,$colname,$col){
    $header_name=!empty($colname)?$colname: ucfirst($col);
    return '<th class="dp-head-cell dp--tablehead-'.$col.' dp-'.$index.'"><div class="dp--wrapper-header dp--wrapper-header-'.$col.'">'.$header_name.'</div></th>';
}
function dp_table_body($index,$col,$id){
    $type='table';
    return '<td class="dp-body-cell dp_field_'.$col.' dp-'.$index.' '.sanitize_title($col).'">'.apply_filters('dp_field_'.$col,get_the_ID(),$type).'</td>';
}
?>
