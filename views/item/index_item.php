<table border = 1>
<tr>
    <td>ITEM_ID</td>
    <td>ITEM_NAME</td>
    <td>ITEM_CLASSIFIER</td>
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
        echo"<tr>
        <td>$item->ITEM_ID</td>
        <td>$item->ITEM_NAME</td>
        <td>$item->ITEM_CLASSIFIER</td>
        <td><a href=?controller=rate&action=updateFormRate&RATE_ID=$rate->RATE_ID>update</a></td>
        <td><a href=?controller=rate&action=deleteRateConfirm&RATE_ID=$rate->RATE_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>