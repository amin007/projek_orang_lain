<?php require_once 'includes/header.php'; ?>

<div class="row">
<div class="col-md-12">

	<ol class="breadcrumb">
	<li><a href="dashboard.php">Home</a></li>		  
	<li class="active">Laporan</li>
	</ol>

	<div class="panel panel-default">
		<div class="panel-heading">
			<div class="page-heading"> <i class="glyphicon glyphicon-edit"></i> Template Laporan</div>
		</div> <!-- /panel-heading -->
		<div class="panel-body">
			<div class="remove-messages"></div>
			<div class="div-action pull pull-right" style="padding-bottom:20px;">
				<button class="btn btn-default button1" data-toggle="modal" id="addCategoriesModalBtn"
				data-target="#addCategoriesModal"> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Laporan </button>
			</div> <!-- /div-action -->				
				
			<table class="table" id="">
			<thead>
				<tr>							
				<th>Categories Name</th>
				<th>Status</th>
				<th style="width:15%;">Options</th>
				</tr>
			</thead>
			</table>
			<!-- /table -->

		</div> <!-- /panel-body -->
	</div> <!-- /panel -->		
</div> <!-- /col-md-12 -->
</div> <!-- /row -->


<?php require_once 'includes/footer.php'; ?>