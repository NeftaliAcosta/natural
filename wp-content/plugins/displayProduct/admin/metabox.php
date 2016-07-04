<?php
/**
 * Adds a box to the main column on the Post and Page edit screens.
 */
function myplugin_add_meta_box()
{

    $screens = array('dp_template');

    foreach ($screens as $screen) {

        add_meta_box(
            'dp_template_id',
            __('My Post Section Title', DP_TEXTDOMAN),
            'dp_template_meta_box_callback',
            $screen
        );
    }
}

add_action('add_meta_boxes', 'myplugin_add_meta_box');

/**
 * Prints the box content.
 *
 * @param WP_Post $post The object for the current post/page.
 */
function dp_template_meta_box_callback($post)
{
    // Add a nonce field so we can check for it later.
    wp_nonce_field('myplugin_meta_box', 'myplugin_meta_box_nonce');

    /*
     * Use get_post_meta() to retrieve an existing value
     * from the database and use the value for the form.
     */
    $s='selected="selected"';
    $c='checked="checked"';
    $dn='style="display: none;"';
    $db='style="display: block"';

    $dp_sortElement = get_post_meta($post->ID, 'dp_sort-element', true);

    $dp_select_template = get_post_meta($post->ID, 'dp_select_template', true);
    $dp_title_s=get_post_meta($post->ID,'dp_title',true);
    $dp_image_s=get_post_meta($post->ID,'dp_image',true);
    $dp_excerpt_s=get_post_meta($post->ID,'dp_excerpt',true);
    $dp_content_s=get_post_meta($post->ID,'dp_content',true);
    $dp_price_s=get_post_meta($post->ID,'dp_price',true);
    $dp_saleprice_s=get_post_meta($post->ID,'dp_saleprice',true);
    $dp_sku_s=get_post_meta($post->ID,'dp_sku',true);
    $dp_stock_s=get_post_meta($post->ID,'dp_stock',true);
    $dp_category_s=get_post_meta($post->ID,'dp_category',true);
    $dp_option_s=get_post_meta($post->ID,'dp_option',true);
    $dp_button_s=get_post_meta($post->ID,'dp_addtocartbutton',true);
    $dp_customfield_s=get_post_meta($post->ID,'dp_customfield',true);
    $dp_variable_s=get_post_meta($post->ID,'dp_variable',true);
   
    /*
     * Unserialize
     */
    $dp_title=unserialize($dp_title_s);
    $dp_image=unserialize($dp_image_s);
    $dp_excerpt=unserialize($dp_excerpt_s);
    $dp_content=unserialize($dp_content_s);
    $dp_price=unserialize($dp_price_s);
    $dp_saleprice=unserialize($dp_saleprice_s);
    $dp_sku=unserialize($dp_sku_s);
    $dp_stock=unserialize($dp_stock_s);
    $dp_category=unserialize($dp_category_s);
    $dp_button=unserialize($dp_button_s);
    $dp_customfield=unserialize($dp_customfield_s);
    $dp_option=unserialize($dp_option_s);
    
    $dp_option['filter_select']=!empty($dp_option['filter_select'])?$dp_option['filter_select']:array();
    $dp_option['category_select'] = !empty($dp_option['category_select']) ? $dp_option['category_select'] : array();
   // $dp_variable=unserialize($dp_variable_s);
    ?>
    <div class="option-box">
            <div class="option-title">Shortcode</div>
            <p class="option-info">Copy this shortcode and paste on page or post where you want to display accordions, Use PHP code to your themes file to display accordions.</p>
        <textarea cols="50" rows="1" style="background:#bfefff" onclick="this.select();">[displayProduct  id="<?php the_ID();?>" ]</textarea>
        <br>
        PHP Code:<br>
        <textarea cols="50" rows="1" style="background:#bfefff" onclick="this.select();">&lt;?php echo do_shortcode("[displayProduct id='<?php the_ID();?>' ]"); ?&gt;</textarea>  
        <br><br>
    </div>
    <section id="select-template">
        <div class="dp-head dp-head-select clearfix">
            <img src="<?php echo DP_URL; ?>/assets/images/template-editor/template-editor_05.png" alt=""/>
            <span>Select Template</span>
        </div>
        <div class="dp-body">
            <ul class="select-template-editor">
                <?php 
                $select_template_types=array('grid','list','box','table','boxCarousel','gridCarousel');
                $i=1;
                foreach ($select_template_types AS $st_type){
                    if($dp_select_template==$st_type || (empty($dp_select_template) && $i==1) ){
                        $active= 'active';$TemplateChecked=$c;
                    }else{
                        $active='';$TemplateChecked='';
                    }
                   echo '<li class="'.$active.'">
                            <label for="dp-editor-'.$st_type.'">
                                <img src="'.DP_URL.'assets/images/template-editor/template-'.$st_type.'.png" alt=""/>
                                <input id="dp-editor-'.$st_type.'" class="dp_select_template" name="dp_select_template" type="radio" '.$TemplateChecked.' value="'.$st_type.'">
                            </label>
                        </li>';
                   $i++;
                }
                ?>
                
            </ul>

        </div>
    </section>
    <section id="select-template">
        <div class="dp-head dp-head-editor clearfix">
            <img src="<?php echo DP_URL; ?>/assets/images/template-editor/template-editor_05.png" alt=""/>
            <span>Product options</span>
        </div>
        <div class="dp-body">
            <div class="dp_option-wrapper dp-wrapper-filterProduct">
                <span class="dp_option-label"><label for="displayProduct-filter"><?php echo dp_text('Select_product');?> : </span>
                <div class="dp_option-body">
                    <label for="dp_option[filter_condition]1"><input id="dp_option[filter_condition]1" name="dp_option[filter_condition]" class="allProduct" type="radio" value="allproduct" <?php echo $dp_option['filter_condition']=='allproduct'? $c:'checked="checked"';?>> <?php echo dp_text('allproduct');?></label>
                    <label for="dp_option[filter_condition]2"><input id="dp_option[filter_condition]2" name="dp_option[filter_condition]" class="filterProduct" type="radio" value="filterproduct" <?php echo $dp_option['filter_condition']=='filterproduct'? $c:'';?>> <?php echo dp_text('filterproduct');?></label>
                    <div class="dp_filter-wrapper">
                        <select id="displayProduct-filter" name="dp_option[filter_select][]" multiple size="3">
                            <option value="featured" <?php echo in_array('featured', $dp_option['filter_select'])? $s:'';?>><?php echo dp_text('featuredproduct');?></option>
                            <option value="sales" <?php echo in_array('sales', $dp_option['filter_select'])? $s:'';?>><?php echo dp_text('saleproduct');?></OPTION>
                            <option value="instock" <?php echo in_array('instock', $dp_option['filter_select'])? $s:'';?>><?php echo dp_text('instockproduct');?></option>
                            <option value="outofstock" <?php echo in_array('outofstock', $dp_option['filter_select'])? $s:'';?>><?php echo dp_text('outofstockpproduct');?></option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="dp_option-wrapper" >
                <span class="dp_option-label">
                    <label for="displayProduct-filter"><?php echo dp_text('filter_category');?> : </label>
                </span>
                <div class="dp_option-body">
                    <label for="dp_option[category_condition]1">
                        <input id="dp_option[category_condition]1" name="dp_option[category_condition]" class="allCategory" type="radio" value="allCatogory" <?php echo $dp_option['category_condition']=='allCatogory'? $c:'checked="checked"';?>>
                        <?php echo dp_text('allcategory');?>
                    </label>
                    <label for="dp_option[category_condition]2">
                        <input id="dp_option[category_condition]2" name="dp_option[category_condition]" class="filterCategory" type="radio" value="customCategory" <?php echo $dp_option['category_condition']=='customCategory'? $c:'';?>>
                        <?php echo dp_text('customcategory');?>
                    </label>
                    <div class="dp_category-wrapper">
                        <select id="dp_option[category_select]" name="dp_option[category_select][]" class="dp-selectCategory" multiple size="3">
                            <?php
                            //Pharse Product Category ID and Product Category Name to shortcode generator.
                            $product_cat = '';
                            $args = array('hide_empty' => false);
                            $terms = get_terms("product_cat", $args);
                            $count = count($terms);
                            if ($count > 0) {
                                foreach ($terms as $term) {
                                    $in=in_array($term->slug, $dp_option['category_select'])? $s:'';
                                    $product_cat.= '<option value="' . $term->slug . '" '.$in.'>' . $term->name . '</option>';
                                }
                            } else {
                                $product_cat.= '<option value="nocat">Please Insert product category or add product to category.</option>';
                            }
                            echo $product_cat;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="dp_option-wrapper">
                <span class="dp_option-label">
                    <label for="displayProduct-tag"><?php echo dp_text('filter_by_tag');?> : </span>
                </span>
                 <div class="dp_option-body">
                    <label for="dp_option[tag_condition]1">
                        <input id="dp_option[tag_condition]1" name="dp_option[tag_condition]" class="allTag" type="radio" value="allTag" <?php echo $dp_option['tag_condition']=='allTag'? $c:'checked="checked"';?>>
                        <?php echo dp_text('alltag');?>
                    </label>
                    <label for="dp_option[tag_condition]2">
                        <input id="dp_option[tag_condition]2" name="dp_option[tag_condition]" class="filterTag" type="radio" value="customTag" <?php echo $dp_option['tag_condition']=='customTag'? $c:'';?>>
                        <?php echo dp_text('customtag');?>
                    </label>
                    <div class="dp_tag-wrapper">
                        <select id="dp_option[tag_select]" name="dp_option[tag_select][]" class="dp-selectTag" multiple size="3">
                            <?php
                            //Pharse Product Category ID and Product Category Name to shortcode generator.
                            $product_tag = '';
                            $args = array('hide_empty' => false);
                            $terms = get_terms("product_tag", $args);
                            $count = count($terms);
                            if ($count > 0) {
                                foreach ($terms as $term) {
                                    $in=in_array($term->slug, $dp_option['tag_select'])? $s:'';
                                    $product_tag.= '<option value="' . $term->slug . '" '.$in.'>' . $term->name . '</option>';
                                }
                            } else {
                                $product_tag.= '<option value="notag">Please insert product tag or attaching tags to items .</option>';
                            }
                            echo $product_tag;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            
            <div class="dp_option-wrapper">
                <span class="dp_option-label">
                    <label for="displayProduct-shippingClass"><?php echo dp_text('filter_by_shippingClass');?> : </span>
                </span>
                 <div class="dp_option-body">
                    <label for="dp_option[shippingClass_condition]1">
                        <input id="dp_option[shippingClass_condition]1" name="dp_option[shippingClass_condition]" class="allShippingClass" type="radio" value="allShippingClass" <?php echo $dp_option['shippingClass_condition']=='allShippingClass'? $c:'checked="checked"';?>>
                        <?php echo dp_text('allshippingclass');?>
                    </label>
                    <label for="dp_option[shippingClass_condition]2">
                        <input id="dp_option[shippingClass_condition]2" name="dp_option[shippingClass_condition]" class="filterShippingClass" type="radio" value="customShippingClass" <?php echo $dp_option['shippingClass_condition']=='customShippingClass'? $c:'';?>>
                        <?php echo dp_text('customshippingclass');?>
                    </label>
                    <div class="dp_shippingClass-wrapper">
                        <select id="dp_option[shippingClass_select]" name="dp_option[shippingClass_select][]" class="dp-selectShippingClass" multiple size="3">
                            <?php
                            //Pharse Product Category ID and Product Category Name to shortcode generator.
                            $product_shippingClass = '';
                            $args = array('hide_empty' => false);
                            $terms = get_terms("product_shipping_class", $args);
                            $count = count($terms);
                            if ($count > 0) {
                                foreach ($terms as $term) {
                                    $in=in_array($term->slug, $dp_option['shippingClass_select'])? $s:'';
                                    $product_shippingClass.= '<option value="' . $term->slug . '" '.$in.'>' . $term->name . '</option>';
                                }
                            } else {
                                $product_shippingClass.= '<option value="notag">Please insert product shipping class or attaching shipping class to product items .</option>';
                            }
                            echo $product_shippingClass;
                            ?>
                        </select>
                    </div>
                </div>
            </div>
            <div class="dp_option-wrapper">
                <span class="dp_option-label">
                    <label for="displayProduct-stock"><?php echo dp_text('filter_by_stock');?> : </span>
                </span>
                 <div class="dp_option-body">
                    <div class="dp_stock-wrapper">
                        <select id="dp_option[stock_select]" name="dp_option[stock_select]" class="" >
                           <option value="all" <?php echo $dp_option['stock_select']=='all'? $s:'';?>><?php echo dp_text('all');?></option>
                           <option value="instock" <?php echo $dp_option['stock_select']=='instock'? $s:'';?>><?php echo dp_text('only_in_stock');?></option>
                           <option value="outofstock" <?php echo $dp_option['stock_select']=='outofstock'? $s:'';?>><?php echo dp_text('only_out_of_stock');?></option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="dp_option-wrapper">
                <span class="dp_option-label">
                    <label for="displayProduct-date_range"><?php echo dp_text('date_range');?> : </span>
                </span>
                 <div class="dp_option-body">
                     <div class="dp_stock-wrapper">
                        <select id="dp_option[date_range]" name="dp_option[date_range]" class="daterange" >
                            <option value="all"  <?php echo $dp_option['date_range']=='all'? $s:'';?>>All</option>
                            <option value="today" <?php echo $dp_option['date_range']=='today'? $s:'';?>>Today</option>
                            <option value="yesterday" <?php echo $dp_option['date_range']=='yesterday'? $s:'';?>>Yesterday</option>
                            <option value="this_month" <?php echo $dp_option['date_range']=='this_month'? $s:'';?>>This month</option>
                            <option value="this_year" <?php echo $dp_option['date_range']=='this_year'? $s:'';?>>This Year</option>
                            <option value="7" <?php echo $dp_option['date_range']=='7'? $s:'';?>>Last 7 Days</option>
                            <option value="30" <?php echo $dp_option['date_range']=='30'? $s:'';?>>Last 30 Days</option>
                            <option value="120" <?php echo $dp_option['date_range']=='120'? $s:'';?>>Last 120 Days</option>
                            <option value="365" <?php echo $dp_option['date_range']=='365'? $s:'';?>>Last 365 Days</option>
                            <option value="custom" <?php echo $dp_option['date_range']=='custom'? $s:'';?>>Custom Date Range</option>
                        </select>
                     </div>
                </div>
            </div>
            <div class="dp_option-wrapper related_daterange_custom">
                <span class="dp_option-label">
                    <label for="dp_option[start_date]"><?php echo dp_text('start_date');?> : </span>
                </span>
                <input type="text" id="dp_option[start_date]"  name="dp_option[start_date]" class="start_date" value="<?php echo $dp_option['start_date']?$dp_option['start_date']:'';?>">
            </div>
            <div class="dp_option-wrapper related_daterange_custom">
                <span class="dp_option-label">
                    <label for="dp_option[end_date]"><?php echo dp_text('end_date');?> : </span>
                </span>
                <input type="text" id="dp_option[end_date]"  name="dp_option[end_date]" class="end_date"  value="<?php echo $dp_option['end_date']?$dp_option['end_date']:'';?>">
            </div>
            
            
            <div class="dp_option-wrapper">
                <span class="dp_option-label">
                    <label for="dp_option[perpage]"><?php echo dp_text('Products_displayed_per_page');?> : </span>
                </span>
                <input type="number" id="dp_option[perpage]" min="1" name="dp_option[perpage]" value="<?php echo $dp_option['perpage']?$dp_option['perpage']:'20';?>">
            </div>
            <div class="dp_option-wrapper">
                <span class="dp_option-label">
                    <label for="dp_option[column]"><?php echo dp_text('Columns');?> : </span>
                </span>
                <input type="number" id="dp_option[column]" min="1" name="dp_option[column]" value="<?php echo $dp_option['column']?$dp_option['column']:'3';?>">
            </div>
        </div>
    </section>
<section id="select-template" class="dragdrop-editor layout-<?php echo $dp_select_template;?>">
        <div class="dp-head dp-head-editor clearfix">
            <img src="<?php echo DP_URL; ?>/assets/images/template-editor/template-editor_05.png" alt=""/>
            <span>Drag and Drop Editor</span>
        </div>
        <div cl ass="dp-body">
            
            <div class="dp-wrapper-available-element">
                <h3 class="arrow_box">Product Elements</h3>
                <ul id="sortable1" class="dp-available-element simple_with_animation vertical" >
                    <?php
//                    echo plugin_dir_path(__FILE__)."fields/*.php";
                    foreach (glob(plugin_dir_path(__FILE__)."fields/*.php") as $filename)
                    {
                        include $filename;
                    }
                    ?>
                </ul>
            </div>
            <div class="dp-wrapper-editor-zone">
                <div class="dp-controle">
                    <div class="dp-wrapper-customizeLayout">
                        <div class="dp_option-wrapper">
                            <span class="dp_option-label">
                                <label for="dp_option[frontsorter]"><?php echo dp_text('Frontend_Sorter');?></label>
                            </span>
                            <select id="dp_option[frontsorter]" name="dp_option[frontsorter]">
                                    <option value="default" <?php echo $dp_option['frontsorter']=='default'? $s:'';?>><?php echo dp_text('Default');?></option>
                                    <option value="disable" <?php echo $dp_option['frontsorter']=='disable'? $s:'';?>><?php echo dp_text('Disable');?></option>
                            </select>
                        </div>
                        <div class="dp_option-wrapper">
                            <span class="dp_option-label">
                                <label for="dp_option[pagination]"><?php echo dp_text('Pagination');?></label>
                            </span>
                            <select id="dp_option[pagination]" name="dp_option[pagination]">
                                    <option value="default" <?php echo $dp_option['pagination']=='default'? $s:'';?>><?php echo dp_text('Default');?></option>
                                    <option value="disable" <?php echo $dp_option['pagination']=='disable'? $s:'';?>><?php echo dp_text('Disable');?></option>
                            </select>
                        </div>
                        <div class="dp_option-wrapper">
                            <span class="dp_option-label">
                                <label for="dp_option[quickview]"><?php echo dp_text('Quickview');?></label>
                            </span>
                            <select id="dp_option[quickview]" name="dp_option[quickview]">
                                <option value="default" <?php echo $dp_option['quickview']=='default'? $s:'';?>><?php echo dp_text('Default');?></option>
                                <option value="disable" <?php echo $dp_option['quickview']=='disable'? $s:'';?>><?php echo dp_text('Disable');?></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="dp-editor">
                    <div><img src="<?php echo DP_URL; ?>assets/images/template-editor/template-editor_28.png" alt=""/></div>
                    <ul id="sortable2" class="dp-use-element simple_with_animation horizontal dropArea" >
                    </ul>
                </div>
            </div>
            <input name="dp_sort-element" id="dp_sort-element" type="hidden" value="<?php  echo $dp_sortElement;?>">
        </div>
    </section>
    <script type="text/javascript" src="<?php echo admin_url('load-scripts.php');?>?c=1&amp;load%5B%5D=hoverIntent,common,admin-bar,jquery-ui-core,jquery-ui-widget,jquery-ui-mouse,jquery-ui-draggable,jquery-ui-slider,jquery-touch-p&amp;load%5B%5D=unch,iris,wp-color-picker,svg-painter,heartbeat"></script>
    <link href="<?php echo DP_URL . 'plugin/select2/select2.css';?>" rel="stylesheet" />
    <script src="<?php echo DP_URL . 'plugin/select2/select2.js';?>"></script>
<script type="text/javascript">
        jQuery(document).ready(function(){
            jQuery('#displayProduct-filter,.dp-selectCategory,.dp-selectTag,.dp-selectShippingClass').select2({
                placeholder: "Select a filter"
              });
            /*
                Select Template Image
             */
            jQuery('.select-template-editor li .dp_select_template').click(function(){
                st=jQuery(this).parent().parent();
                st.siblings().removeClass('active');
                st.addClass('active');
                dp_setupDefaultValue(jQuery(this).val());
            });
            
            /*
            Show Hide Section
             */
            jQuery('.dp-head').click(function(){
                jQuery(this).next().toggle();
            });
            /*
            Show Hide Block
             */
            jQuery('.dp_element-head').click(function(){
                jQuery(this).next().toggle();
            });
            
            /*
             * Date Range
             */
            
            jQuery( ".start_date" ).datepicker({
                changeMonth: true,
                changeYear: true,
                dateFormat : 'yy-mm-dd',
                numberOfMonths: 3,
                onClose: function( selectedDate ) {
                    jQuery( ".end_date" ).datepicker( "option", "minDate", selectedDate );
                }
            });
            jQuery( ".end_date" ).datepicker({
                changeMonth: true,
                changeYear: true,
                numberOfMonths: 3,
                dateFormat : 'yy-mm-dd',
                onClose: function( selectedDate ) {
                    jQuery( ".start_date" ).datepicker( "option", "maxDate", selectedDate );
                }
              });
            
            daterange=jQuery( ".daterange" ).val();
            if(daterange=='custom'){
                jQuery('.related_daterange_custom').fadeIn();
            }else{
                jQuery('.related_daterange_custom').fadeOut();
            }
            jQuery('.daterange').change(function(){
                daterange=jQuery( ".daterange" ).val();
                if(daterange=='custom'){
                    jQuery('.related_daterange_custom').fadeIn();
                }else{
                    jQuery('.related_daterange_custom').fadeOut();
                }
            });
            
            
            /*
             * Color Picker
             */
            jQuery('.dp_picker_color').wpColorPicker();
            
            /*
             * Sortable
             */
            jQuery("ul#sortable1").sortable({
                group: '.simple_with_animation',
                connectWith: ".simple_with_animation",
                placeholder: "ui-sortable-placeholder",
                pullPlaceholder: false,
                helper: 'clone',
                appendTo: 'ul#sortable2',
                // animation on drop
                onDrop: function  (item, targetContainer, _super) {
                    var clonedItem = jQuery('<li/>').css({height: 0})
                    item.before(clonedItem)
                    clonedItem.animate({'height': item.height()})

                    item.animate(clonedItem.position(), function  () {
                        clonedItem.detach()
                        _super(item)
                    })
                },

                // set item relative to cursor position
                onDragStart: function ($item, container, _super) {
                    var offset = $item.offset(),
                        pointer = container.rootGroup.pointer

                    adjustment = {
                        left: pointer.left - offset.left,
                        top: pointer.top - offset.top
                    }

                    _super($item, container)
                },
                onDrag: function ($item, position) {
                    $item.css({
                        left: position.left - adjustment.left,
                        top: position.top - adjustment.top
                    })
                }
            });
            jQuery("ul#sortable2").sortable({
                group: '.simple_with_animation',
                connectWith: ".simple_with_animation",
                placeholder: "ui-sortable-placeholder",
                pullPlaceholder: false,
                // animation on drop
                onDrop: function  (item, targetContainer, _super) {
                    var clonedItem = jQuery('<li/>').css({height: 0})
                    item.before(clonedItem)
                    clonedItem.animate({'height': item.height()})

                    item.animate(clonedItem.position(), function  () {
                        clonedItem.detach()
                        _super(item)
                    })
                },

                // set item relative to cursor position
                onDragStart: function ($item, container, _super) {
                    var offset = $item.offset(),
                        pointer = container.rootGroup.pointer

                    adjustment = {
                        left: pointer.left - offset.left,
                        top: pointer.top - offset.top
                    }

                    _super($item, container)
                },
                onDrag: function ($item, position) {
                    $item.css({
                        left: position.left - adjustment.left,
                        top: position.top - adjustment.top
                    })
                },
                update: function(event, ui) {
                    var newOrder = jQuery(this).sortable('toArray').toString();
                    jQuery('#dp_sort-element').val(newOrder);
                }
            });
            
            /*
             * Set default element
             */
            <?php
            
            if($dp_sortElement){
                $move_element_ex=explode(",",$dp_sortElement);
                foreach($move_element_ex AS $move_element){
                     ?>
                    jQuery("<?php echo '#'.$move_element;?>").appendTo("ul#sortable2");
                    <?php
                }
            }?>
                    
            /*
             * Set Up Default Value
             */
            function dp_setupDefaultValue(dpType){
                jQuery(".dragdrop-editor").removeClass (function (index, css) {
                    return (css.match (/(^|\s)layout-\S+/g) || []).join(' ');
                });
                jQuery('.dragdrop-editor').addClass('layout-'+dpType);
                /*
                 * Start element
                 */
                if(dpType==='grid')
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                else if(dpType==='list')
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                else if(dpType==='box')
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                else if(dpType==='table')
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                else if(dpType==='boxCarousel')
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                else if(dpType==='gridCarousel')
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                else
                {
                    start_element="#displayProduct-image,#displayProduct-title,#displayProduct-price,#displayProduct-button";
                }
                /*
                 * Clear element
                 */
                    var idArray = [];
                    jQuery('ul#sortable2 li').each(function () {
                        //idArray.push('#'+this.id);
                        jQuery('#'+this.id).appendTo("ul#sortable1");
                    });
                    
                /*
                 * Re-append
                 */
                jQuery(start_element).appendTo("ul#sortable2");
                var newOrder = jQuery("ul#sortable2").sortable('toArray').toString();
                jQuery('#dp_sort-element').val(newOrder);
            }
        <?php 
        $hideList='';
        $hideList.=$dp_option['filter_condition']=='filterproduct'? '':'jQuery(".dp_filter-wrapper").hide();';
        $hideList.=$dp_option['category_condition']=='customCategory'? '':'jQuery(".dp_category-wrapper").hide();';
        $hideList.=$dp_option['tag_condition']=='customTag'? '':'jQuery(".dp_tag-wrapper").hide();';
        $hideList.=$dp_option['shippingClass_condition']=='customShippingClass'? '':'jQuery(".dp_shippingClass-wrapper").hide();';
        echo $hideList;
        ?>
        jQuery('.table,label[for="dp_image[custom_url]"],.carousel,.addtocartcustom,label[for="dp_title[custom_url]').hide();
        jQuery('label[for="dp_addtocartbutton[custom_text]').hide();
        jQuery('label[for="dp_addtocartbutton[custom_url]').hide();
        /* Product Filter  */
        jQuery('.allProduct').click(function() {
            jQuery('.dp_filter-wrapper').fadeOut('fast');
        });
        jQuery('.filterProduct').click(function() {
            jQuery('.dp_filter-wrapper').fadeIn('fast');
        });

        /* Product Category */
        jQuery('.allCategory').click(function() {
            jQuery('.dp_category-wrapper').fadeOut('fast');
        });
        jQuery('.filterCategory').click(function() {
            jQuery('.dp_category-wrapper').fadeIn('fast');
        });
        
        /* Product Tag */
        jQuery('.allTag').click(function() {
            jQuery('.dp_tag-wrapper').fadeOut('fast');
        });
        jQuery('.filterTag').click(function() {
            jQuery('.dp_tag-wrapper').fadeIn('fast');
        });
        
        /* Product Shipping Class */
        jQuery('.allShippingClass').click(function() {
            jQuery('.dp_shippingClass-wrapper').fadeOut('fast');
        });
        jQuery('.filterShippingClass').click(function() {
            jQuery('.dp_shippingClass-wrapper').fadeIn('fast');
        });
        
        /*
         * Show hide Input box
         */
        jQuery('select.dp_element-title').change(function() { 
            if(jQuery(this).val()=='custom-link'){
                jQuery('label[for="dp_title[custom_url]"]').fadeIn('fast');
            }else{
                jQuery('label[for="dp_title[custom_url]"]').fadeOut('fast');
            }
        });
        jQuery('select.dp_element-image').change(function() { 
            if(jQuery(this).val()=='custom-link'){
                jQuery('label[for="dp_image[custom_url]"]').fadeIn('fast');
            }else{
                jQuery('label[for="dp_image[custom_url]"]').fadeOut('fast');
            }
        });
        jQuery('select.dp_addtocartbutton_type').change(function() { 
            if(jQuery(this).val()=='customButton'){
                jQuery('label[for="dp_addtocartbutton[custom_url]"]').fadeIn('fast');
                jQuery('label[for="dp_addtocartbutton[custom_text]"]').fadeIn('fast');
            }else if(jQuery(this).val()=='customText'){
                jQuery('label[for="dp_addtocartbutton[custom_url]"]').fadeOut('fast');
                jQuery('label[for="dp_addtocartbutton[custom_text]"]').fadeIn('fast');
            }else{
                jQuery('label[for="dp_addtocartbutton[custom_url]"]').fadeOut('fast');
                jQuery('label[for="dp_addtocartbutton[custom_text]"]').fadeOut('fast');
            }
        });
        
    });
</script>
    <?php
}// Function template meta box

/**
 * When the post is saved, saves our custom data.
 *
 * @param int $post_id The ID of the post being saved.
 */
function dp_template_save_meta_box_data($post_id)
{

    /*
     * We need to verify this came from our screen and with proper authorization,
     * because the save_post action can be triggered at other times.
     */

    // Check if our nonce is set.
    if (!isset($_POST['myplugin_meta_box_nonce'])) {
        return;
    }
    // Verify that the nonce is valid.
    if (!wp_verify_nonce($_POST['myplugin_meta_box_nonce'], 'myplugin_meta_box')) {
        return;
    }
    // If this is an autosave, our form has not been submitted, so we don't want to do anything.
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }
    // Check the user's permissions.
    if (isset($_POST['post_type']) && 'page' == $_POST['post_type']) {
        if (!current_user_can('edit_page', $post_id)) {
            return;
        }
    } else {
        if (!current_user_can('edit_post', $post_id)) {
            return;
        }
    }

    /* OK, it's safe for us to save the data now. */

    // Make sure that it is set.
//    if (!isset($_POST['dp-sort-element'])) {
//        return;
//    }

    // Sanitize user input.
    $my_data = sanitize_text_field($_POST['dp_sort-element']);
    $dp_title_s = serialize($_POST['dp_title']);
    $dp_image_s = serialize($_POST['dp_image']);
    $dp_excerpt_s= serialize($_POST['dp_excerpt']);
    $dp_content_s= serialize($_POST['dp_content']);
    $dp_price_s=serialize($_POST['dp_price']);
    $dp_sku_s=serialize($_POST['dp_sku']);
    $dp_stock_s=serialize($_POST['dp_stock']);
    $dp_category_s=serialize($_POST['dp_category']);
    $dp_saleprice_s=serialize($_POST['dp_saleprice']);
    $dp_button_s=serialize($_POST['dp_addtocartbutton']);
    $dp_customfield_s=serialize($_POST['dp_customfield']);
    $dp_variable_s=serialize($_POST['dp_variable']);
    $dp_option_s=serialize($_POST['dp_option']);
//var_dump($_POST['dp_option']);exit();

    // Update the meta field in the database.
    update_post_meta($post_id, 'dp_sort-element', $my_data);
    update_post_meta($post_id, 'dp_select_template', $_POST['dp_select_template']);
    update_post_meta($post_id,'dp_title',$dp_title_s);
    update_post_meta($post_id,'dp_image',$dp_image_s);
    update_post_meta($post_id,'dp_excerpt',$dp_excerpt_s);
    update_post_meta($post_id,'dp_content',$dp_content_s);
    update_post_meta($post_id,'dp_price',$dp_price_s);
    update_post_meta($post_id,'dp_saleprice',$dp_saleprice_s);
    update_post_meta($post_id,'dp_sku',$dp_sku_s);
    update_post_meta($post_id,'dp_stock',$dp_stock_s);
    update_post_meta($post_id,'dp_category',$dp_category_s);
    update_post_meta($post_id,'dp_addtocartbutton',$dp_button_s);
    update_post_meta($post_id,'dp_customfield',$dp_customfield_s);
    update_post_meta($post_id,'dp_variable',$dp_variable_s);
    update_post_meta($post_id,'dp_option',$dp_option_s);
}

add_action('save_post', 'dp_template_save_meta_box_data');
?>