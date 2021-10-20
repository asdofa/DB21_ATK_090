<?php

$controllers = array(
    'pages'=>['home', 'error'],
    'item'=>['index','search','new','add','updateform','update','deleteconfirm','delete'],
    'list_item'=>['index','getall','search','get','add','update','delete'],
    'record_assessment'=>['index','getall','search','get','add','update','delete']);

function call($controller, $action){
	echo "routes to ".$controller."-".$action."<br>";
	require_once("./controllers/" .$controller."_controller.php");
	switch($controller)
	{
		case "pages":   echo "hi";
						$controller = new PagesController();
						break;
        case "item" : 	echo "hi";
            			require_once("models/item.php");				
            			$controller = new ItemController();
        				break;
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