x<?php echo "<br> คุณยืนยันการกระทำนี้หรือไม่? <br>
            <br> $item->ITEM_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="item" />
    <input type="hidden" name="ITEM_ID" value="<?php echo $item->ITEM_ID; ?>" />
    <button type="submit" name="action" value="ITEM_ID">delete</button>
    <button type="submit" name="action" value="index">back</button>

</form>
