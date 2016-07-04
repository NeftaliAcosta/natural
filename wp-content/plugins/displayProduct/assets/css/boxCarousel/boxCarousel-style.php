<style type="text/css">
.displayProduct-shortcode .product_box .dp-col{
    margin-bottom: 40px;
    -webkit-transition: all 400ms ease-in-out;
    -moz-transition: all 400ms ease-in-out;
    -o-transition: all 400ms ease-in-out;
    transition: all 400ms ease-in-out;
    position: relative;
}
.displayProduct-shortcode .product-name a,
.displayProduct-shortcode .product-name a,
.displayProduct-shortcode .product-name a,
.displayProduct-shortcode .product_box .product-name a,
.displayProduct-shortcode .product_meta a,
.displayProduct-shortcode .db_customtext,
.displayProduct-shortcode.displayProduct-Container a{
    text-decoration: none;
    border: 0
}
/**********************
* Title Product name
***********************/

.displayProduct-shortcode .product_box h2.product-name {
    margin: 10px 0!important;
    font-size: 1.05em;
    text-align: center;
    border: 0!important;
}
.displayProduct-shortcode .product_box .product-name a, 
.displayProduct-shortcode .product_box .product-name a:active, 
.displayProduct-shortcode .product_box .product-name a:visited {
    text-decoration: none;
    font-weight: normal;
    line-height: 20px;
    -webkit-transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -webkit-transition-property: color;
}
#displayProduct-<?php echo $display_id;?> .product_box .product-name,
#displayProduct-<?php echo $display_id;?> .product_box .product-name a{
    color: <?php echo $dp_title['color'];?>;
    font-family: <?php echo $dp_title['font-family']!='disable'?$dp_title['font-family']: 'inherit';?>;
    font-size: <?php echo $dp_title['font-size'];?>px;
    font-weight: <?php echo $dp_title['weight'];?>;
    font-style: <?php echo $dp_title['style-italic'];?>;
    text-decoration: <?php echo $dp_title['style-underline'];?>;
    line-height: 25px;
}
#displayProduct-<?php echo $display_id;?> .product_box .product-name:hover,
#displayProduct-<?php echo $display_id;?> .product_box .product-name a:hover{
    color: <?php echo $dp_title['HoverColor'];?>;
    font-weight: <?php echo $dp_title['HoverWeight'];?>;
    font-style: <?php echo $dp_title['hover-style-italic'];?>;
    text-decoration: <?php echo $dp_title['hover-style-underline'];?>;
}

/**********************
* Title Content
***********************/

.displayProduct-shortcode .product_box .dp-grid-content {
    margin: 10px 0!important;
    padding:0 5px;
    font-size: 1.05em;
    text-align: center;
    border: 0!important;
}
.displayProduct-shortcode .product_box .dp-grid-content a, 
.displayProduct-shortcode .product_box .dp-grid-content a:active, 
.displayProduct-shortcode .product_box .dp-grid-content a:visited {
    text-decoration: none;
    font-weight: normal;
    line-height: 20px;
    -webkit-transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -webkit-transition-property: color;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-content,
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-content a{
    color: <?php echo $dp_content['color'];?>;
    font-family: <?php echo $dp_content['font-family']!='disable'?$dp_content['font-family']: 'inherit';?>;
    font-size: <?php echo $dp_content['font-size'];?>px;
    font-weight: <?php echo $dp_content['weight'];?>;
    font-style: <?php echo $dp_content['style-italic'];?>;
    text-decoration: <?php echo $dp_content['style-underline'];?>;
    line-height: 25px;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-content:hover,
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-content a:hover{
    color: <?php echo $dp_content['HoverColor'];?>;
    font-weight: <?php echo $dp_content['HoverWeight'];?>;
    font-style: <?php echo $dp_content['hover-style-italic'];?>;
    text-decoration: <?php echo $dp_content['hover-style-underline'];?>;
}

/**********************
* Title Excerpt
***********************/

.displayProduct-shortcode .product_box .dp-grid-excerpt {
    margin: 10px 0!important;
    padding:0 5px;
    font-size: 1.05em;
    text-align: center;
    border: 0!important;
}
.displayProduct-shortcode .product_box .dp-grid-excerpt a, 
.displayProduct-shortcode .product_box .dp-grid-excerpt a:active, 
.displayProduct-shortcode .product_box .dp-grid-excerpt a:visited {
    text-decoration: none;
    font-weight: normal;
    line-height: 20px;
    -webkit-transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -webkit-transition-property: color;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-excerpt,
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-excerpt a{
    color: <?php echo $dp_excerpt['color'];?>;
    font-family: <?php echo $dp_excerpt['font-family']!='disable'?$dp_excerpt['font-family']: 'inherit';?>;
    font-size: <?php echo $dp_excerpt['font-size'];?>px;
    font-weight: <?php echo $dp_excerpt['weight'];?>;
    font-style: <?php echo $dp_excerpt['style-italic'];?>;
    text-decoration: <?php echo $dp_excerpt['style-underline'];?>;
    line-height: 25px;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-excerpt:hover,
#displayProduct-<?php echo $display_id;?> .product_box .dp-grid-excerpt a:hover{
    color: <?php echo $dp_excerpt['HoverColor'];?>;
    font-weight: <?php echo $dp_excerpt['HoverWeight'];?>;
    font-style: <?php echo $dp_excerpt['hover-style-italic'];?>;
    text-decoration: <?php echo $dp_excerpt['hover-style-underline'];?>;
}

/**********************
* Title Price
***********************/
.dp-grid-price{
    float: left;
    margin-top: 14px;
    text-align: center;
    font-size: 16px;
    width: 100%;
    margin-top: 1px;
    margin-bottom: 10px;
}

.displayProduct-shortcode .dp-grid-price ins{
    background: none;
    text-decoration: none;
}
.displayProduct-shortcode .product_box .dp-price {
    margin: 10px 0!important;
    padding:0 5px;
    font-size: 1.05em;
    text-align: center;
    border: 0!important;
}
.displayProduct-shortcode .product_box .dp-price a, 
.displayProduct-shortcode .product_box .dp-price a:active, 
.displayProduct-shortcode .product_box .dp-price a:visited {
    text-decoration: none;
    font-weight: normal;
    line-height: 20px;
    -webkit-transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -webkit-transition-property: color;
}
#displayProduct-<?php echo $display_id;?> .dp-price span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price a span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price a ins span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price > ins span.amount{
    color: <?php echo $dp_price['color'];?>;
    font-family: <?php echo $dp_price['font-family']!='disable'?$dp_price['font-family']: 'inherit';?>;
    font-size: <?php echo $dp_price['font-size'];?>px;
    font-weight: <?php echo $dp_price['weight'];?>;
    font-style: <?php echo $dp_price['style-italic'];?>;
    text-decoration: <?php echo $dp_price['style-underline'];?>;
    line-height: 25px;
}
#displayProduct-<?php echo $display_id;?> .dp-price:hover > span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price a:hover span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price a:hover ins span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price:hover > ins span.amount{
    color: <?php echo $dp_price['HoverColor'];?>;
    font-weight: <?php echo !empty($dp_price['HoverWeight'])?$dp_price['HoverWeight']:'normal';?>;
    font-style: <?php echo !empty($dp_price['hover-style-italic'])?$dp_price['hover-style-italic']:'normal';?>;
    text-decoration: <?php echo !empty($dp_price['hover-style-underline'])?$dp_price['hover-style-underline']:'none';?>;
}

// Del Price
#displayProduct-<?php echo $display_id;?> .dp-price a del span.amount,
#displayProduct-<?php echo $display_id;?> .dp-price del span.amount,del .amount{
    color:#ccc;
    text-decoration: none;
    font-size: 0.7em;
}


/**********************
* Title Product SKU
***********************/

.displayProduct-shortcode .product_box .dp-sku_wrapper {
    padding:5px 10px
}
.displayProduct-shortcode .product_box .dp-sku {
    margin: 10px 0!important;
    font-size: 1.05em;
    text-align: center;
    border: 0!important;
}
.displayProduct-shortcode .product_box .dp-sku a, 
.displayProduct-shortcode .product_box .dp-sku a:active, 
.displayProduct-shortcode .product_box .dp-sku a:visited {
    text-decoration: none;
    font-weight: normal;
    line-height: 20px;
    -webkit-transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -webkit-transition-property: color;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-sku,
#displayProduct-<?php echo $display_id;?> .product_box .dp-sku a{
    color: <?php echo $dp_sku['color'];?>;
    font-family: <?php echo $dp_sku['font-family']!='disable'?$dp_sku['font-family']: 'inherit';?>;
    font-size: <?php echo $dp_sku['font-size'];?>px;
    font-weight: <?php echo $dp_sku['weight'];?>;
    font-style: <?php echo $dp_sku['style-italic'];?>;
    text-decoration: <?php echo $dp_sku['style-underline'];?>;
    line-height: 25px;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-sku:hover,
#displayProduct-<?php echo $display_id;?> .product_box .dp-sku a:hover{
    color: <?php echo $dp_sku['HoverColor'];?>;
    font-weight: <?php echo $dp_sku['HoverWeight'];?>;
    font-style: <?php echo $dp_sku['hover-style-italic'];?>;
    text-decoration: <?php echo $dp_sku['hover-style-underline'];?>;
}


/**********************
* Title Product Dimension
***********************/

.displayProduct-shortcode .product_box .dp-dimension_wrapper {
    padding:5px 10px
}

/**********************
* Title Product Width
***********************/

.displayProduct-shortcode .product_box .dp-dimension_width_wrapper {
    padding:5px 10px
}

/**********************
* Title Product Height
***********************/

.displayProduct-shortcode .product_box .dp-dimension_height_wrapper {
    padding:5px 10px
}

/**********************
* Title Product Lenght
***********************/

.displayProduct-shortcode .product_box .dp-dimension_lenght_wrapper {
    padding:5px 10px
}

/**********************
* Title Product Stock Label
***********************/

.displayProduct-shortcode .product_box .dp-stock-label {
    padding:5px 10px
}

/**********************
* Title Product Stock Label
***********************/

.displayProduct-shortcode .product_box .dp-dimension_weight_wrapper {
    padding:5px 10px
}
/**********************
* Title Product Stock Quantity
***********************/

.displayProduct-shortcode .product_box .dp-stock_qty_wrapper {
    padding:5px 10px
}
/**********************
* Title Product Stock Quantity
***********************/

.displayProduct-shortcode .product_box .dp-stock-qty_wrapper {
    padding:5px 10px
}
/**********************
* Title Product Date
***********************/

.displayProduct-shortcode .product_box .dp-date_wrapper {
    padding:5px 10px
}
/**********************
* Title Product Author
***********************/

.displayProduct-shortcode .product_box .dp-author_wrapper {
    padding:5px 10px
}
/**********************
* Title Product Category
***********************/

.displayProduct-shortcode .product_box .dp-category_wrapper {
    padding:5px 10px
}
.displayProduct-shortcode .product_box .dp-category {
    display: inline-block;
}
.displayProduct-shortcode .product_box .dp-category {
    margin: 10px 0!important;
    font-size: 1.05em;
    text-align: center;
    border: 0!important;
}
.displayProduct-shortcode .product_box .dp-category a, 
.displayProduct-shortcode .product_box .dp-category a:active, 
.displayProduct-shortcode .product_box .dp-category a:visited {
    text-decoration: none;
    font-weight: normal;
    line-height: 20px;
    -webkit-transition-timing-function: ease;
    -webkit-transition-duration: .2s;
    -webkit-transition-property: color;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-category,
#displayProduct-<?php echo $display_id;?> .product_box .dp-category a{
    color: <?php echo $dp_sku['color'];?>;
    font-family: <?php echo $dp_sku['font-family']!='disable'?$dp_sku['font-family']: 'inherit';?>;
    font-size: <?php echo $dp_sku['font-size'];?>px;
    font-weight: <?php echo $dp_sku['weight'];?>;
    font-style: <?php echo $dp_sku['style-italic'];?>;
    text-decoration: <?php echo $dp_sku['style-underline'];?>;
    line-height: 25px;
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-category:hover,
#displayProduct-<?php echo $display_id;?> .product_box .dp-category a:hover{
    color: <?php echo $dp_sku['HoverColor'];?>;
    font-weight: <?php echo $dp_sku['HoverWeight'];?>;
    font-style: <?php echo $dp_sku['hover-style-italic'];?>;
    text-decoration: <?php echo $dp_sku['hover-style-underline'];?>;
}



//////////////////////////////////////////////

.dp-product-information{position: relative;
                        padding: 0;
                        text-align: center;
}
.dp-grid-button{
    float: right;
    margin-top: 10px;
    text-align: center;
    width: 100%;
}



.dp-grid-rating {
    line-height: 1.0833em;
    margin: 15px 0 15px;
    min-height: 14px;
    text-align:center
}
.displayProduct-shortcode .dp-grid-rating .star-rating {
    white-space: nowrap;
    font-size: 11px;
    text-transform: uppercase;
    color: #FDD97D;
    float: none;
    clear: both;
    display: inline-block;
    text-align: center;
}

.displayProduct-shortcode .dp-grid-thumb img{
    border-radius: 3px;
    -webkit-border-radius: 3px;
    -moz-border-radius-topleft: 3px;    
    box-shadow: 0 1px 4px rgba(0, 0, 0, 0.2);
}
.dp-grid-add-to-cart{
    text-align: center
}
.img-hided {
    position: absolute;
    left: 0;
    display: none
}
.dp-img-wrapper {
    text-align: center;
}
.dp-product-image {
    position: relative;
    display: block;
    line-height: 0;
    padding: 0;
    margin: 0;
}
.displayProduct-Container .product_box .dp-button,
.displayProduct-Container button.single_add_to_cart_button.alt,
.displayProduct-Container a.single_add_to_cart_button.alt{
    display: block
}

/* dp col*/
/*#displayProduct-<?php echo $display_id;?> .product_box .dp-col{
    background: '.$backgroundcolor.';
    color: '.$textcolor.';
}
#displayProduct-<?php echo $display_id;?> .product_box .dp-col:hover{
    border-color: '.$bordercolor.';
}*/



/* Link */
/*#displayProduct-<?php echo $display_id;?> .product_box a, 
#displayProduct-<?php echo $display_id;?> .product_box a:active, 
#displayProduct-<?php echo $display_id;?> .product_box a:visited,
#displayProduct-<?php echo $display_id;?> .product_meta a,
#displayProduct-<?php echo $display_id;?> .db_customtext
{
    color: '.$linkcolor.';
}*/
/*#displayProduct-<?php echo $display_id;?> .product_box a:hover,
#displayProduct-<?php echo $display_id;?> .product_meta a:hover,
#displayProduct-<?php echo $display_id;?> .db_customtext:hover
{
    color: '.$linkhovercolor.';
}*/


/* Button */
#displayProduct-<?php echo $display_id;?>.displayProduct-Container a.dp-button,
#displayProduct-<?php echo $display_id;?>.displayProduct-Container button.single_add_to_cart_button.alt,
#main #displayProduct-<?php echo $display_id;?>.displayProduct-Container button.comment-submit,
#displayProduct-<?php echo $display_id;?>.displayProduct-Container a.single_add_to_cart_button.alt,
    .dp_quickview .cart a.button,.dp_quickview form.cart .button{
    background: <?php echo $dp_button['color'];?>;
    color: #ffffff !important;
    border:0;
    -webkit-border-radius: 0px;
    -moz-border-radius: 0px;
    -ms-border-radius: 0px;
    -o-border-radius: 0px;
    border-radius: 0px; 
    clear: both;
    padding:0;
    width: 100%;
    text-shadow: none;
    font-weight: normal;
    line-height: 26px;
}
#displayProduct-<?php echo $display_id;?>.displayProduct-Container a.dp-button:hover ,
    .dp_quickview .cart a.button:hover,.dp_quickview form.cart .button.alt:hover,
#displayProduct-<?php echo $display_id;?>.displayProduct-Container button.single_add_to_cart_button.alt:hover,
#main #displayProduct-<?php echo $display_id;?>.displayProduct-Container button.comment-submit:hover,
#displayProduct-<?php echo $display_id;?>.displayProduct-Container a.single_add_to_cart_button.alt:hover,
#displayProduct-<?php echo $display_id;?>.displayProduct-Container .dp-section.woocommerce button.single_add_to_cart_button.button.alt:hover,
#displayProduct-<?php echo $display_id;?>.displayProduct-Container .dp-section.woocommerce a.single_add_to_cart_button.button.alt:hover,
.woocommerce button.button.alt:hover{
    background: <?php echo $dp_button['hovercolor'];?> !important;
    color: #ffffff !important;
    text-shadow: none;
}
/*#displayProduct-<?php echo $display_id;?>.displayProduct-Container .dp-section.woocommerce span.onfeatured, 
#displayProduct-<?php echo $display_id;?>.displayProduct-Container .dp-section.woocommerce-page span.onfeatured{
   background: '.$featuredcolor.';
}
 Onsale 
#displayProduct-<?php echo $display_id;?>.displayProduct-Container .dp-section.woocommerce span.onsale, 
#displayProduct-<?php echo $display_id;?>.displayProduct-Container .dp-section.woocommerce-page span.onsale {
    background: '.$salecolor.';
    text-shadow:none
}*/
</style>