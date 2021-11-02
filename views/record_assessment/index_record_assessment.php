<table border = 1>
<tr>
    <td>RECORDASSESSMENT_ID</td>
    <td>HOMEISOLATION_ID</td>
    <td>PERSON_ID</td>
    <td>PERSON_NAME</td>
    <td>RECORDASSESSMENT_DAY</td>
    <td>RECORD</td>
    <td>O2_DENSITY</td>
    <td>TEMP</td>
    <td>DANGER_LEVEL</td>
    <td>UPDATE</td>
    <td>DELETE</td>
</tr>

<br /> 
    <p>นาย วัชรศักดิ์ ชื่นชม 6220503341</p>
<br /> 
    Add <a href=?controller=recordassessment&action=new>click</a><br>
<br/>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="recordassessment"/>
    <button type="submit" name="action" value="search">
    Search</button>
</form>

<?php foreach($recordassessmentList as $recordassessment)
    {
        echo "<tr>
        <td>$recordassessment->RECORDASSESSMENT_ID</td>
        <td>$recordassessment->HOMEISO_ID</td>
        <td>$recordassessment->PERSON_ID</td>
        <td>$recordassessment->PERSON_NAME</td>
        <td>$recordassessment->RECORDASSESSMENT_DAY</td>
        <td>$recordassessment->RECORD</td>
        <td>$recordassessment->O2_DENSITY</td>
        <td>$recordassessment->TEMP</td>
        <td>$recordassessment->DANGER_LEVEL</td>
        <td><a href=?controller=recordassessment&action=updateform&LIST_ITEM_ID=$recordassessment->LIST_ITEM_ID>update</a></td>
        <td><a href=?controller=recordassessment&action=deleteconfirm&LIST_ITEM_ID=$recordassessment->LIST_ITEM_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>