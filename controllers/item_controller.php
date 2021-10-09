<?php 
class ItemController
{
    public function index()
    {
        $itemList = Item::getAll();
        require_once("./views/item/Index_item.php");
    }
    
} ?>