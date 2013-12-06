<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/orange/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
	
	
  </head>
  <body>
  <center>
	<div id="cmd" style="width: 900px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#cmd').jtable({
				title: 'Commmande',
				actions: {
					listAction: 'CommandAction.php?action=list',
					createAction: 'CommandAction.php?action=create',
					updateAction: 'CommandAction.php?action=update',
					deleteAction: 'CommandAction.php?action=delete'
				},
				fields: {
					idCustomer_orders: {
						key: true,
						create: false,
						edit: false,
						list: false
					},
					nom: {
						title: 'nom',
						create :false ,
						width: '40%',
						edit:false
						
					},
					prenom: {
						title: 'prenom',
						width: '40%',
						create :false ,
						edit:false
					},
					addresse: {
						title: 'addresse',
						width: '30%',
						create :false ,
						edit: false
					},
					
					telephone: {
						title: 'telephone',
						width: '30%',
						create :false ,
						
						edit: false
					},
					
					
					SItuation_commande: {
						title:'status commande',
						width: '40%' ,
						create : true ,
						edit:true 
						
						
					},
					Date_creation : {
						title:'date creation',
						width: '40%',
						type: 'date',
						create: false  ,
						edit: false
					},
					confirmation_number :{
					
					title:'numero confirmation',
					width :'40%' ,
					create :true ,
					edit :true ,
					list :false 
					
					
					},
					idClient :{
					
					title:'idClient',
					
					width :'40%' ,
					create :false ,
					edit :true ,
					list :false 
					
					
					}
					
					
					
					
					
					
				}
			});

			//Load person list from server
			$('#cmd').jtable('load');

		});

	</script>
 </center>
  </body>
</html>
