<?php

$controllers = array(
    'pages'=>['home', 'error'],
    'item'=>['index','search','new','add','updateform','update','deleteconfirm','delete'],
    'list_item'=>['index','search','new','add','updateform','update','deleteconfirm','delete'],
    'record_assessment'=>['index','search','new','add','updateform','update','deleteconfirm','delete']
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
		case "list_item" :
			require_once("models/list_item.php");
            $controller = new ListItemController();
        break;
		case "record_assessment" :
			require_once("models/record_assessment.php");
            $controller = new RecordAssessmentController();
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