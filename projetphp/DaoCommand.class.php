



<?php

class DaoCommand {

 function db_open_connexion() {
  $con= mysql_connect('localhost', 'admin','');
  mysql_select_db('test', $con);
  return $con;
}
 
 function db_close_connexion($con) {


  mysql_close($con);
  
}
 
 function getall() {
 
 	$result = mysql_query("SELECT  o.confirmation_number,c.idClient , c.nom ,c.prenom ,c.telephone ,c.addresse ,o.idCustomer_orders , o.SItuation_commande , o.Date_creation FROM  clients c , ordre_clients o where c.idclient=o.Clients_idclient ;");

		
		//Add all records to an array
		$rows = array();
		while($row = mysql_fetch_array($result))
		{
		    $rows[] = $row;
		}
 
 
 return $rows ; 
 
 
 
 

   // $con=$this->db_open_connexion();
  
  
}


 function get_post_details_by_id($id,$table,$champ) {
  $con =$this->db_open_connexion();
  $id = mysql_real_escape_string($id);
  $query = "SELECT   FROM  $table  WHERE  $champ= $id";
  $res = mysql_query($query);
  $r = mysql_fetch_object($res);
 
 $this->db_close_connexion($con);
  return $r;
}
function insert(){
	$s=$_POST["SItuation_commande"];
		$c=$_POST["confirmation_number"];
			$result = mysql_query("INSERT INTO ordre_clients  (Date_creation,confirmation_number,Clients_idclient,SItuation_commande) values (now(),'$c' , '4' , '$s'); ");
			



}

function reload(){
$result = mysql_query("SELECT  o.confirmation_number , c.nom ,c.prenom ,c.telephone ,c.addresse ,o.idCustomer_orders , o.SItuation_commande , o.Date_creation FROM  clients c , ordre_clients o where c.idclient=o.Clients_idclient  and  idCustomer_orders= LAST_INSERT_ID();");
	
		$row=array();
		$row = mysql_fetch_array($result);
		return $row  ;
		
}

function update(){
	$result = mysql_query("UPDATE ordre_clients SET SItuation_commande= '" . $_POST["SItuation_commande"] . "', Date_creation =now()  WHERE idCustomer_orders = " . $_POST["idCustomer_orders"] . ";");


 
 
}


 function  delete(){






}


 



}


?>


 
 




























