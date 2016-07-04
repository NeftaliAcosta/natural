<li id="displayProduct-excerpt">
<div  class="displayProduct-eneble">
    <div class="dp_element-head">
        <?php echo dp_text('ProductShortDescription');?>
        <div class="arrow-down"></div>
    </div>
    <div class="dp_element-body">
        <label class="dp_element-wrapper for-table" for="dp_excerpt[column_name]">
                <span class="dp_element-label">Column name : </span>
                <input type="text" name="dp_excerpt[column_name]"  id="dp_excerpt[column_name]" placeholder="Column name" value="<?php echo $dp_excerpt['column_name'];?>"/>
        </label>
        <label class="dp_element-wrapper for-table" for="dp_excerpt[column_width]">
                <span class="dp_element-label">Column width : </span>
                <input type="text" name="dp_excerpt[column_width]"  id="dp_excerpt[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_excerpt['column_width'];?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[lenght]">
            <span class="dp_element-label">Char Limit : </span>
            <input type="number" name="dp_excerpt[lenght]" id="dp_excerpt[lenght]" placeholder="100" value="<?php echo $dp_excerpt['lenght']?$dp_excerpt['lenght']:'';?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[type]">
            <span class="dp_element-label">Link to : </span>
            <select name="dp_excerpt[type]" class="dp_element-excerpt" id="dp_excerpt[type]">
                <option value="link" <?php echo $dp_excerpt['type']=='link'? $s:'';?> >Link to Product</option>
                <option value="none" <?php echo $dp_excerpt['type']=='none'? $s:'';?>>none</option>
                <option value="custom-link" <?php echo $dp_excerpt['type']=='custom-link'? $s:'';?>>Custom Link</option>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[custom_url]">
            <span class="dp_element-label">URL : </span>
            <input type="text" name="dp_excerpt[custom_url]"  id="dp_excerpt[custom_url]" placeholder="http://url.com" value="<?php echo $dp_excerpt['custom_url'];?>"/>
        </label>
        <hr />
        <label class="dp_element-wrapper" for="dp_excerpt[font-size]">
            <span class="dp_element-label">Font size : </span>
            <input type="number" name="dp_excerpt[font-size]" id="dp_excerpt[font-size]" placeholder="14"  min="1" value="<?php echo $dp_excerpt['font-size']?$dp_excerpt['font-size']:'14';?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[font-family]">
            <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
            <select id="dp_excerpt[font-family]" name="dp_excerpt[font-family]">
                    <option value="disable"><?php echo dp_text('Disable');?></option>
                    <?php $fontFamily=$dp_excerpt['font-family']?$dp_excerpt['font-family']:'arial';?>
                    <?php echo dp_fontfamily_option_init($fontFamily);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[weight]">
            <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
            <select id="dp_excerpt[weight]" name="dp_excerpt[weight]">
                    <option value="normal">Normal</option>
                    <?php $weight=$dp_excerpt['weight']?$dp_excerpt['weight']:'arial';?>
                    <?php echo dp_weight_option_init($weight);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[style]">
            <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
            <label for="dp_excerpt[style-italic]">
                <input id="dp_excerpt[style-italic]" name="dp_excerpt[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_excerpt['style-italic'])=='italic'? 'checked':'';?>> Italic
            </label>
            <label for="dp_excerpt[style-underline]">
                <input id="dp_excerpt[style-underline]" name="dp_excerpt[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_excerpt['style-underline'])=='underline'? 'checked':'';?>> Underline
            </label>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[color]">
            <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
            <input id="dp_excerpt[color]" name="dp_excerpt[color]" type="text" class="dp_picker_color" value="<?php echo $dp_excerpt['color']?$dp_excerpt['color']:'#444444';?>" data-default-color="<?php echo $dp_excerpt['color']?$dp_excerpt['color']:'#444444';?>">
        </label>
        <hr />
        <label class="dp_element-wrapper" for="dp_excerpt[weight]">
            <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
            <select id="dp_excerpt[weight]" name="dp_excerpt[weight]">
                    <option value="normal">Normal</option>
                    <?php $weight=$dp_excerpt['weight']?$dp_excerpt['weight']:'arial';?>
                    <?php echo dp_weight_option_init($weight);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[hover-style]">
            <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
            <label for="dp_excerpt[hover-style-italic]">
                <input id="dp_excerpt[hover-style-italic]" name="dp_excerpt[hover-style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_excerpt['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
            </label>
            <label for="dp_excerpt[hover-style-underline]">
                <input id="dp_excerpt[hover-style-underline]" name="dp_excerpt[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_excerpt['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
            </label>
        </label>
        <label class="dp_element-wrapper" for="dp_excerpt[HoverColor]">
            <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
            <input id="dp_excerpt[HoverColor]" name="dp_excerpt[HoverColor]" type="text" class="dp_picker_color" value="<?php echo $dp_excerpt['HoverColor']?$dp_excerpt['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_excerpt['HoverColor']?$dp_excerpt['HoverColor']:'#A88F5C';?>">
        </label>
    </div>
</div>
</li>