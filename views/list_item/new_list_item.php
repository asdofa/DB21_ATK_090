x<form method="get" action="">
    <label>ID <input type="text" name="LIST_ITEM_ID" /></label><br>
    <label>HOMEISOLATION_ID <select name="HOMEISO_ID">
            <?php foreach ($homeisolationList as $P)
            {
                echo "<option value = $P->HOMEISO_ID> $P->HOMEISO_ID</option>";
            }
            ?>
        </select>
    </label><br>
    <label>ITEM_ID <select name="ITEM_ID">
            <?php foreach ($itemList as $P)
            {
                echo "<option value = $P->ITEM_ID> $P->ITEM_ID</option>";
            }
            ?>
        </select>
    </label><br>
    <label>ITEM_QTY<input type="text" name="ITEM_QTY" /></label><br>
    <label>DAY_REQUEST<input type="text" name="DAY_REQUEST" /></label><br>
    
    <input type="hidden" name="controller" value="listitem" />
    <button type="submit" name="action" value="add">Save</button>
    <button type="submit" name="action" value="index">back</button>
</form>