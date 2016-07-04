<li id="displayProduct-category">
    <div class="displayProduct-eneble">
        <div class="dp_element-head">
            <?php echo dp_text('Category');?>
            <div class="arrow-down"></div>
        </div>
        <div class="dp_element-body">
            <label class="dp_element-wrapper for-table" for="dp_category[column_name]">
                    <span class="dp_element-label">Column name : </span>
                    <input type="text" name="dp_category[column_name]"  id="dp_category[column_name]" placeholder="Column name" value="<?php echo $dp_category['column_name'];?>"/>
            </label>
            <label class="dp_element-wrapper for-table" for="dp_category[column_width]">
                    <span class="dp_element-label">Column width : </span>
                    <input type="text" name="dp_category[column_width]"  id="dp_category[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_category['column_width'];?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_category[type]">
                <span class="dp_element-label">Link to : </span>
                <select name="dp_category[type]" class="dp_element-category" id="dp_category[type]">
                    <option value="link" <?php echo $dp_category['type']=='link'? $s:'';?> >Link to Product</option>
                    <option value="none" <?php echo $dp_category['type']=='none'? $s:'';?>>none</option>
                    <option value="custom-link" <?php echo $dp_category['type']=='custom-link'? $s:'';?>>Custom Link</option>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_category[custom_url]">
                <span class="dp_element-label">URL : </span>
                <input type="text" name="dp_category[custom_url]"  id="dp_category[custom_url]" placeholder="http://url.com" value="<?php echo $dp_category['custom_url'];?>"/>
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_category[font-size]">
                <span class="dp_element-label">Font size : </span>
                <input type="number" name="dp_category[font-size]" id="dp_category[font-size]" placeholder="14"  min="1" value="<?php echo $dp_category['font-size']?$dp_category['font-size']:'14';?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_category[font-family]">
                <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
                <select id="dp_category[font-family]" name="dp_category[font-family]">
                        <option value="disable"><?php echo dp_text('Disable');?></option>
                        <?php $fontFamily=$dp_category['font-family']?$dp_category['font-family']:'arial';?>
                        <?php echo dp_fontfamily_option_init($fontFamily);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_category[weight]">
                <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
                <select id="dp_category[weight]" name="dp_category[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=$dp_category['weight']?$dp_category['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_category[style]">
                <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
                <label for="dp_category[style-italic]">
                    <input id="dp_category[style-italic]" name="dp_category[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_category['style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_category[style-underline]">
                    <input id="dp_category[style-underline]" name="dp_category[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_category['style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_category[color]">
                <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
                <input id="dp_category[color]" name="dp_category[color]" type="text" class="dp_picker_color" value="<?php echo $dp_category['color']?$dp_category['color']:'#444444';?>" data-default-color="<?php echo $dp_category['color']?$dp_category['color']:'#444444';?>">
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_category[weight]">
                <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
                <select id="dp_category[weight]" name="dp_category[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=$dp_category['weight']?$dp_category['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_category[hover-style]">
                <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
                <label for="dp_category[hover-style-italic]">
                    <input id="dp_category[hover-style-italic]" name="dp_category[hover-style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_category['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_category[hover-style-underline]">
                    <input id="dp_category[hover-style-underline]" name="dp_category[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_category['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_category[HoverColor]">
                <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
                <input id="dp_category[HoverColor]" name="dp_category[HoverColor]" type="text" class="dp_picker_color" value="<?php echo $dp_category['HoverColor']?$dp_category['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_category['HoverColor']?$dp_category['HoverColor']:'#A88F5C';?>">
            </label>
        </div>
    </div>
</li>