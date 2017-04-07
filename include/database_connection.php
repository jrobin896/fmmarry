<?php
        $DB_SERVER="localhost";
        $DB_USER="root";
        $DB_PASS="";
        $DB_NAME="dbms";

    //Create a database connection
        $connection = mysql_connect($DB_SERVER,$DB_USER,$DB_PASS,$DB_NAME);
        if (!$connection) 
        {
            die("Database connection failed: ");
        }

    //Select a database to use 
        $db_select = mysql_select_db($DB_NAME);
        if (!$db_select) 
        {
            die("Database selection failed.....: ");
        }
?>
