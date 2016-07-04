<li id="displayProduct-price">
    <div class="displayProduct-eneble">
        <div class="dp_element-head">
            <?php echo dp_text('Price');?>
            <div class="arrow-down"></div>
        </div>
        <div class="dp_element-body">
            <label class="dp_element-wrapper for-table" for="dp_price[column_name]">
                    <span class="dp_element-label">Column name : </span>
                    <input type="text" name="dp_price[column_name]"  id="dp_price[column_name]" placeholder="Column name" value="<?php echo $dp_price['column_name'];?>"/>
            </label>
            <label class="dp_element-wrapper for-table" for="dp_price[column_width]">
                    <span class="dp_element-label">Column width : </span>
                    <input type="text" name="dp_price[column_width]"  id="dp_price[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_price['column_width'];?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_price[type]">
                <span class="dp_element-label">Link to : </span>
                <select name="dp_price[type]" class="dp_element-price" id="dp_price[type]">
                    <option value="link" <?php echo !empty($dp_price['type'])=='link'? $s:'';?> >Link to Product</option>
                    <option value="none" <?php echo !empty($dp_price['type'])=='none'? $s:'';?>>none</option>
                    <option value="custom-link" <?php echo !empty($dp_price['type'])=='custom-link'? $s:'';?>>Custom Link</option>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_price[custom_url]">
                <span class="dp_element-label">URL : </span>
                <input type="text" name="dp_price[custom_url]"  id="dp_price[custom_url]" placeholder="http://url.com" value="<?php echo $dp_price['custom_url'];?>"/>
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_price[font-size]">
                <span class="dp_element-label">Font size : </span>
                <input type="number" name="dp_price[font-size]" id="dp_price[font-size]" placeholder="14"  min="1" value="<?php echo !empty($dp_price['font-size'])?$dp_price['font-size']:'14';?>"/>
            </label>
            <label class="dp_element-wrapper" for="dp_price[font-family]">
                <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
                <select id="dp_price[font-family]" name="dp_price[font-family]">
                        <option value="disable"><?php echo dp_text('Disable');?></option>
                        <?php $fontFamily=!empty($dp_price['font-family'])?$dp_price['font-family']:'arial';?>
                        <?php echo dp_fontfamily_option_init($fontFamily);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_price[weight]">
                <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
                <select id="dp_price[weight]" name="dp_price[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=!empty($dp_price['weight'])?$dp_price['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_price[style]">
                <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
                <label for="dp_price[style-italic]">
                    <input id="dp_price[style-italic]" name="dp_price[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_price['style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_price[style-underline]">
                    <input id="dp_price[style-underline]" name="dp_price[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_price['style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_price[color]">
                <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
                <input id="dp_price[color]" name="dp_price[color]" type="text" class="dp_picker_color" value="<?php echo $dp_price['color']?$dp_price['color']:'#444444';?>" data-default-color="<?php echo $dp_price['color']?$dp_price['color']:'#444444';?>">
            </label>
            <hr />
            <label class="dp_element-wrapper" for="dp_price[weight]">
                <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
                <select id="dp_price[weight]" name="dp_price[weight]">
                        <option value="normal">Normal</option>
                        <?php $weight=!empty($dp_price['weight'])?$dp_price['weight']:'arial';?>
                        <?php echo dp_weight_option_init($weight);?>
                </select>
            </label>
            <label class="dp_element-wrapper" for="dp_price[hover-style]">
                <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
                <label for="dp_price[hover-style-italic]">
                    <input id="dp_price[hover-style-italic]" name="dp_price[hover-style-italic]" type="checkbox" value="italic" <?php echo  !empty($dp_price['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
                </label>
                <label for="dp_price[hover-style-underline]">
                    <input id="dp_price[hover-style-underline]" name="dp_price[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_price['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
                </label>
            </label>
            <label class="dp_element-wrapper" for="dp_price[HoverColor]">
                <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
                <input id="dp_price[HoverColor]" name="dp_price[HoverColor]" type="text" class="dp_picker_color" value="<?php echo !empty($dp_price['HoverColor'])?$dp_price['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_price['HoverColor']?$dp_price['HoverColor']:'#A88F5C';?>">
            </label>
        </div>
    </div>
</li>