<?php 
class ItemController
{
    public function index()
    {
        echo "1";
        $itemList = Item::getall();
        require_once("./views/item/index_item.php");
    }
    
} ?>