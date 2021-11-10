<form method="get" action="">
    <label>LIST_ITEM_ID <input type="text" name="LIST_ITEM_ID" value = "<?php echo $listitem->LIST_ITEM_ID;?>"/></label><br>

    <label>HOMEISOLATION_ID <select name="HOMEISO_ID">
        <?php foreach($homeisolationList as $P) {
            echo "<option value = $P->HOMEISO_ID";
            if($P->HOMEISO_ID==$listitem->HOMEISO_ID){echo " selected='selected'";}
            echo ">$P->HOMEISO_ID</option>";}
        ?>
    </select></label><br> 

    <label>ITEM_ID  <select name="ITEM_ID">
        <?php foreach($itemList as $i) {
            echo "<option value = $i->ITEM_ID";
            if($i->ITEM_ID==$listitem->ITEM_ID){echo " selected='selected'";}
            echo ">$i->ITEM_NAME</option>";}
        ?>
    </select></label><br> 

    <label>ITEM_QTY<input type="text" name="ITEM_QTY"
        value = "<?php echo $listitem->ITEM_QTY;?>"/>
    </label><br>

    <label>DAY_REQUEST<input type="date" name="DAY_REQUEST"
        value = "<?php echo $listitem->DAY_REQUEST;?>"/>
    </label><br>

    <input type="hidden"name="controller"value="list_item"/>
    <input type="hidden" name="OLD_ID" value="<?php echo $listitem->LIST_ITEM_ID; ?>"/>
    <button type= "submit"name="action"value="update">update</button>
    <button type= "submit"name="action"value="index">back</button>
</form>