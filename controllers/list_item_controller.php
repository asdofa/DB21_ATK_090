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
        $itemList = Item::getall();
        $homeisolationList = Homeisolation::getall();
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
        $listitem = Listitem::get($ID);
        $homeisolationList = Homeisolation::getall();
        $itemList = Item::getall();
        require_once("./views/list_item/update_list_item.php");
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
        $listitem = Listitem::get($ID);
        echo $ID ;
        require_once("./views/list_item/delete_list_item.php");
    }
    public function delete()
    {
        $ID=$_GET['LIST_ITEM_ID'];
        Listitem::delete($ID);
        ListitemController::index();
    }
    
} 
?>