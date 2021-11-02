<?php echo "<br> คุณยืนยันการกระทำนี้หรือไม่? <br>
            <br> $listitem->LIST_ITEM_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="listitem" />
    <input type="hidden" name="LIST_ITEM_ID" value="<?php echo $listitem->LIST_ITEM_ID; ?>" />
    <button type="submit" name="action" value="delete">delete</button>
    <button type="submit" name="action" value="index">back</button>

</form>