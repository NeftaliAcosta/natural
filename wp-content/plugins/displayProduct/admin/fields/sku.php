<li id="displayProduct-sku">
    <div class="displayProduct-eneble">
        <div class="dp_element-head">
            <?php echo dp_text('SKU');?>
            <div class="arrow-down"></div>
        </div>
        <div class="dp_element-body">
            <label class="dp_element-wrapper for-table" for="dp_sku[column_name]">
                    <span class="dp_element-label">Column name : </span>
                    <input type="text" name="dp_sku[column_name]"  id="dp_sku[column_name]" placeholder="Column name" value="<?php echo $dp_sku['column_name'];?>"/>
            </label>
            <label class="dp_element-wrapper for-table" for="dp_sku[column_width]">
                    <span class="dp_element-label">Column width : </span>
                    <input type="text" name="dp_sku[column_width]"  id="dp_sku[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_sku['column_width'];?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[type]">
                <span class="dp_element-label">Link to : </span>
                <select name="dp_sku[type]" class="dp_element-sku" id="dp_sku[type]">
                    <option value="link" <?php echo $dp_sku['type']=='link'? $s:'';?> >Link to Product</option>
                    <option value="none" <?php echo $dp_sku['type']=='none'? $s:'';?>>none</option>
                    <option value="custom-link" <?php echo $dp_sku['type']=='custom-link'? $s:'';?>>Custom Link</option>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[custom_url]">
                <span class="dp_element-label">URL : </span>
                <input type="text" name="dp_sku[custom_url]"  id="dp_sku[custom_url]" placeholder="http://url.com" value="<?php echo $dp_sku['custom_url'];?>"/>
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_sku[font-size]">
                <span class="dp_element-label">Font size : </span>
                <input type="number" name="dp_sku[font-size]" id="dp_sku[font-size]" placeholder="14"  min="1" value="<?php echo $dp_sku['font-size']?$dp_sku['font-size']:'14';?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[font-family]">
                <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
                <select id="dp_sku[font-family]" name="dp_sku[font-family]">
                        <option value="disable"><?php echo dp_text('Disable');?></option>
                        <?php $fontFamily=$dp_sku['font-family']?$dp_sku['font-family']:'arial';?>
                        <?php echo dp_fontfamily_option_init($fontFamily);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[weight]">
                <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
                <select id="dp_sku[weight]" name="dp_sku[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=$dp_sku['weight']?$dp_sku['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[style]">
                <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
                <label for="dp_sku[style-italic]">
                    <input id="dp_sku[style-italic]" name="dp_sku[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_sku['style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_sku[style-underline]">
                    <input id="dp_sku[style-underline]" name="dp_sku[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_sku['style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[color]">
                <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
                <input id="dp_sku[color]" name="dp_sku[color]" type="text" class="dp_picker_color" value="<?php echo $dp_sku['color']?$dp_sku['color']:'#444444';?>" data-default-color="<?php echo $dp_sku['color']?$dp_sku['color']:'#444444';?>">
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_sku[weight]">
                <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
                <select id="dp_sku[weight]" name="dp_sku[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=$dp_sku['weight']?$dp_sku['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[hover-style]">
                <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
                <label for="dp_sku[hover-style-italic]">
                    <input id="dp_sku[hover-style-italic]" name="dp_sku[hover-style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_sku['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_sku[hover-style-underline]">
                    <input id="dp_sku[hover-style-underline]" name="dp_sku[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_sku['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_sku[HoverColor]">
                <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
                <input id="dp_sku[HoverColor]" name="dp_sku[HoverColor]" type="text" class="dp_picker_color" value="<?php echo $dp_sku['HoverColor']?$dp_sku['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_sku['HoverColor']?$dp_sku['HoverColor']:'#A88F5C';?>">
            </label>
        </div>
    </div>
</li>