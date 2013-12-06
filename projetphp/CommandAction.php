<?php

require("DaoCommand.class.php");

$dao=new DaoCommand();

try
{
	//Open database connection
	$con = mysql_connect("localhost","admin","");
	mysql_select_db("test", $con);

	//Getting records (listAction)
	if($_GET["action"] == "list")
	{
		//Get records from database
		
		

	
	
		$rows=$dao->getall();
		
		



		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Records'] =$rows ;
		print json_encode($jTableResult);
	}
	//Creating a new record (createAction)
	else if($_GET["action"] == "create")
	{   $_SESSION['id']=1 ;
		//Insert record into database
		
	$dao->insert();
	
		//Get last inserted record (to return to jTable)
		

	

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		$jTableResult['Record'] = $dao->reload();
		print json_encode($jTableResult);
	}
	//Updating a record (updateAction)
	else if($_GET["action"] == "update")
	{
		//Update record in database
	
$dao->update();

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] = "OK";
		print json_encode($jTableResult);
	}
	//Deleting a record (deleteAction)
	else if($_GET["action"] == "delete")
	{
	
	
		//Delete from database
		
	
		

		//Return result to jTable
		$jTableResult = array();
		$jTableResult['Result'] ="OK";
		
		
		print json_encode($jTableResult);
	}

	//Close database connection
	mysql_close($con);

}
catch(Exception $ex)
{
    //Return error message
	$jTableResult = array();
	$jTableResult['Result'] = "ERROR";
	$jTableResult['Message'] = $ex->getMessage();
	print json_encode($jTableResult);
}
	
?>