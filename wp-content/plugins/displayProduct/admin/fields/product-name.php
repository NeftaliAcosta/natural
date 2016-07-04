<li id="displayProduct-title">
<div  class="displayProduct-eneble">
    <div class="dp_element-head">
        <?php echo dp_text('Product_name');?>
        <div class="arrow-down"></div>
    </div>
    <div class="dp_element-body">
        <label class="dp_element-wrapper for-table" for="dp_title[column_name]">
            <span class="dp_element-label">Column name : </span>
            <input type="text" name="dp_title[column_name]"  id="dp_title[column_name]" placeholder="Column name" value="<?php echo $dp_title['column_name'];?>"/>
        </label>
        <label class="dp_element-wrapper for-table" for="dp_title[column_width]">
                <span class="dp_element-label">Column width : </span>
                <input type="text" name="dp_title[column_width]"  id="dp_title[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_title['column_width'];?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_title[type]">
            <span class="dp_element-label">Link to : </span>
            <select name="dp_title[type]" class="dp_element-title" id="dp_title[type]">
                <option value="link" <?php echo $dp_title['type']=='link'? $s:'';?> >Link to Product</option>
                <option value="none" <?php echo $dp_title['type']=='none'? $s:'';?>>none</option>
                <option value="custom-link" <?php echo $dp_title['type']=='custom-link'? $s:'';?>>Custom Link</option>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_title[custom_url]">
            <span class="dp_element-label">URL : </span>
            <input type="text" name="dp_title[custom_url]"  id="dp_title[custom_url]" placeholder="http://url.com" value="<?php echo $dp_title['custom_url'];?>"/>
        </label>
        <hr />
        <label class="dp_element-wrapper" for="dp_title[font-size]">
            <span class="dp_element-label">Font size : </span>
            <input type="number" name="dp_title[font-size]" id="dp_title[font-size]" placeholder="14"  min="1" value="<?php echo $dp_title['font-size']?$dp_title['font-size']:'14';?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_title[font-family]">
            <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
            <select id="dp_title[font-family]" name="dp_title[font-family]">
                    <option value="disable"><?php echo dp_text('Disable');?></option>
                    <?php $fontFamily=$dp_title['font-family']?$dp_title['font-family']:'arial';?>
                    <?php echo dp_fontfamily_option_init($fontFamily);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_title[weight]">
            <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
            <select id="dp_title[weight]" name="dp_title[weight]">
                    <option value="normal">Normal</option>
                    <?php $weight=$dp_title['weight']?$dp_title['weight']:'arial';?>
                    <?php echo dp_weight_option_init($weight);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_title[style]">
            <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
            <label for="dp_title[style-italic]">
                <input id="dp_title[style-italic]" name="dp_title[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_title['style-italic'])=='italic'? 'checked':'';?>> Italic
            </label>
            <label for="dp_title[style-underline]">
                <input id="dp_title[style-underline]" name="dp_title[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_title['style-underline'])=='underline'? 'checked':'';?>> Underline
            </label>
        </label>
        <label class="dp_element-wrapper" for="dp_title[color]">
            <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
            <input id="dp_title[color]" name="dp_title[color]" type="text" class="dp_picker_color" value="<?php echo $dp_title['color']?$dp_title['color']:'#444444';?>" data-default-color="<?php echo $dp_title['color']?$dp_title['color']:'#444444';?>">
        </label>
        <hr />
        <label class="dp_element-wrapper" for="dp_title[weight]">
            <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
            <select id="dp_title[weight]" name="dp_title[weight]">
                    <option value="normal">Normal</option>
                    <?php $weight=$dp_title['weight']?$dp_title['weight']:'arial';?>
                    <?php echo dp_weight_option_init($weight);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_title[hover-style]">
            <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
            <label for="dp_title[hover-style-italic]">
                <input id="dp_title[hover-style-italic]" name="dp_title[hover-style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_title['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
            </label>
            <label for="dp_title[hover-style-underline]">
                <input id="dp_title[hover-style-underline]" name="dp_title[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_title['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
            </label>
        </label>
        <label class="dp_element-wrapper" for="dp_title[HoverColor]">
            <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
            <input id="dp_title[HoverColor]" name="dp_title[HoverColor]" type="text" class="dp_picker_color" value="<?php echo $dp_title['HoverColor']?$dp_title['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_title['HoverColor']?$dp_title['HoverColor']:'#A88F5C';?>">
        </label>
    </div>
</div>
</li>