<?php
if (!defined('ABSPATH'))
    die("Can't load this file directly");

/**********************************
 * Product name
 **********************************/
add_filter('dp_field_title','dp_field_title_cb',10,2);
function dp_field_title_cb($id,$type)
{   global $dp_title;
    if(!$id)
    {
        $id=  get_the_ID();
    }
    $result ='<h2 class="product-name">' . apply_filters('dp_link_detail',$id,get_the_title($id),$dp_title) . '</h2>';
    return $result;
}

/**********************************
 * Product Description
 **********************************/
add_filter('dp_field_content','dp_field_content_cb',10,2);
function dp_field_content_cb($id,$type)
{
    global $dp_content;
    if(!$id)
    {
        $id=  get_the_ID();
    }
    
    if($dp_content['lenght'])
    {
        $content=wp_trim_words( get_the_content($id), $dp_content['lenght'] );
    }
    else
    {
        $content= get_the_content($id);
    }
    
    return '<p class="dp-grid-content">' . apply_filters('dp_link_detail',$id,$content,$dp_content) . '</p>';

}

/**********************************
 * Product Short Description
 **********************************/
add_filter('dp_field_excerpt','dp_field_excerpt_cb',10,2);
function dp_field_excerpt_cb($id,$type)
{
    global $dp_excerpt;
    if(!$id)
    {
        $id=  get_the_ID();
    }
    
    if($dp_excerpt['lenght'])
    {
        $excerpt= dp_excerpt_max_charlength($dp_excerpt['lenght']);
    }
    else
    {
        $excerpt= get_the_excerpt($id);
    }
    return '<p class="dp-grid-excerpt">' . apply_filters('dp_link_detail',$id,$excerpt,$dp_excerpt) . '</p>';
}

/**********************************
 * Product price
 **********************************/
add_filter('dp_field_price','dp_field_price_cb',10,3);
function dp_field_price_cb($id,$type,$product_variation='')
{
    global $product,$dp_price;
    if(!$id)
    {
        $id=  get_the_ID();
    }
    if($product_variation){
        $price=$product_variation->price;
    }else{
        $price=$product->get_price_html();
    }
    return '<div class="dp-grid-price dp-price">' . apply_filters('dp_link_detail',$id,$price,$dp_price) . '</div>';
}

/**********************************
 * Product sku
 **********************************/
add_filter('dp_field_sku','dp_field_sku_cb',10,3);
function dp_field_sku_cb($id,$col,$product_variation='')
{
    global $product,$dp_sku;
    if(!$id)
    {
        $id=  get_the_ID();
    }
    if($product_variation){
        return '<div class="dp-sku">'.get_post_meta($id,'_sku',true).'</div>';
    }else{
        if ( $product->is_type( array( 'simple', 'variable' ) ) && $product->get_sku() ) :
            return '<div class="dp-sku_wrapper" itemprop="productID">'.__( 'SKU: ', DP_TEXTDOMAN).'<span class="dp-sku">'.apply_filters('dp_link_detail',$id,$product->get_sku(),$dp_sku).'</span></div>';
        endif;
    }
}

/**********************************
 * Product category
 **********************************/
add_filter('dp_field_category','dp_field_category_cb',10,2);
function dp_field_category_cb($id,$col)
{
    global $product;
    $post_ID=!empty($post->ID)?$post->ID:get_the_ID();
    $size = sizeof( get_the_terms( $post_ID, 'product_cat' ) );
    return $product->get_categories( ', ', '<div class="dp-category_wrapper posted_in">' . _n( 'Category: ', 'Categories: ', $size, DP_TEXTDOMAN) . '<span class="dp-category posted_in"> ', '</span></div>' );
}

/**********************************
 * Product tags
 **********************************/
add_filter('dp_field_tags','dp_field_tags_cb',10,2);
function dp_field_tags_cb($id,$col)
{
    global $product,$size;
    $size=!empty($size)?$size:3;
    return $product->get_tags( ', ', '<span class="tagged_as">' . _n( 'Tag: ', 'Tags: ', $size, DP_TEXTDOMAN) . ' ', '.</span>' );
}

/**********************************
 * Product stock stock label + qty
 **********************************/
add_filter('dp_field_stock','dp_field_stock_cb',10,2);
function dp_field_stock_cb($id,$col)
{
    global $product;
    $stock='';
    $stock .='<div class="dp-stock-label">';
    if (!$product->is_in_stock()) {
        $stock.= __( 'Out of stock', DP_TEXTDOMAN);
    }else{
        $stock.=__( 'In stock', DP_TEXTDOMAN);
    }
    $stock .='</div>';
    $stock .='<div class="dp-stock-qty_wrapper">'.__( 'Stock Qty : ', DP_TEXTDOMAN).'<span class="dp-stock-qty">'.$product->get_stock_quantity().__( ' Item(s)', DP_TEXTDOMAN).'</span></div>';
    return $stock;
}

/**********************************
 * Product stock label
 **********************************/
add_filter('dp_field_stock_status','dp_field_stock_status_cb',10,2);
function dp_field_stock_status_cb($id,$col)
{
    global $product;
    if (!$product->is_in_stock()) {
        $stock= __( 'Out of stock', DP_TEXTDOMAN);
    }else{
        $stock=__( 'In stock', DP_TEXTDOMAN);
    }
    return '<div itemprop="productID" class="dp-stock_label_wrapper">'.__( 'Stock : ', DP_TEXTDOMAN).'<span class="dp-stock-qty">'.$stock.'</span></div>';
}

/**********************************
 * Product stock qty
 **********************************/
add_filter('dp_field_stock_qty','dp_field_stock_qty_cb',10,2);
function dp_field_stock_qty_cb($id,$col)
{
    global $product;
    $dp_get_stock_quantity_var=$product->get_stock_quantity();
    if(!empty($dp_get_stock_quantity_var))
    {
        return '<div itemprop="productID" class="dp-stock_qty_wrapper">'.__( 'Stock: ', DP_TEXTDOMAN).'<span class="stk_qty dp-stk_qty">'.$product->get_stock_quantity().'</span></div>';
    }
}

/**********************************
 * Product Ship Weight
 **********************************/
add_filter('dp_field_weight','dp_field_weight_cb',10,2);
function dp_field_weight_cb($id,$col)
{
    global $product;
    $dp_weight_var=$product->__get('weight');
    if(!empty($dp_weight_var))
    {
        return '<div itemprop="productID" class="dp-dimension_weight_wrapper">'.__( 'Weight: ', DP_TEXTDOMAN).'<span class="sku dp-weight">'.$product->__get('weight').'</span></div>';
    }
}

/**********************************
 * Product Ship Dimension
 **********************************/
add_filter('dp_field_dimension','dp_field_dimension_cb',10,2);
function dp_field_dimension_cb($id,$col)
{
    global $product;
    $dp_lenght_var=$product->__get('length');
    $dp_width_var=$product->__get('width');
    $dp_height_var=$product->__get('height');
    if(!empty($dp_lenght_var)||!empty($dp_width_var)||!empty($dp_height_var) ){
        return '<div itemprop="productID" class="dp-dimension_wrapper">'.__( 'Dimension: ', DP_TEXTDOMAN).'<span class="dimension dp-dimension">'.implode("x", array($product->__get('length'),$product->__get('width'),$product->__get('height'))).'</span></div>';
    }
    
}

/**********************************
 * Product Ship Dimension length
 **********************************/
add_filter('dp_field_dimension_lenght','dp_field_dimension_lenght_cb',10,2);
function dp_field_dimension_lenght_cb($id,$col)
{
    global $product;
    $dp_lenght_var=$product->__get('length');
    if(!empty($dp_lenght_var))
    {
        return '<div itemprop="productID" class="dp-dimension_lenght_wrapper">'.__( 'Lenght: ', DP_TEXTDOMAN).'<span class="length dp-length">'.$product->__get('length').'</span></div>';
    }

}

/**********************************
 * Product Ship Dimension width
 **********************************/
add_filter('dp_field_dimension_width','dp_field_dimension_width_cb',10,2);
function dp_field_dimension_width_cb($id,$col)
{
    global $product;
    $dp_width_var=$product->__get('width');
    if(!empty($dp_width_var))
    {
        return '<div itemprop="productID" class="dp-dimension_width_wrapper">'.__( 'Width: ', DP_TEXTDOMAN).'<span class="width dp-width">'.$product->__get('width').'</span></div>';
    }

}

/**********************************
 * Product Ship Dimension height
 **********************************/
add_filter('dp_field_dimension_height','dp_field_dimension_height_cb',10,2);
function dp_field_dimension_height_cb($id,$col)
{
    global $product;
    $dp_height_var=$product->__get('height');
    if(!empty($dp_height_var))
    {
        return '<div itemprop="productID" class="dp-dimension_height_wrapper">'.__( 'Height: ', DP_TEXTDOMAN).'<span class="height dp-height">'.$product->__get('height').'</span></div>';
    }

}

/**********************************
 * Product Ship Class
 **********************************/
add_filter('dp_field_shipping_class','dp_field_shipping_class_cb',10,2);
function dp_field_shipping_class_cb($id,$col)
{
    global $product;
    return '<div itemprop="productID" class="dp-dimension_height_wrapper">'.$product->get_shipping_class().'</div>';
}

/**********************************
 * Product Attribute
 **********************************/
add_filter('dp_field_attribute','dp_field_attribute_cb',10,2);
function dp_field_attribute_cb($id,$col)
{
    global $product;
    return $product->get_attribute( $col['column_att_key'] );
}

/**********************************
 * Product date
 **********************************/
add_filter('dp_field_date','dp_field_date_cb',10,2);
function dp_field_date_cb($id,$col)
{
    global $product;
    $id=!empty($id)?$id:get_the_ID();
    return '<div itemprop="productID" class="dp-date_wrapper">'.get_the_date(get_option( 'date_format' ),$id).'</div>';
}

/**********************************
 * Product saleflash
 **********************************/
add_filter('dp_field_saleflash','dp_field_saleflash_cb',10,2);
function dp_field_saleflash_cb($id,$col)
{
    return dp_get_sale_flash();
}

/**********************************
 * Product Author
 **********************************/
add_filter('dp_field_author','dp_field_author_cb',10,2);
function dp_field_author_cb($id,$col)
{
    global $product;
    $author_id=$product->post_author;
    return '<div itemprop="productID" class="dp-author_wrapper">'.get_the_author_meta('nicename',$author_id).'</div>';
}

/**********************************
 * Product star
 **********************************/
add_filter('dp_field_star','dp_field_star_cb',10,2);
function dp_field_star_cb($id,$col)
{
    global $product;
    return '<div class="dp-grid-rating clearfix">' . $product->get_rating_html() . '</div>';
}

/**********************************
 * Product Feature Image
 **********************************/
add_filter('dp_field_image','dp_field_image_cb',10,2);
function dp_field_image_cb($id,$type)
{
    global $product,$dp_image,$quickview;
    $result='';
    $wrapperClass='';
    if($dp_image['type']=='link'){
        $url='href="'.get_permalink().'"';
    }elseif($dp_image['type']=='custom-link'){ 
        $url='href="'.$dp_image['custom_url'].'"';
    }else{
        $url='';
    }
    
    if($type=='list'){
        $wrapperClass="dp-col dp-list-thumb dp-col_1_of_5";
    }
    $result.='<div class="dp_images '.$wrapperClass.'">';
    $result.='<a ' . $url . ' title="' . get_the_title() . '" class="dp-product-image">';
    if (has_post_thumbnail()) {
        $result.=dp_get_image($dp_image);
        if($quickview == 'default'){
            $result.='<span class="dpquickview dp_quickview_button" data-id="'.  get_the_ID().'"><img src="'.DP_DIR.'/assets/images/quickview.png"></span>';
        }
    }else {
        $result.=wc_placeholder_img();
    }
    $result.='</a>';
    $result.='</div>';
    return $result;
}

/**********************************
 * Product Custom Field
 **********************************/
add_filter('dp_field_meta','dp_field_customField_cb',10,2);
function dp_field_customField_cb($id,$col)
{
    global $product,$dp_meta;
    $custom=get_post_meta($id,$dp_meta['meta_key'],true);
    switch ($dp_meta['type'])
    {
        case 'text' :
                $output= html_entity_decode($custom);
            break;
        case 'image' :
                $output='<img src="'.$custom.'" />';
            break;
        case 'shortcode' :
                $output=  do_shortcode($custom);
            break;
    }
    return $output;
}



/**********************************
 * Product Variable
 **********************************/
add_filter('dp_field_variable','dp_field_variable_cb',10,2);
function dp_field_variable_cb($id,$col)
{
    global $product;
    wp_reset_query();
    wp_reset_postdata();
    $main_variable_args = array(
        'post_type' => 'product_variation',
//        'meta_query' => array(
//            array(
//                'key' => 'attribute_pa_'.$attribute_arr[0],
//                'value' => $attribute_arr[1],
//            )
//        ),
        'post_parent'=>$id
    );
        
    foreach ($col['column_attr_variable_val'] as $variable_val){
        $attribute_arr=explode('|',$variable_val ); //tax|term
        $variable_args = array(
            array(
                'key' => 'attribute_pa_'.$attribute_arr[0],
                'value' => $attribute_arr[1]
            )
        );
        $main_variable_args['meta_query'][] = $variable_args;   
    }
    $main_variable_args['meta_query'][]=array('relation' => 'AND');
    $query2 = new WP_Query( $main_variable_args );
    
    while ($query2->have_posts()) { $query2->the_post();
        $variable_id=  get_the_ID();
    }
    
    $product_variation = new WC_Product_Variation($variable_id); //41 = product_variation   / 40 = product
    $regular_price = apply_filters('dp_field_'.$col['column_product_variable_field'],$variable_id,$col,$product_variation); //$product_variation->regular_price;
  
    return $regular_price;
}


/**********************************
 * Product Link to Detail
 **********************************/
add_filter('dp_link_detail','dp_link_detail_cb',10,3);
function dp_link_detail_cb($id,$content,$options='')
{
    if($options["type"]=='link'){
       return '<a href="'.get_permalink($id).'" title="'.get_the_title($id).'" >'.$content.'</a>';
    }elseif($options["type"]=='custom-link'){
       return '<a href="'.$options["custom_url"].'" title="'.get_the_title($id).'" >'.$content.'</a>';
    }
    return $content;
}

/**********************************
 * Product Add to cart
 **********************************/
add_filter('dp_field_button','dp_field_button_cb',10,2);
function dp_field_button_cb($id,$col)
{
    global $product;

    if (!$product->is_in_stock()) :

        return '<a href="' . apply_filters('out_of_stock_add_to_cart_url', get_permalink($product->id)) . '" class="dp-button">' . apply_filters('out_of_stock_add_to_cart_text', __('Read More', DP_TEXTDOMAN)) . '</a>';

    else :
        $link = array(
            'url' => '',
            'label' => '',
            'class' => ''
        );

        $handler = apply_filters('woocommerce_add_to_cart_handler', $product->product_type, $product);

        switch ($handler) {
            case "variable" :
                $link['url'] = apply_filters('variable_add_to_cart_url', get_permalink($product->id));
                $link['label'] = apply_filters('variable_add_to_cart_text', __('Select options', DP_TEXTDOMAN));
                break;
            case "grouped" :
                $link['url'] = apply_filters('grouped_add_to_cart_url', get_permalink($product->id));
                $link['label'] = apply_filters('grouped_add_to_cart_text', __('View options', DP_TEXTDOMAN));
                break;
            case "external" :
                $link['url'] = apply_filters('external_add_to_cart_url', get_permalink($product->id));
                $link['label'] = $product->get_button_text();
                break;
            default :
                if ($product->is_purchasable()) {
                    $link['url'] = apply_filters('add_to_cart_url', esc_url($product->add_to_cart_url()));
                    $link['label'] = apply_filters('add_to_cart_text', __('Agregar al carrito', DP_TEXTDOMAN));
                    $link['class'] = apply_filters('add_to_cart_class', 'add_to_cart_button');
                } else {
                    $link['url'] = apply_filters('not_purchasable_url', get_permalink($product->id));
                    $link['label'] = apply_filters('not_purchasable_text', __('Read More', DP_TEXTDOMAN));
                }
                break;
        }

        return apply_filters('woocommerce_loop_add_to_cart_link', sprintf('<a href="%s" rel="nofollow" data-product_id="%s" data-product_sku="%s" class="%s dp-button product_type_%s">%s</a>', esc_url($link['url']), esc_attr($product->id), esc_attr($product->get_sku()), esc_attr($link['class']), esc_attr($product->product_type), esc_html($link['label'])), $product, $link);

    endif;
    return $content;
}
if(!function_exists('dp_add_to_cart_customButton')):
function dp_add_to_cart_customButton($addtocarturl,$addtocarttext) {
    if($addtocarttext==''){$addtocarttext='Add to Cart';}
    $customlink='<a href="'.$addtocarturl.'" class="single_add_to_cart_button button alt db_customButton">';
    $customlink_end='</a>';
    return $customlink.$addtocarttext.$customlink_end;
}
endif;

if(!function_exists('dp_add_to_cart_customText')):
function dp_add_to_cart_customText($addtocarturl,$addtocarttext) {
    if($addtocarturl){
        $customlink='<a href="'.$addtocarturl.'" class="db_customText">';
        $customlink_end='</a>';
    }
    if($addtocarttext==''){$addtocarttext='Call for Price';}
    return $customlink.'<div class="db_customtext">'.$addtocarttext.'</div>'.$customlink_end;
}
endif;

if(!function_exists('dp_add_to_cart_productdetail')):
function dp_add_to_cart_productdetail($addtocarturl,$addtocarttext) {
    if($addtocarttext==''){$addtocarttext='View Product';}
    $customlink='<a href="'.$addtocarturl.'" class="single_add_to_cart_button button alt db_customButton">';
    $customlink_end='</a>';
    return $customlink.$addtocarttext.$customlink_end;
}
endif;

?>
