<table border = 1>
<tr>
    <td>ITEM_ID</td>
    <td>ITEM_NAME</td>
    <td>ITEM_CLASSIFIER</td>
    <td>UPDATE</td>
    <td>DELETE</td>
</tr>

<br /> 
    <p>นาย วัชรศักดิ์ ชื่นชม 6220503341</p>
<br /> 
    Add <a href=?controller=item&action=new_item>click</a><br>
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
        <td><a href=?controller=item&action=update_item&ITEM_ID=$item->ITEM_ID>update</a></td>
        <td><a href=?controller=item&action=deleat_item&ITEM_ID=$item->ITEM_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>