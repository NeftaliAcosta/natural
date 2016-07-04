<li id="displayProduct-image">
<div   class="displayProduct-eneble">
    <div class="dp_element-head">
        <?php echo dp_text('Image');?>
        <div class="arrow-down"></div>
    </div>
    <div class="dp_element-body">
        <label class="dp_element-wrapper for-table" for="dp_image[column_name]">
                <span class="dp_element-label">Column name : </span>
                <input type="text" name="dp_image[column_name]"  id="dp_image[column_name]" placeholder="Column name" value="<?php echo $dp_image['column_name'];?>"/>
        </label>
        <label class="dp_element-wrapper for-table" for="dp_image[column_width]">
                <span class="dp_element-label">Column width : </span>
                <input type="text" name="dp_image[column_width]"  id="dp_image[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_image['column_width'];?>"/>
        </label>
        <label class="dp_element-wrapper" for="dp_image[type]">
            <span class="dp_element-label">Link to : </span>
            <select name="dp_image[type]" class="dp_element-image" id="">
                <option value="link" <?php echo $dp_image['type']=='link'? $s:'';?>>Link to Product</option>
                <option value="none" <?php echo $dp_image['type']=='none'? $s:'';?>>none</option>
                <option value="custom-link" <?php echo $dp_image['type']=='custom-link'? $s:'';?>>Custom Link</option>
            </select>
        </label>
        <label class="dp_element-wrapper" for="dp_image[custom_url]">
            <span class="dp_element-label">URL : </span>
            <input type="text" name="dp_image[custom_url]" id="dp_image[custom_url]" value="<?php echo $dp_image['custom_url']?$dp_image['custom_url']:'';?>" placeholder="http://url.com"/>
        </label>
        <label class="dp_element-wrapper" for="dp_image[hover_effect]">
                <span class="dp_element-label"><?php echo dp_text('Select_Thumbnail_Hover_Effect');?> : </span>
                <select id="dp_image[hover_effect]" name="dp_image[hover_effect]">
                        <option value="disable"><?php echo dp_text('Disable');?></option>
                        <?php echo dp_the_animation_option_init($dp_image['hover_effect']);?>
               </select>
        </label>
        <label class="dp_element-wrapper" for="dp_image[width]">
            <span class="dp_element-label"><?php echo dp_text('width');?> : </span>
            <input type="number" min="0" name="dp_image[width]" id="dp_image[width]" value="<?php echo $dp_image['width']?$dp_image['width']:'400';?>" placeholder="400"/>
        </label>
        <label class="dp_element-wrapper" for="dp_image[height]">
            <span class="dp_element-label"><?php echo dp_text('height');?> : </span>
            <input type="number"  min="0" name="dp_image[height]" id="dp_image[height]" value="<?php echo $dp_image['height']?$dp_image['height']:'400';?>" placeholder="400"/>
        </label>
        <label class="dp_element-wrapper" for="dp_image[crop]">
            <span class="dp_element-label"><?php echo dp_text('Crop');?> : </span>
            <select id="dp_image[crop]" name="dp_image[crop]">
                    <option value="1" <?php echo !empty($dp_image['crop'])=='1'? $s:'';?>><?php echo dp_text('Crop');?></option>
                    <option value="0" <?php echo !empty($dp_image['crop'])=='0'? $s:'';?>><?php echo dp_text('Disable');?></option>
            </select>
        </label>
    </div>
</div>
</li>