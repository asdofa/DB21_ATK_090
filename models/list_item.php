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
            $itemList=[];

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
                $itemList[]=new Item($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST);
            }

            require("connection_close.php");

            return $itemList;
        }

        public static function search($key)
        {
            $itemList=[];

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
                $itemList[]=new Item($LIST_ITEM_ID,$HOMEISO_ID,$PERSON_ID,$PERSON_NAME,$ITEM_ID,$ITEM_NAME,$ITEM_QTY,$ITEM_CLASSIFIER,$DAY_REQUEST);
            }

            require("connection_close.php");

            return $itemList;
        }

        public static function get($ITEM_ID)
        {
            require("connection_connect.php");

            $sql = "SELECT * FROM ITEM WHERE ITEM_ID = '$ITEM_ID' ";
            $result = $conn->query($sql);
            $my_row = $result->fetch_assoc();

            $ITEM_ID=$my_row[ITEM_ID];
            $ITEM_NAME=$my_row[ITEM_NAME];
            $ITEM_CLASSIFIER=$my_row[ITEM_CLASSIFIER];

            require("connection_close.php");
            
            return new Item($ITEM_ID,$ITEM_NAME,$ITEM_CLASSIFIER);

        }

        public static function add($ITEM_ID,$ITEM_NAME,$ITEM_CLASSIFIER)
        {
            require("connection_connect.php");

            $sql = "INSERT INTO `ITEM` (`ITEM_ID`,`ITEM_NAME`,`ITEM_CLASSIFIER`) VALUES ('$ITEM_ID','$ITEM_NAME','$ITEM_CLASSIFIER')";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("add success $result row");
            
        }
        public static function update($ITEM_ID,$ITEM_NAME,$ITEM_CLASSIFIER)
        {
            require("connection_connect.php");

            $sql = "UPDATE `ITEM` SET `ITEM_ID` = '$ITEM_ID' ,`ITEM_NAME` = '$ITEM_NAME' ,`ITEM_CLASSIFIER` = '$ITEM_CLASSIFIER'";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("update success $result row");

        }
        public static function delete($id)
        {
            require("connection_connect.php");
            
            $sql = "DELETE FROM ITEM WHERE ITEM_ID = '$id'";
            $result = $conn->query($sql);

            require("connection_close.php");

            return("update success $result row");
        }
    }
?>