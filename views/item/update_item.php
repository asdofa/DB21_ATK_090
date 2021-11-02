<form method="get" action="">
    <label>ID <input type="text" name="ITEM_ID" value = "<?php echo $item->ITEM_ID;?>"/></label><br>

    <label>NAME<input type="text" name="ITEM_NAME"
        value = "<?php echo $item->ITEM_NAME;?>"/></label><br>

    <label>ITEMCLASSIFIER<input type="text" name="ITEM_CLASSIFIER"
        value = "<?php echo $item->ITEM_CLASSIFIER;?>"/></label><br>

    
    <input type="hidden"name="controller"value="item"/>
    <input type="hidden" name="OLD_ID" value="<?php echo $item->ITEM_ID; ?>"/>
    <button type= "submit"name="action"value="update">update</button>
    <button type= "submit"name="action"value="index">back</button>
</form>