x<form method="get" action="">
    <label>ID <input type="text" name="ITEM_ID" value = "<?php echo $item->ITEM_ID;?>"/></label><br>

    <label>NAME<input type="text" name="ITEM_NAME"
        value = "<?php echo $item->ITEM_NAME;?>"/></label><br>

    <label>SCEEN<input type="text" name="ITEM_NAME"
        value = "<?php echo $item->ITEM_NAME;?>"/></label><br>

    
    <input type="hidden"name="controller"value="item"/>
    <input type="hidden" name="ORATE_ID" value="<?php echo $item->ITEM_ID; ?>"/>
    <button type= "submit"name="action"value="update">update</button>
    <button type= "submit"name="action"value="index">back</button>
</form>