<?php

/**
 * This class is to make querying easier.
 * It returns the result of a invalid query.
 * **/
class utilities{
   public function query($query) {
        $result = mysql_query($query);
        if (!$result){ 
            die('QUERY NOT EXECUTED: '.mysql_error());//mysql_error() "returns the error text from the last MySQL function"
        }
        return $result;
    }
}

