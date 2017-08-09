<head>
  <?php include 'includes.php'; ?>
  
</head>

 <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Adicionar Novo Contato</h4>
        </div>
        <div class="modal-body">	
          <div class="row"> 
          <div class="col-md-8">
         	<input class="form-control" type="email" name="nome" placeholder="Nome" required>
          </div>		
         </div>
         <div class="row"> 
         <div class="col-md-8">
         	<input class="form-control" type="text" name="sobrenome" placeholder="Sobrenome" required>
         </div>	
         </div>
         <div class="row"> 
         	<div class="col-md-8">
         		<input class="form-control" type="text" name="ramal" placeholder="Ramal" onkeyup="num(this);" maxlength="4" required>
         	</div>
         </div>

         <div class="row"> 
         	<div class="col-md-8">
         		<input class="form-control" type="text" name="cargo" placeholder="Cargo" required>
         	</div>
         </div>

         </div>
   
        <div class="modal-footer">
       	<div class="row">
            <button type="button" class="btn btn-danger" data-dismiss="modal" id="btn2">
          	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
          </button>

          <button type="button" class="btn btn-success" id="btn1" >
          	<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
          </button>

  		</div>
        </div>
      </div>
      
    </div>
  </div>
  