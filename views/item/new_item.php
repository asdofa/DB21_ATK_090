<form method="get" action="">
    <label>ID <input type="text" name="ITEM_ID" /></label><br>
    <label>NAME<input type="text" name="ITEM_NAME" /></label><br>
    <label>CLASSIFIER<input type="text" name="ITEM_CLASSIFIER" /></label><br>
    
    <input type="hidden" name="controller" value="item" />
    <button type="submit" name="action" value="add">Save</button>
    <button type="submit" name="action" value="index">back</button>
</form>