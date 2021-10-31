<table border = 1>
<tr>
    <td>LIST_ITEM_ID</td>
    <td>HOMEISO_ID</td>
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
    Add <a href=?controller=item&action=new>click</a><br>
<br/>

<form method="get"action="">
    <input type="text" name="key">
    <input type="hidden" name="controller" value="item"/>
    <button type="submit" name="action" value="search">
    Search</button>
</form>

<?php foreach($itemList as $item)
    {
        echo "<tr>
        <td>$item->ITEM_ID</td>
        <td>$item->ITEM_NAME</td>
        <td>$item->ITEM_CLASSIFIER</td>
        <td><a href=?controller=item&action=updateform&ITEM_ID=$item->ITEM_ID>update</a></td>
        <td><a href=?controller=item&action=deleteconfirm&ITEM_ID=$item->ITEM_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>