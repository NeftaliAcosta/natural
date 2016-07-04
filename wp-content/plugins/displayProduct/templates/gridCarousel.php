<?php
if (!defined('ABSPATH'))
    die("Can't load this file directly");

//Style
$result.='<div id="displayProduct" class="product_grid dp-section dp-group woocommerce owl-carousel">';
$item = 0;
$gridcolumnsArray = explode(',', $sortElement);
while ($r->have_posts()) {
    $r->the_post();
    global $product;
    $first = '';
    if ($item % $columns == 0) {
        $first = 'firstcol';
    }
    $result.='<div class="dp_product_item dp-col dp-col_1_of_1 ' . $first . '">';
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
$arrowanddot=1;$arrowposition='sideMiddle'; $arrowstyle='2';
if($arrowanddot!=2){
    $result.='<div class="customNavigation '.$arrowposition.' style'.$arrowstyle.'">
            <a class="dpbtn prev"></a>
            <a class="dpbtn next"></a>
          </div>';
}
?>
