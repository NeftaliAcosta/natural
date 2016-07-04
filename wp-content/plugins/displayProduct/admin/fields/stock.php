<li id="displayProduct-stock">
    <div class="displayProduct-eneble">
        <div class="dp_element-head">
            <?php echo dp_text('Stock');?>
            <div class="arrow-down"></div>
        </div>
        <div class="dp_element-body">
            <label class="dp_element-wrapper for-table" for="dp_stock[column_name]">
                    <span class="dp_element-label">Column name : </span>
                    <input type="text" name="dp_stock[column_name]"  id="dp_stock[column_name]" placeholder="Column name" value="<?php echo $dp_stock['column_name'];?>"/>
            </label>
            <label class="dp_element-wrapper for-table" for="dp_sku[column_width]">
                    <span class="dp_element-label">Column width : </span>
                    <input type="text" name="dp_stock[column_width]"  id="dp_stock[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_stock['column_width'];?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[type]">
                <span class="dp_element-label">Link to : </span>
                <select name="dp_stock[type]" class="dp_element-stock" id="dp_stock[type]">
                    <option value="link" <?php echo $dp_stock['type']=='link'? $s:'';?> >Link to Product</option>
                    <option value="none" <?php echo $dp_stock['type']=='none'? $s:'';?>>none</option>
                    <option value="custom-link" <?php echo $dp_stock['type']=='custom-link'? $s:'';?>>Custom Link</option>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[custom_url]">
                <span class="dp_element-label">URL : </span>
                <input type="text" name="dp_stock[custom_url]"  id="dp_stock[custom_url]" placeholder="http://url.com" value="<?php echo $dp_stock['custom_url'];?>"/>
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_stock[font-size]">
                <span class="dp_element-label">Font size : </span>
                <input type="number" name="dp_stock[font-size]" id="dp_stock[font-size]" placeholder="14"  min="1" value="<?php echo $dp_stock['font-size']?$dp_stock['font-size']:'14';?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[font-family]">
                <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
                <select id="dp_stock[font-family]" name="dp_stock[font-family]">
                        <option value="disable"><?php echo dp_text('Disable');?></option>
                        <?php $fontFamily=$dp_stock['font-family']?$dp_stock['font-family']:'arial';?>
                        <?php echo dp_fontfamily_option_init($fontFamily);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[weight]">
                <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
                <select id="dp_stock[weight]" name="dp_stock[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=$dp_stock['weight']?$dp_stock['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[style]">
                <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
                <label for="dp_stock[style-italic]">
                    <input id="dp_stock[style-italic]" name="dp_stock[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_stock['style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_stock[style-underline]">
                    <input id="dp_stock[style-underline]" name="dp_stock[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_stock['style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[color]">
                <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
                <input id="dp_stock[color]" name="dp_stock[color]" type="text" class="dp_picker_color" value="<?php echo $dp_stock['color']?$dp_stock['color']:'#444444';?>" data-default-color="<?php echo $dp_stock['color']?$dp_stock['color']:'#444444';?>">
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_stock[weight]">
                <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
                <select id="dp_stock[weight]" name="dp_stock[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=$dp_stock['weight']?$dp_stock['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[hover-style]">
                <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
                <label for="dp_stock[hover-style-italic]">
                    <input id="dp_stock[hover-style-italic]" name="dp_stock[hover-style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_stock['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_stock[hover-style-underline]">
                    <input id="dp_stock[hover-style-underline]" name="dp_stock[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_stock['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_stock[HoverColor]">
                <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
                <input id="dp_stock[HoverColor]" name="dp_stock[HoverColor]" type="text" class="dp_picker_color" value="<?php echo $dp_stock['HoverColor']?$dp_stock['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_stock['HoverColor']?$dp_stock['HoverColor']:'#A88F5C';?>">
            </label>
        </div>
    </div>
</li>