<script type="text/javascript" src="<?php echo base_url("assets/js/validate/dashboard/aprobar.js"); ?>"></script>

<div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	<h4 class="modal-title" id="exampleModalLabel">Aprobar o Desaprobar Psicólogo</h4>
</div>

<div class="modal-body">
	<form name="form" id="form" role="form" method="post" >
		<input type="hidden" id="hddIdUser" name="hddIdUser" value="<?php echo $information?$information["id_user"]:""; ?>"/>
		
		<h4>Psicólogo: <small><?php echo $information?$information["name"]:""; ?> </small></h4>
		
		<div class="row">			
			<div class="col-sm-12">
				<div class="form-group text-left">
					<label class="control-label" for="skill">Aprobar/Desaprobar: *</label>
					<select name="state" id="state" class="form-control" required>
						<option value=''>Select...</option>
						<option value=1 <?php if($information["aprobado"] == 1) { echo "selected"; }  ?>>Aprobado</option>
						<option value=3 <?php if($information["aprobado"] == 3) { echo "selected"; }  ?>>Desaprobado</option>
					</select>
				</div>
			</div>
			
		</div>
		
		<div class="ln_solid"></div>
		<div class="form-group">
			<button type="button" id="btnSubmit" name="btnSubmit" class="btn btn-primary" >
				Guardar <span class="glyphicon glyphicon-floppy-disk" aria-hidden="true">
			</button> 
		</div>
		
		<div class="form-group">
			<div id="div_load" style="display:none">		
				<div class="progress progress-striped active">
					<div class="progress-bar" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
						<span class="sr-only">45% completado</span>
					</div>
				</div>
			</div>
			<div id="div_error" style="display:none">			
				<div class="alert alert-danger"><span class="glyphicon glyphicon-remove" id="span_msj">&nbsp;</span></div>
			</div>	
		</div>
			
	</form>
</div>