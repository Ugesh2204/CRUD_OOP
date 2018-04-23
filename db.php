<?php
/*database connection */


Class Database {

    public $con;
    public function __construct() {
        $this->con = mysqli_connect ("localhost","root","1234","medicine");
        if($this->con) {
            echo "connected";
        }else {
            echo "Not connected";
        }
    }
}

/*Make the database object */

$database = new Database;

?>