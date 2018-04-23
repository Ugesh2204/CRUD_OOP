<?php

include "db.php";


class DataOperation extends Database {


    public function insert_record($table, $fields) {
        //"INSERT INTO table_name(, ,) VALUES ('m_name','qty')";
        /* step 2 */
        $sql = "";
        $sql .= "INSERT INTO ".$table;
        /*implod have two parametre glue = "," and pieces=array_keys($fields) implode (glue, pieces) */
        $sql .= " (".implode(",", array_keys($fields)).") VALUES ";
        $sql .= "('".implode("','", array_values($fields))."')";
        echo $sql;

    }

}// end of Database

$obj = new DataOperation;

if(isset($_POST["submit"])) {
    /* step 2 */
    $myArray = array(
        "m_name" => $_POST["name"],
        "qty" => $_POST["qty"]
    );

    $obj->insert_record("med",$myArray);

}

?>