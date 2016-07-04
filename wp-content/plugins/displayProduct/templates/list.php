<?php
if (!defined('ABSPATH'))
    die("Can't load this file directly");

//Style
$result.='<div id="displayProduct" class="product_list woocommerce">';
//$metagroup = array(
//    'sku'      => True,
//    'metacategory'    => True,
//    'metatag'    => True,
//);
$listcolumnsArray = explode(',', $sortElement);
while ($r->have_posts()) {
    $r->the_post();
    global $product;
    $result.='<div id="displayProduct-' . $r->post->ID . '" class="dp-section dp-group dp_product_item">';
    $link_start = '<a href="' . get_permalink() . '" title="' . get_the_title() . '">';
    $link_end = '</a>';
    $link_thumb_start = '<a href="' . get_permalink() . '"  title="' . get_the_title() . '" class="dp-product-image">';
    if (in_array( 'image',$listcolumnsArray)) {
        $result.=apply_filters('dp_field_image',get_the_ID(),$type);
    }
    /*
     * Content
     */
    $result.='<div class="dp-col dp-list-thumb dp-col_3_of_5 dp_list_content">';
    if($listcolumnsArray){
        $skip=array('image','button','price');
        foreach($listcolumnsArray as $index=>$listcolumn){
            if(in_array($listcolumn,$skip)) continue;
            $result.= apply_filters('dp_field_'.$listcolumn,get_the_ID(),$type);
        }//foreach
    }//if no empty
    $result.='</div>';
    
    if (in_array( 'price',$listcolumnsArray) || in_array( 'button',$listcolumnsArray)) {
        $result.='<div class="dp-col dp-list-add-to-cart dp-col_1_of_5">';
        if (in_array( 'price',$listcolumnsArray)) {
            $result.='<div class="dp-list-price dp-price">' . $product->get_price_html() . '</div>';
        }
        $result.='<div class="dp-stock"></div>';
        if (in_array( 'button',$listcolumnsArray)) {
            switch ($dp_button['type']) {
                case 'buttonquantity':
                    ob_start();
                    woocommerce_template_single_add_to_cart();
                    $result.= ob_get_contents();
                    ob_end_clean();
                    break;
                case 'productDetail':
                    $result.='<div class="dp-grid-button">' . dp_add_to_cart_productdetail(get_permalink(),$addtocarttext) . '</div>';
                    break;
                case 'customButton':
                    $result.='<div class="dp-grid-button">' . dp_add_to_cart_customButton($addtocarturl,$addtocarttext) . '</div>';
                    break;
                case 'customText':
                    $result.='<div class="dp-grid-button">' . dp_add_to_cart_customText($addtocarturl,$addtocarttext) . '</div>';
                    break;
                default:
                    $result.='<div class="dp-grid-button">' . dp_add_to_cart() . '</div>';
                    break;
            }
        }//$button Show / Hide
        $result.='</div>';
    }
    $result.='</div>';
}
$result.='</div>';
?>
