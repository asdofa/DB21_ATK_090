x<?php 
class RecordassessmentController
{
    public function index()
    {
        $recordassessmentList = Recordassessment::getall();
        require_once("./views/record_assessment/index_record_assessment.php");
    }
    public function search()
    {
        $key=$_GET['key'];
        $recordassessmentList = Recordassessment::search($key);
        require_once("./views/record_assessment/index_record_assessment.php");
    }
    public function new()
    {
        require_once("./views/record_assessment/new_record_assessment.php");
    }
    public function add()
    {
        $RECORDASSESSMENT_ID = $_GET['RECORDASSESSMENT_ID'];
        $HOMEISO_ID = $_GET['HOMEISO_ID'];
        $RECORDASSESSMENT_DAY = $_GET['RECORDASSESSMENT_DAY'];
        $RECORD = $_GET['RECORD'];
        $O2_DENSITY = $_GET['O2_DENSITY'];
        $TEMP = $_GET['TEMP'];
        $DANGER_LEVEL = $_GET['DANGER_LEVEL'];
        Recordassessment::add($RECORDASSESSMENT_ID,$HOMEISO_ID,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL);
        RecordassessmentController::index();
    }
    public function updateform()
    {
        $ID=$_GET['RECORDASSESSMENT_ID'];
        $recordassessment = Recordassessment::get($ID);
        $homeisolationList = Homeisolation::getall();
        require_once("./views/record_assessment/update_record_assessment.php");
    }

    public function update()
    {
        $RECORDASSESSMENT_ID = $_GET['RECORDASSESSMENT_ID'];
        $HOMEISO_ID = $_GET['HOMEISO_ID'];
        $RECORDASSESSMENT_DAY = $_GET['RECORDASSESSMENT_DAY'];
        $RECORD = $_GET['RECORD'];
        $O2_DENSITY = $_GET['O2_DENSITY'];
        $TEMP = $_GET['TEMP'];
        $DANGER_LEVEL = $_GET['DANGER_LEVEL'];

        Recordassessment::update($RECORDASSESSMENT_ID,$HOMEISO_ID,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL,$OLD_ID);
        RecordassessmentController::index();
    }
    public function deleteconfirm()
    {
        $ID = $_GET['RECORDASSESSMENT_ID'];
        $recordassessment = Recordassessment::get($ID);
        echo $ID ;
        require_once("./views/record_assessment/delete_record_assessment.php");
    }
    public function delete()
    {
        $ID=$_GET['RECORDASSESSMENT_ID'];
        Recordassessment::delete($ID);
        RecordassessmentController::index();
    }
    
} 
?>