<?php
/**
 * This class is to connect to the database easier.
 * **/
class config { 
    //Paramaters to mysql_connect function - built in function for php
    private $dbUser;
    private $dbPass;
    private $dbDatabase;
    private $dbHost; 
    private $dbConn;
    
    //Using constructor to establish connection
    public function __construct($dbUser,$dbPass,$dbDatabase,$dbHost){
        
        //Using pri. members
        //Variables to establish connection, vars are intialized during creation of the obj.
        $this->dbUser = $dbUser;
        $this->dbPass = $dbPass;
        $this->dbDatabase = $dbDatabase;
        $this->dbHost = $dbHost;
        $this->dbConn = mysql_connect($this->dbHost,$this->dbUser,$this->dbPass);//Opens or reuses a connection to a MySQL server.
        
        //Testing connection
        if($this->dbConn){
            mysql_select_db($this->dbDatabase); //Sets the current active database
            //echo "Successfully connected to database.";//sucessfully connected
        }else{
            die("Error: Failed to connect to database.");//Abort attempting to connect
        }
        
     }

}