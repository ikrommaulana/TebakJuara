<!-- Intro Section -->
    <section id="intro" style="padding-top:100px">
        <div class="container">
            <?php echo form_open('daftar'); ?>
            <form role="form" method="post">
            <div class="row">
                <div class="col-lg-6" id="area">
                    <h1><span class="glyphicon glyphicon-home" aria-hidden="true"></span></h1>
					<div class="panel-body">
                        <fieldset>
                            <div class="form-group">
                                <select name="prov" class="form-control" id="provinsi">
								   <option>- Pilih Provinsi -</option>
								   <?php foreach($prov as $prov){
									echo '<option value="'.$prov->id.'">'.$prov->province_name.'</option>';
								   } ?>
								</select>
                            </div>
                            <div class="form-group">
                                <select name="kab" class="form-control" id="kabupaten">
								   <option value=''>Pilih Kabupaten / Kota</option>
								</select>
                            </div>
                            <div class="form-group">
                                <select name="kec" class="form-control" id="kecamatan">
								   <option>Pilih Kecamatan</option>
								</select>
                            </div>
                            <div class="form-group">
                                <select name="des" class="form-control" id="kelurahan">
								   <option>Pilih Kelurahan</option>
								</select>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="RW" name="rw" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="RT" name="rt" type="text" value="">
                            </div>
                            <div class="form-group">
                                <select name="lang" class="form-control" id="langganan">
								   <option>Pernah Berlangganan MNC Play?</option>
								   <option value="1">Pernah</option>
								   <option value="0">Tidak Pernah</option>
								</select>
                            </div>
                            <div class="text-center text-error red-text">
								<p> <?php echo form_error('prov'); ?> </p>  
								<p> <?php echo form_error('kab'); ?> </p>
								<p> <?php echo form_error('kec'); ?> </p>
								<p> <?php echo form_error('kel'); ?> </p>
                            </div>
                        </fieldset>
                </div>
                </div>
				
				<div class="col-lg-6" id="datapelanggan">
                    
                </div>
            </div>
        </div>
	</section>
	<div id="bgfooter">
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
		<span>&nbsp;</span><br/>
	</div>
            </form>
            <?php echo form_close(); ?>