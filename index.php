<?php
    if(isset($_GET['controller']) && isset($_GET['action']))
    {
        $controller = $_GET['controller'];
        $action = $_GET['action'];
    }else{
        $controller= 'pages'; 
        $action = 'home';
    }
?>
<html>
<head></head>
<body>
    <br>
    [<a href="?controller=pages&action=home">Home </a>]
    [<a href="?controller=item&action=index">Item</a>]
    [<a href="?controller=list_item&action=index">List_Item</a>]
    [<a href="?controller=record_assessment&action=index">Record_Assessment</a>]
    <br>
    <?php echo "controller= ".$controller.", action=".$action; ?>
    <?php require_once("./routes.php"); 
        echo "1";
    ?>
</body>
</html>