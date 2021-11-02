<table border = 1>
<tr>
    <td>LIST_ITEM_ID</td>
    <td>HOMEISOLATION_ID</td>
    <td>PERSON_ID</td>
    <td>PERSON_NAME</td>
    <td>ITEM_ID</td>
    <td>ITEM_NAME</td>
    <td>ITEM_QTY</td>
    <td>ITEM_CLASSIFIER</td>
    <td>DAY_REQUEST</td>
    <td>UPDATE</td>
    <td>DELETE</td>
</tr>

<br /> 
    <p>นาย วัชรศักดิ์ ชื่นชม 6220503341</p>
<br /> 
    Add <a href=?controller=list_item&action=new>click</a><br>
<br/>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="list_item"/>
    <button type="submit" name="action" value="search">
    Search</button>
</form>

<?php foreach($listitemList as $listitem)
    {
        echo "<tr>
        <td>$listitem->LIST_ITEM_ID</td>
        <td>$listitem->HOMEISO_ID</td>
        <td>$listitem->PERSON_ID</td>
        <td>$listitem->PERSON_NAME</td>
        <td>$listitem->ITEM_ID</td>
        <td>$listitem->ITEM_NAME</td>
        <td>$listitem->ITEM_QTY</td>
        <td>$listitem->ITEM_CLASSIFIER</td>
        <td>$listitem->DAY_REQUEST</td>
        <td><a href=?controller=list_item&action=updateform&LIST_ITEM_ID=$listitem->LIST_ITEM_ID>update</a></td>
        <td><a href=?controller=list_item&action=deleteconfirm&LIST_ITEM_ID=$listitem->LIST_ITEM_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>