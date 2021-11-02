<?php echo "<br> คุณยืนยันการกระทำนี้หรือไม่? <br>
            <br> $recordassessment->RECORDASSESSMENT_ID <br>"; ?>

<form method="get" action="">

    <input type="hidden" name="controller" value="record_assessment" />
    <input type="hidden" name="RECORDASSESSMENT_ID" value="<?php echo $recordassessment->RECORDASSESSMENT_ID; ?>" />
    <button type="submit" name="action" value="delete">delete</button>
    <button type="submit" name="action" value="index">back</button>

</form>