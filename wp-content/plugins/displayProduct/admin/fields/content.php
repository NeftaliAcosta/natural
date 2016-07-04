<li id="displayProduct-content">
<div  class="displayProduct-eneble">
    <div class="dp_element-head">
        <?php echo dp_text('ProductContent');?>
        <div class="arrow-down"></div>
    </div>
    <div class="dp_element-body">
        <label class="dp_element-wrapper for-table" for="dp_content[column_name]">
                <span class="dp_element-label">Column name : </span>
                <input type="text" name="dp_content[column_name]"  id="dp_content[column_name]" placeholder="Column name" value="<?php echo $dp_content['column_name'];?>"/>
        </label>
        <label class="dp_element-wrapper for-table" for="dp_content[column_width]">
                <span class="dp_element-label">Column width : </span>
                <input type="text" name="dp_content[column_width]"  id="dp_content[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_content['column_width'];?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_content[lenght]">
            <span class="dp_element-label">Char Limit : </span>
            <input type="number" name="dp_content[lenght]" id="dp_content[lenght]" placeholder="100" value="<?php echo $dp_content['lenght']?$dp_content['lenght']:'';?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_content[type]">
            <span class="dp_element-label">Link to : </span>
            <select name="dp_content[type]" class="dp_element-content" id="dp_content[type]">
                <option value="link" <?php echo $dp_content['type']=='link'? $s:'';?> >Link to Product</option>
                <option value="none" <?php echo $dp_content['type']=='none'? $s:'';?>>none</option>
                <option value="custom-link" <?php echo $dp_content['type']=='custom-link'? $s:'';?>>Custom Link</option>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_content[custom_url]">
            <span class="dp_element-label">URL : </span>
            <input type="text" name="dp_content[custom_url]"  id="dp_content[custom_url]" placeholder="http://url.com" value="<?php echo $dp_content['custom_url'];?>"/>
        </label>
        <hr />
        <label class="dp_element-wrapper" for="dp_content[font-size]">
            <span class="dp_element-label">Font size : </span>
            <input type="number" name="dp_content[font-size]" id="dp_content[font-size]" placeholder="14"  min="1" value="<?php echo $dp_content['font-size']?$dp_content['font-size']:'14';?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_content[font-family]">
            <span class="dp_element-label"><?php echo dp_text('FontFamily');?> : </span>
            <select id="dp_content[font-family]" name="dp_content[font-family]">
                    <option value="disable"><?php echo dp_text('Disable');?></option>
                    <?php $fontFamily=$dp_content['font-family']?$dp_content['font-family']:'arial';?>
                    <?php echo dp_fontfamily_option_init($fontFamily);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_content[weight]">
            <span class="dp_element-label"><?php echo dp_text('Weight');?> : </span>
            <select id="dp_content[weight]" name="dp_content[weight]">
                    <option value="normal">Normal</option>
                    <?php $weight=$dp_content['weight']?$dp_content['weight']:'arial';?>
                    <?php echo dp_weight_option_init($weight);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_content[style]">
            <span class="dp_element-label"><?php echo dp_text('Style');?> : </span>
            <label for="dp_content[style-italic]">
                <input id="dp_content[style-italic]" name="dp_content[style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_content['style-italic'])=='italic'? 'checked':'';?>> Italic
            </label>
            <label for="dp_content[style-underline]">
                <input id="dp_content[style-underline]" name="dp_content[style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_content['style-underline'])=='underline'? 'checked':'';?>> Underline
            </label>
        </label>
        <label class="dp_element-wrapper" for="dp_content[color]">
            <span class="dp_element-label"><?php echo dp_text('Color');?> : </span>
            <input id="dp_content[color]" name="dp_content[color]" type="text" class="dp_picker_color" value="<?php echo $dp_content['color']?$dp_content['color']:'#444444';?>" data-default-color="<?php echo $dp_content['color']?$dp_content['color']:'#444444';?>">
        </label>
        <hr />
        <label class="dp_element-wrapper" for="dp_content[weight]">
            <span class="dp_element-label">Hover <?php echo dp_text('Weight');?> : </span>
            <select id="dp_content[weight]" name="dp_content[weight]">
                    <option value="normal">Normal</option>
                    <?php $weight=$dp_content['weight']?$dp_content['weight']:'arial';?>
                    <?php echo dp_weight_option_init($weight);?>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_content[hover-style]">
            <span class="dp_element-label"><?php echo dp_text('HoverStyle');?> : </span>
            <label for="dp_content[hover-style-italic]">
                <input id="dp_content[hover-style-italic]" name="dp_content[hover-style-italic]" type="checkbox" value="italic" <?php echo !empty($dp_content['hover-style-italic'])=='italic'? 'checked':'';?>> Italic
            </label>
            <label for="dp_content[hover-style-underline]">
                <input id="dp_content[hover-style-underline]" name="dp_content[hover-style-underline]" type="checkbox" value="underline" <?php echo !empty($dp_content['hover-style-underline'])=='underline'? 'checked':'';?>> Underline
            </label>
        </label>
        <label class="dp_element-wrapper" for="dp_content[HoverColor]">
            <span class="dp_element-label"><?php echo dp_text('HoverColor');?> : </span>
            <input id="dp_content[HoverColor]" name="dp_content[HoverColor]" type="text" class="dp_picker_color" value="<?php echo $dp_content['HoverColor']?$dp_content['HoverColor']:'#A88F5C';?>" data-default-color="<?php echo $dp_content['HoverColor']?$dp_content['HoverColor']:'#A88F5C';?>">
        </label>
    </div>
</div>
</li>