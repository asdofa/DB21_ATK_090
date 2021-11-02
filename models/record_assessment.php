<?php
    class Recordassessment
    {
        public $RECORDASSESSMENT_ID;
        public $HOMEISO_ID;
        public $PERSON_ID;
        public $PERSON_NAME;
        public $RECORDASSESSMENT_DAY;
        public $RECORD;
        public $O2_DENSITY;
        public $TEMP;
        public $DANGER_LEVEL;

        public function __construct($RECORDASSESSMENT_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL)
        {
            $this->RECORDASSESSMENT_ID = $RECORDASSESSMENT_ID;
            $this->HOMEISO_ID = $HOMEISO_ID;
            $this->PERSON_ID = $PERSON_ID;
            $this->PERSON_NAME = $PERSON_NAME;
            $this->RECORDASSESSMENT_DAY = $RECORDASSESSMENT_DAY;
            $this->RECORD = $RECORD;
            $this->O2_DENSITY = $O2_DENSITY;
            $this->TEMP = $TEMP;
            $this->DANGER_LEVEL = $DANGER_LEVEL;
        }

        public static function getall()
        {
            $recordassessmentList=[];

            require("connection_connect.php");

            $sql="SELECT * FROM RECORD_ASSESSMENT NATURAL JOIN HomeIsolation NATURAL JOIN Person";
            $result=$conn->query($sql);

            while($my_row = $result->fetch_assoc())
            {
                $RECORDASSESSMENT_ID=$my_row[RA_ID];
                $HOMEISO_ID=$my_row[HomeIso_ID];
                $PERSON_ID=$my_row[PS_id];
                $PERSON_NAME=$my_row[PS_name];
                $RECORDASSESSMENT_DAY=$my_row[RA_DAY];
                $RECORD=$my_row[RECORD];
                $O2_DENSITY=$my_row[O2_DENSITY];
                $TEMP=$my_row[TEMP];
                $DANGER_LEVEL=$my_row[DANGER_LEVEL];
                $itemList[]=new Recordassessment($RECORDASSESSMENT_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL);
            }

            require("connection_close.php");

            return $recordassessmentList;
        }

        public static function search($key)
        {
            $recordassessmentList=[];

            require("connection_connect.php");

            $sql = "SELECT * FROM RECORD_ASSESSMENT NATURAL JOIN HomeIsolation NATURAL JOIN Person 
            WHERE( RA_ID like '%$key%' or HomeIso_ID like '%$key%' or PS_id like '%$key%' or PS_name like '%$key%' or RA_DAY like '%$key%' or RECORD like '%$key%' 
            or O2_DENSITY like '%$key%' or TEMP like '%$key%' or DANGER_LEVEL like '%$key%' ) ";

            $result = $conn->query($sql);

            while ($my_row = $result->fetch_assoc())
            {
                $RECORDASSESSMENT_ID=$my_row[RA_ID];
                $HOMEISO_ID=$my_row[HomeIso_ID];
                $PERSON_ID=$my_row[PS_id];
                $PERSON_NAME=$my_row[PS_name];
                $RECORDASSESSMENT_DAY=$my_row[RA_DAY];
                $RECORD=$my_row[RECORD];
                $O2_DENSITY=$my_row[O2_DENSITY];
                $TEMP=$my_row[TEMP];
                $DANGER_LEVEL=$my_row[DANGER_LEVEL];
                $itemList[]=new Recordassessment($RECORDASSESSMENT_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL);
            }

            require("connection_close.php");

            return $recordassessmentList;
        }

        public static function get($RECORDASSESSMENT_ID)
        {
            require("connection_connect.php");

            $sql = "SELECT * FROM RECORD_ASSESSMENT NATURAL JOIN HomeIsolation NATURAL JOIN Person WHERE RA_ID = '$RECORDASSESSMENT_ID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();

            $RECORDASSESSMENT_ID=$my_row[RA_ID];
            $HOMEISO_ID=$my_row[HomeIso_ID];
            $PERSON_ID=$my_row[PS_id];
            $PERSON_NAME=$my_row[PS_name];
            $RECORDASSESSMENT_DAY=$my_row[RA_DAY];
            $RECORD=$my_row[RECORD];
            $O2_DENSITY=$my_row[O2_DENSITY];
            $TEMP=$my_row[TEMP];
            $DANGER_LEVEL=$my_row[DANGER_LEVEL];

            require("connection_close.php");
            
            return new Recordassessment($RECORDASSESSMENT_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL);

        }

        public static function add($RECORDASSESSMENT_ID,$HOMEISO_ID,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL)
        {
            require("connection_connect.php");

            $sql = "INSERT INTO `RECORD_ASSESSMENT` (`RA_ID`,`HomeIso_ID`,`RA_DAY`,`RECORD`,`O2_DENSITY`,`TEMP`,`DANGER_LEVEL`) 
            VALUES ('$RECORDASSESSMENT_ID','$HOMEISO_ID','$RECORDASSESSMENT_DAY','$RECORD','$O2_DENSITY','$TEMP','$DANGER_LEVEL')";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("add success $result row");
            
        }
        public static function update($RECORDASSESSMENT_ID,$HOMEISO_ID,$RECORDASSESSMENT_DAY,$RECORD,$O2_DENSITY,$TEMP,$DANGER_LEVEL,$OLD_ID)
        {
            require("connection_connect.php");

            $sql = "UPDATE `RECORD_ASSESSMENT` SET `RA_ID` = '$RECORDASSESSMENT_ID' ,`HomeIso_ID` = '$HOMEISO_ID' ,`RA_DAY` = '$RECORDASSESSMENT_DAY' ,
            `RECORD` = '$RECORD' ,`O2_DENSITY` = '$O2_DENSITY' ,`TEMP` = '$TEMP' ,`DANGER_LEVEL` = '$DANGER_LEVEL' WHERE RA_ID = '$OLD_ID' ";

            $result = $conn->query($sql);

            require("connection_close.php");

            return("update success $result row");

        }
        public static function delete($id)
        {
            require("connection_connect.php");
            
            $sql = "DELETE FROM RECORD_ASSESSMENT WHERE RA_ID = '$id'";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("update success $result row");
            
        }
    }
?>