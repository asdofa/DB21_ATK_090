<form method="get" action="">
    <label>RECORDASSESSMENT_ID <input type="text" name="RECORDASSESSMENT_ID" value = "<?php echo $recordassessment->RECORDASSESSMENT_ID;?>"/></label><br>

    <label>HOMEISOLATION_ID <select name="HOMEISO_ID">
            <?php foreach ($homeisolationList as $P)
            {
                echo "<option value = $P->HOMEISO_ID> $P->HOMEISO_ID</option>";
            }
            ?>
        </select>
    </label><br>

    <label>RECORDASSESSMENT_DAY<input type="date" name="RECORDASSESSMENT_DAY"
        value = "<?php echo $recordassessment->RECORDASSESSMENT_DAY;?>"/>
    </label><br>

    <label>RECORD<input type="text" name="RECORD"
        value = "<?php echo $recordassessment->RECORD;?>"/>
    </label><br>

    <label>O2_DENSITY<input type="text" name="O2_DENSITY"
        value = "<?php echo $recordassessment->O2_DENSITY;?>"/>
    </label><br>

    <label>TEMP<input type="text" name="TEMP"
        value = "<?php echo $recordassessment->TEMP;?>"/>
    </label><br>

    <label>DANGER_LEVEL<input type="text" name="DANGER_LEVEL"
        value = "<?php echo $recordassessment->DANGER_LEVEL;?>"/>
    </label><br>

    <input type="hidden"name="controller"value="record_assessment"/>
    <input type="hidden" name="OLD_ID" value="<?php echo $recordassessment->RECORDASSESSMENT_ID; ?>"/>
    <button type= "submit"name="action"value="update">update</button>
    <button type= "submit"name="action"value="index">back</button>
</form>