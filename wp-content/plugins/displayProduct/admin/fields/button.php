<li id="displayProduct-button">
    <div class="dp_element-head">
    <?php echo dp_text('Button');?>
    <div class="arrow-down"></div>
</div>
<div class="dp_element-body">
    <label class="dp_element-wrapper for-table" for="dp_addtocartbutton[column_name]">
            <span class="dp_element-label">Column name : </span>
            <input type="text" name="dp_addtocartbutton[column_name]"  id="dp_addtocartbutton[column_name]" placeholder="Column name" value="<?php echo $dp_button['column_name'];?>"/>
    </label>
    <label class="dp_element-wrapper for-table" for="dp_addtocartbutton[column_width]">
            <span class="dp_element-label">Column width : </span>
            <input type="text" name="dp_addtocartbutton[column_width]"  id="dp_addtocartbutton[column_width]" placeholder="Column width Ex. 200px or 20%" value="<?php echo $dp_addtocartbutton['column_width'];?>"/>
    </label>
    <label class="dp_element-wrapper" for="dp_addtocartbutton[type]">
        <span class="dp_element-label">Add to cart button : </span>
        <select id="dp_addtocartbutton[type]" class="dp_addtocartbutton_type" name="dp_addtocartbutton[type]">
            <option value="default" <?php echo $dp_button['type']=='default'? $s:'';?>>Button default</option>
            <option value="buttonquantity" <?php echo $dp_button['type']=='buttonquantity'? $s:'';?>>Button &amp; Quantity</option>
            <option value="productDetail" <?php echo $dp_button['type']=='productDetail'? $s:'';?>>Product Detail</option>
            <option value="customButton" <?php echo $dp_button['type']=='customButton'? $s:'';?>>Custom Button</option>
            <option value="customText" <?php echo $dp_button['type']=='customText'? $s:'';?>>Custom Text: Call for price</option>
        </select>
    </label>
    <label class="dp_element-wrapper" for="dp_addtocartbutton[custom_url]">
        <span class="dp_element-label">URL : </span>
        <input type="text" name="dp_addtocartbutton[custom_url]" value="<?php echo $dp_button['custom_url'];?>" id="custom_url" placeholder="Button Custom URL"/>
    </label>
    <label class="dp_element-wrapper" for="dp_addtocartbutton[custom_text]">
        <span class="dp_element-label">Text : </span>
        <input type="text" name="dp_addtocartbutton[custom_text]" value="<?php echo $dp_button['custom_text'];?>"id="custom_text" placeholder="Button Custom Text"/>
    </label>
    <label class="dp_element-wrapper" for="dp_addtocartbutton[color]">
        <span class="dp_element-label">Color : </span>
        <input id="dp_addtocartbutton[color]" name="dp_addtocartbutton[color]" type="text" class="dp_picker_color" value="<?php echo $dp_button['color']?$dp_button['color']:'#fc5b5b';?>" data-default-color="<?php echo $dp_button['color']?$dp_button['color']:'#fc5b5b';?>"></td>
    </label>
    <label class="dp_element-wrapper" for="dp_addtocartbutton[hovercolor]">
        <span class="dp_element-label">Color : </span>
        <input id="dp_addtocartbutton[hovercolor]" name="dp_addtocartbutton[hovercolor]" type="text" class="dp_picker_color" value="<?php echo $dp_button['hovercolor']?$dp_button['hovercolor']:'#444444';?>" data-default-color="<?php echo $dp_button['hovercolor']?$dp_button['hovercolor']:'#444444';?>"></td>
    </label>
</div>
</li>