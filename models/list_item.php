<?php
    class ListItem
    {
        public $LIST_ITEM_ID;
        public $HOMEISO_ID;
        public $PERSON_ID;
        public $PERSON_NAME;
        public $ITEM_ID;
        public $ITEM_NAME;
        public $ITEM_QTY;
        public $ITEM_CLASSIFIER;
        public $DAY_REQUEST;

        public function __construct($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST)
        {
            $this->LIST_ITEM_ID = $LIST_ITEM_ID;
            $this->HOMEISO_ID = $HOMEISO_ID;
            $this->PERSON_ID = $PERSON_ID;
            $this->PERSON_NAME = $PERSON_NAME;
            $this->ITEM_ID = $ITEM_ID;
            $this->ITEM_NAME = $ITEM_NAME;
            $this->ITEM_QTY = $ITEM_QTY;
            $this->ITEM_CLASSIFIER = $ITEM_CLASSIFIER;
            $this->DAY_REQUEST = $DAY_REQUEST;
        }

        public static function getall()
        {
            $listitemList=[];

            require("connection_connect.php");

            $sql="SELECT * FROM LIST_ITEM NATURAL JOIN ITEM NATURAL JOIN HomeIsolation NATURAL JOIN Person";
            $result=$conn->query($sql);

            while($my_row = $result->fetch_assoc())
            {
                $LIST_ITEM_ID=$my_row[LIST_ITEM_ID];
                $HOMEISO_ID=$my_row[HomeIso_ID];
                $PERSON_ID=$my_row[PS_id];
                $PERSON_NAME=$my_row[PS_name];
                $ITEM_ID=$my_row[ITEM_ID];
                $ITEM_NAME=$my_row[ITEM_NAME];
                $ITEM_QTY=$my_row[ITEM_QTY];
                $ITEM_CLASSIFIER=$my_row[ITEM_CLASSIFIER];
                $DAY_REQUEST=$my_row[DAY_REQUEST];
                $listitemList[]=new ListItem($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST);
            }

            require("connection_close.php");

            return $listitemList;
        }

        public static function search($key)
        {
            $listitemList=[];

            require("connection_connec.php");

            $sql = "SELECT * FROM LIST_ITEM NATURAL JOIN ITEM NATURAL JOIN HomeIsolation NATURAL JOIN Person 
            WHERE( LIST_ITEM_ID LIKE '%$key%' or HomeIso_ID LIKE '%$key%' or PS_id LIKE '%$key%' or PS_name LIKE '%$key%' 
            or ITEM_ID LIKE '%$key%' or ITEM_NAME LIKE '%$key%' or ITEM_QTY LIKE '%$key%' or ITEM_CLASSIFIER LIKE '%$key%' 
            or DAY_REQUEST LIKE '%$key%') ";
            $result = $conn->query($sql);

            while ($my_row = $result->fetch_assoc())
            {
                $LIST_ITEM_ID=$my_row[LIST_ITEM_ID];
                $HOMEISO_ID=$my_row[HomeIso_ID];
                $PERSON_ID=$my_row[PS_id];
                $PERSON_NAME=$my_row[PS_name];
                $ITEM_ID=$my_row[ITEM_ID];
                $ITEM_NAME=$my_row[ITEM_NAME];
                $ITEM_QTY=$my_row[ITEM_QTY];
                $ITEM_CLASSIFIER=$my_row[ITEM_CLASSIFIER];
                $DAY_REQUEST=$my_row[DAY_REQUEST];
                $listitemList[]=new ListItem($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST);
            }

            require("connection_close.php");

            return $listitemList;
        }

        public static function get($ITEM_ID)
        {
            require("connection_connect.php");

            $sql = "SELECT * FROM LIST_ITEM NATURAL JOIN ITEM NATURAL JOIN HomeIsolation NATURAL JOIN Person WHERE ITEM_ID = '$ITEM_ID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();

            $LIST_ITEM_ID=$my_row[LIST_ITEM_ID];
            $HOMEISO_ID=$my_row[HomeIso_ID];
            $PERSON_ID=$my_row[PS_id];
            $PERSON_NAME=$my_row[PS_name];
            $ITEM_ID=$my_row[ITEM_ID];
            $ITEM_NAME=$my_row[ITEM_NAME];
            $ITEM_QTY=$my_row[ITEM_QTY];
            $ITEM_CLASSIFIER=$my_row[ITEM_CLASSIFIER];
            $DAY_REQUEST=$my_row[DAY_REQUEST];

            require("connection_close.php");
            
            return new ListItem($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST);

        }

        public static function add($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST)
        {
            require("connection_connect.php");

            $sql = "INSERT INTO `LIST_ITEM` (`LIST_ITEM_ID`,`HomeIso_ID`,`PS_id`,`PS_name`,`ITEM_ID`,
            `ITEM_NAME`,`ITEM_QTY`,`ITEM_CLASSIFIER`,`DAY_REQUEST`) 
            VALUES ('$LIST_ITEM_ID','$HOMEISO_ID','$PERSON_ID','$PERSON_NAME','$ITEM_ID',
            '$ITEM_NAME','$ITEM_QTY','$ITEM_CLASSIFIER''$DAY_REQUEST')";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("add success $result row");
            
        }
        public static function update($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$OLD_ID)
        {
            require("connection_connect.php");

            $sql = "UPDATE `LIST_ITEM` SET `LIST_ITEM_ID` = '$LIST_ITEM_ID' ,`HomeIso_ID` = '$HomeIso_ID' ,`PS_id` = '$PERSON_ID' ,
            `PS_name` = '$PERSON_NAME' ,`ITEM_ID` = '$ITEM_ID' ,`ITEM_NAME` = '$ITEM_NAME' ,`ITEM_QTY` = '$ITEM_QTY' ,
            `ITEM_CLASSIFIER` = '$ITEM_CLASSIFIER' ,`DAY_REQUEST` = '$DAY_REQUEST'  WHERE ITEM_ID = '$OLD_ID' ";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("update success $result row");

        }
        public static function delete($id)
        {
            require("connection_connect.php");
            
            $sql = "DELETE FROM LIST_ITEM WHERE LIST_ITEM_ID = '$id'";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("update success $result row");
        }
    }
?>