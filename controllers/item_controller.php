<?php 
class ItemController
{
    public function index()
    {
        echo "1";
        //$itemList = Item::getAll();
        require_once("./views/item/index_item.php");
    }
    
} ?>