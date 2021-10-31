<?php
    class HomeIsolation
    {
        public $HOMEISO_ID;
        public $VD_ID;
        public $RH_ID;
        public $ID_CARD;
        public $ID_ATK;
        public $INITIAL_SYMPTOM;
        public $SATUS;

        public function __construct($HOMEISO_ID,$VD_ID,$RH_ID,$ID_CARD,$ID_ATK,$INITIAL_SYMPTOM,$SATUS)
        {
            $this->HOMEISO_ID = $HOMEISO_ID;
            $this->VD_ID = $VD_ID;
            $this->RH_ID = $RH_ID;
            $this->ID_CARD = $ID_CARD;
            $this->ID_ATK = $ID_ATK;
            $this->INITIAL_SYMPTOM = $INITIAL_SYMPTOM;
            $this->SATUS = $SATUS;
        }

        public static function getall()
        {
            $homeisolationList=[];

            require("connection_connect.php");

            $sql="SELECT * FROM HomeIsolation";
            $result=$conn->query($sql);

            while($my_row = $result->fetch_assoc())
            {
                $HOMEISO_ID=$my_row[HomeIso_ID];
                $VD_ID=$my_row[VD_ID];
                $RH_ID=$my_row[RH_ID];
                $ID_CARD=$my_row[ID_Card];
                $ID_ATK=$my_row[ID_ATK];
                $INITIAL_SYMPTOM=$my_row[Initial_symptom];
                $SATUS=$my_row[Satus];
                $homeisolationList[]=new HomeIsolation($HOMEISO_ID,$VD_ID,$RH_ID,$ID_CARD,$ID_ATK,$INITIAL_SYMPTOM,$SATUS);
            }

            require("connection_close.php");

            return $homeisolationList;
        }
    }
?>