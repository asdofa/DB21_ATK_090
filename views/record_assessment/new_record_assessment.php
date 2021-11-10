<form method="get" action="">
    <label>RECORDASSESSMENT_ID <input type="text" name="RECORDASSESSMENT_ID" /></label><br>
    <label>HOMEISOLATION_ID <select name="HOMEISO_ID">
            <?php foreach ($homeisolationList as $P)
            {
                echo "<option value = $P->HOMEISO_ID> $P->HOMEISO_ID</option>";
            }
            ?>
        </select>
    </label><br>
    <label>RECORDASSESSMENT_DAY<input type="date" name="RECORDASSESSMENT_DAY" /></label><br>
    <label>RECORD<input type="text" name="RECORD" /></label><br>
    <label>O2_DENSITY<input type="text" name="O2_DENSITY" /></label><br>
    <label>TEMP<input type="text" name="TEMP" /></label><br>
    <label>DANGER_LEVEL<input type="text" name="DANGER_LEVEL" /></label><br>
    
    <input type="hidden" name="controller" value="record_assessment" />
    <button type="submit" name="action" value="add">Save</button>
    <button type="submit" name="action" value="index">back</button>
</form>