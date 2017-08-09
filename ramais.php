<head>
	<?php require 'includes.php'; ?>
	<?php require 'modal.php'; ?>
	<?php require 'conn.php'; ?>
	<script src="myScript.js"></script>
	<link rel="stylesheet" type="text/css" href="myCss.css">
	<title>Lista de Ramais - Index</title>	
</head>


<body class="body"> 

	<div class="container">
		<img src="images/logo2.jpg" class="img-responsive" alt="Grecco Solutions" width="400" height="336">
		<div class="row">
			<div class="panel panel-success filterable">
				<div class="panel-heading">
					<h3 class="panel-title">Lista de Ramais</h3>
					<div class="pull-right">
						<button class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-filter"></span></button>
					</div>
				</div>
				<table class="table">
					<thead>
						<tr class="filters">
							<th><input type="text" class="form-control" placeholder="Ramal" disabled></th>
							<th><input type="text" class="form-control" placeholder="Nome" disabled></th>
							<th><input type="text" class="form-control" placeholder="Sobrenome" disabled></th>
							<th><input type="text" class="form-control" placeholder="Departamento" disabled></th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>3040</td>
							<td>Jacqueline</td>
							<td>Grecco</td>
							<td>TI</td>
						</tr>	
                </tbody>
               
            </table>
        </div>
    </div>
     <div class="row">
                	<button type="button" class="btn btn-danger btn-sm">
  						<span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
					</button>
                	<button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal">
  						<span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
					</button>	
						
      </div>	

</div>

</body>

