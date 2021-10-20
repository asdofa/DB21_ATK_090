<?php 
class ItemController
{
    public function index()
    {
        $itemList = Item::getall();
        require_once("./views/item/index_item.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $itemList = Item::search($key);
        require_once("./views/item/index_item.php");
    }
    public function new()
    {
        require_once("./views/item/new_item.php");
    }
    public function add()
    {
        $ITEM_ID = $_GET['ITEM_ID'];
        $ITEM_NAME = $_GET['ITEM_NAME'];
        $ITEM_CLASSIFIER = $_GET['ITEM_CLASSIFIER'];
        Item::add($ITEM_ID,$ITEM_NAME,$ITEM_CLASSIFIER);
        ItemController::index();
    }
    public function updateform()
    {
        $ID=$_GET['ITEM_ID'];
        $item = Item::get($ID);
        $itemList = Item::getall();
        require_once("./views/item/update_item.php");
    }

    public function update()
    {

        $ITEM_ID = $_GET['ITEM_ID'];
        $ITEM_NAME = $_GET['ITEM_NAME'];
        $ITEM_CLASSIFIER = $_GET['ITEM_CLASSIFIER'];

        Item::update($ITEM_ID,$ITEM_NAME,$ITEM_CLASSIFIER);
        ItemController::index();
    }
    public function deleteconfirm()
    {
        $ID = $_GET['ITEM_ID'];
        $item = Item::get($ID);
        echo $ID ;
        require_once("./views/item/delete_item.php");
    }
    public function delete()
    {
        $ID=$_GET['ITEM_ID'];
        Item::delete($ID);
        ItemController::index();
    }
    
} ?>