<?php 

class DaoClient {



 function getall() {
 
	$r=mysql_query(" SELECT  p.idProducts , o.SItuation_commande ,p.prix , p.description ,p.type_produit_HEF FROM ordre_clients o , produit p , produits_commandes  c   WHERE o.idCustomer_orders =c.Ordre_Clients_idCustomer_orders and p.idProducts=c.Produit_idProducts ;"  );


$rows = array();
		while( $row=mysql_fetch_array($r))
		{
		    $rows[] = $row;
		}
 return  $rows ;
 


}
















}
















?>