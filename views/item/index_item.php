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


<?php foreach($rateList as $rate)
    {
        echo"<tr>
        <td>$rate->PROD_ID</td>
        <td>$rate->PROD_Name</td>
        <td>$rate->RATE_ID</td>
        <td>$rate->PROD_QTY</td>
        <td>$rate->QTY_Rate</td>
        <td>$rate->PROD_Price</td>
        <td>$rate->PROD_SCPrice</td>
        <td><a href=?controller=rate&action=updateFormRate&RATE_ID=$rate->RATE_ID>update</a></td>
        <td><a href=?controller=rate&action=deleteRateConfirm&RATE_ID=$rate->RATE_ID>delete</a></td>
        </tr>";
    }
    echo "</table>";
?>