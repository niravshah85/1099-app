<?php

class NiravTest{
	private $host='localhost';
	private $user='nshah';
	private $password='intuit01';
	private $databaseName='db1099';
	
	public function createDB(){
		//Create DB
		$dbName = $this->databaseName;
		$con = mysql_connect($this->host, $this->user, $this->password);
		
		if (!$con){
			die('Could not connect to mysql: ' . mysql_error() . " <br/>");
		}
		
		if (mysql_query("CREATE DATABASE " . $dbName, $con)){
			echo $dbName. " db created <br/>";
		}
		else{
			echo "Error creating database: " . $dbName . " " . mysql_error() . " <br/>";
		}
		
		mysql_close($con);
	}
	
	
	public function createSurveyTable(){
		// Create table
		$dbName = $this->databaseName;
		
		$tableName = "survey";
		
		$con = mysql_connect($this->host, $this->user, $this->password);
		
		echo "host: " . $this->host . " user: ". $this->user . " password: " . $this->password;
		
		mysql_select_db($dbName, $con);
		
		$sql = "CREATE TABLE " . $tableName.  
		" (
		FirstName varchar(150),
		LastName varchar(150),
		Age int
		)";
		
		echo 'dbName: ' . $dbName . "<br />";
		
		echo 'sql: ' . $sql . "<br />";
		
		// Execute query
		if(mysql_query($sql, $con)){
			echo $tableName. " table created <br/>";
		}else{
			echo "Error creating table: " . $tableName . " " . mysql_error() . " <br/>";
		}
		
		mysql_close($con);
	}
}

$instance = new NiravTest();

//createDB();

$instance->createSurveyTable();

?>