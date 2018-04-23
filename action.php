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
        //echo $sql;
        /*step 3*/
        $query = mysqli_query($this->con, $sql);
        if($query){
            return true;
        }

    }

}// end of Database

$obj = new DataOperation;

if(isset($_POST["submit"])) {
    /* step 2 */
    $myArray = array(
        "m_name" => $_POST["name"],
        "qty" => $_POST["qty"]
    );

   /*step 4*/
    if($obj->insert_record("med",$myArray)) {
        header("location:index.php?msg=Record Inserted");
    }

}

?>