<li id="displayProduct-meta">
    <div   class="displayProduct-eneble">
            <div class="dp_element-head">
                <?php echo dp_text('Custom_fields');?>
                <div class="arrow-down"></div>
            </div>
            <div class="dp_element-body">
                <label class="dp_element-wrapper for-table" for="dp_customfield[column_name]">
                        <span class="dp_element-label">Column name : </span>
                        <input type="text" name="dp_customfield[column_name]"  id="dp_customfield[column_name]" placeholder="Column name" value="<?php echo $dp_customfield['column_name'];?>"/>
                </label>
                <label class="dp_element-wrapper for-table" for="dp_customfield[column_width]">
                        <span class="dp_element-label">Column width : </span>
                        <input type="text" name="dp_customfield[column_width]"  id="dp_customfield[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_customfield['column_width'];?>"/>
                </label>
                <label class="dp_element-wrapper" for="dp_customfield[meta_key]">
                    <span class="dp_element-label">Custom field Key : </span>
                    <input type="text" name="dp_customfield[meta_key]" id="dp_customfield[meta_key]" value="<?php echo $dp_customfield['meta_key'];?>" placeholder="Ex.  _sku"/>
                </label>
                <label class="dp_element-wrapper" for="dp_customfield[type]">
                    <span class="dp_element-label">Custom field  Type : </span>
                    <select name="dp_customfield[type]" class="dp_element-metatype" id="dp_customfield[type]">
                        <option value="text" <?php echo $dp_customfield['type']=='text'? $s:'';?>>Text</option>
                        <option value="image" <?php echo $dp_customfield['type']=='image'? $s:'';?>>Image</option>
                        <option value="shortcode" <?php echo $dp_customfield['type']=='shortcode'? $s:'';?>>Shortcode</option>
                    </select>
                </label>
            </div>
    </div>
</li>