<?php
if (!defined('ABSPATH'))
    die("Can't load this file directly");

$result.='<div id="displayProduct" class="product_grid dp-section dp-group woocommerce">';

$item = 0;
$gridcolumnsArray = explode(',', $sortElement);
while ($r->have_posts()){ $r->the_post();
    global $product;
    $first = '';
    if ($item % $columns == 0) {
        $first = 'firstcol';
    }
    $result.='<div class="col-xs-12 col-sm-3 dp_product_item dp-col dp-col_1_of_' . $columns . ' ' . $first . '">';
    
    if($gridcolumnsArray){
        foreach($gridcolumnsArray as $index=>$gridcolumn){
            $result.= apply_filters('dp_field_'.$gridcolumn,get_the_ID(),$type);
        }//foreach
    }//if no empty
    $result.='<div style="clear: both;"></div>';
    $result.='</div>';
    $item++;
    
}
$result.='</div>';
?>
