<?php
$controllers = array(
    'pages'=>['home', 'error'],
    'item'=>['index','getAll','search','get','add','update','delete']
    'list_item'=>['index']
    'record_assessment'=>['index']
    /*ตัวย่าง
    'quotation'=>['index','newQuotation','addQuotation','search','updateForm','update','deleteConfirm','delete']
    */
);

function call($controller, $action){
	echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php"); 
	switch($controller)
	{
		case "pages":	
            $controller = new PagesController();
		break;
        case "item" : 	
            require_once("models/item.php");				
            $controller = new ItemController();
        break;
        /*ตัวย่าง
		case "quotation" :
            require_once("models/quotationModel.php");				
            require_once("models/staffModels.php");
            require_once("models/customerModels.php");
            $controller = new QuotationController();
        break;
		case "quotationDetail" :
            require_once("models/QuotationDetailModel.php");
            require_once("models/quotationModel.php");
            require_once("models/ProductStockModel.php");
            require_once("models/productModel.php");
            require_once("models/colorModel.php");
            $controller = new QuotationDetailController();
        break;
        */
	}

	$controller->{$action}();
}

if(array_key_exists($controller, $controllers)) 
{	if(in_array($action, $controllers [$controller]))
	{	call($controller, $action); }
	else
	{	call('pages', 'error'); }
}
else
{	call('pages', 'error');} 
?>