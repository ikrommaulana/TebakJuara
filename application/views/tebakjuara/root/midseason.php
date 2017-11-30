<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">           
        <div class="row">
            <ol class="breadcrumb">
                <li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
                <li class="active">Tebakan Tengah Musim</li>
            </ol>
        </div><!--/.row-->
        
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Hasil Tebakan</h1>
            </div>
        </div><!--/.row-->
                
        
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Hasil Tebakan</div>
                    <div class="panel-body">
                        <table data-toggle="table" data-url="<?php base_url();?>assets/tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
                            <thead>
                            <tr>
                                <th data-field="id user"  data-sortable="true">ID User</th>
                                <th data-field="home" data-sortable="true">Username</th>
                                <th data-field="klub" data-sortable="true">Klub</th>
                                <th data-field="menang" data-sortable="false">Menang</th>
                                <th data-field="seri" data-sortable="false">Seri</th>
                                <th data-field="kalah" data-sortable="false">Kalah</th>
                                <th data-field="poin" data-sortable="false">Poin</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php foreach($tebakan as $value){ ?>
                            <tr>
                                <td><?= $value->id_user; ?></td>
                                <td><?= $value->username; ?></td>
                                <td><?= $value->club_name; ?></td>
                                <td><?= $value->w; ?></td>
                                <td><?= $value->d; ?></td>
                                <td><?= $value->l; ?></td>
                                <td><?= $value->poin; ?></td>
                            </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!--/.row-->  
        
        
    </div><!--/.main-->
	
	
	<!-- Modal -->
	<div class="modal fade" id="updateMatch" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title" id="myModalLabel">Modal title</h4>
		  </div>
		  <div class="modal-body">
			
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button>
		  </div>
		</div>
	  </div>
	</div>