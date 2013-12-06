<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/red/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
	
	
  </head>
  <body>
  <center>
	<div id="client" style="width: 900px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#client').jtable({
				title: ' produitcommandes',
				actions: {
					listAction: 'ClientAction.php?action=list',
					createAction:'ClientAction.php?action=create',
					updateAction:'ClientAction.php?action=update',
					deleteAction:'ClientAction.php?action=delete'
				},
				fields: {
				
				idProducts : {
			
						key :true ,
						create:false,
						edit: false,
						list: false 
					},
					SItuation_commande: {
			
						title :'SItuation_commande',
						create: false,
						edit: false,
						
					},
					prix: {
						title: 'prix',
						create :false ,
						width: '40%',
						edit:false
						
					},
					description : {
						title: 'description',
						width: '40%',
						create :false ,
						edit:false ,
						 
					},
					type_produit_HEF : {
						title: 'type_produit',
						width: '30%',
						create :false ,
						edit: false ,
						 
					}
					
				}
			});

			//Load person list from server
			$('#client').jtable('load');

		});

	</script>
 </center>
  </body>
</html>
