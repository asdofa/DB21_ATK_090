<?php 
class ListitemController
{
    public function index()
    {
        $listitemList = Listitem::getall();
        require_once("./views/list_item/index_list_item.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $listitemList = Listitem::search($key);
        require_once("./views/list_item/index_list_item.php");
    }
    public function new()
    {
        require_once("./views/list_item/new_list_item.php");
    }
    public function add()
    {
        $LIST_ITEM_ID = $_GET['LIST_ITEM_ID'];
        $HOMEISO_ID = $_GET['HOMEISO_ID'];
        $ITEM_ID = $_GET['ITEM_ID'];
        $ITEM_QTY = $_GET['ITEM_QTY'];
        $DAY_REQUEST = $_GET['DAY_REQUEST'];
        Listitem::add($LIST_ITEM_ID,$HOMEISO_ID,$ITEM_ID,$ITEM_QTY,$DAY_REQUEST);
        ListitemController::index();
    }
    public function updateform()
    {
        $ID=$_GET['LIST_ITEM_ID'];
        $item = Listitem::get($ID);
        $itemList = Listitem::getall();
        require_once("./views/list_item/update_list_iem.php");
    }

    public function update()
    {
        $LIST_ITEM_ID = $_GET['LIST_ITEM_ID'];
        $HOMEISO_ID = $_GET['HOMEISO_ID'];
        $ITEM_ID = $_GET['ITEM_ID'];
        $ITEM_QTY = $_GET['ITEM_QTY'];
        $DAY_REQUEST = $_GET['DAY_REQUEST'];
        $OLD_ID = $_GET['OLD_ID'];

        Listitem::update($LIST_ITEM_ID,$HOMEISO_ID,$ITEM_ID,$ITEM_QTY,$DAY_REQUEST,$OLD_ID);
        ListitemController::index();
    }
    public function deleteconfirm()
    {
        $ID = $_GET['LIST_ITEM_ID'];
        $item = Item::get($ID);
        echo $ID ;
        require_once("./views/item/delete_item.php");
    }
    public function delete()
    {
        $ID=$_GET['ITEM_ID'];
        Listitem::delete($ID);
        ListitemController::index();
    }
    
} 
?>