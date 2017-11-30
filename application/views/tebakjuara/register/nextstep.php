<h1><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h1>
					<div class="panel-body">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama" name="nama" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Mobile" name="nohp" type="text" value="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone" name="telrumah" type="text" value="">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Alamat" name="alamat" type="text" value="" rows="1"></textarea>
                            </div>
							<input name="created" type="hidden" value="<?php echo date('Y-m-d'); ?>">
                            <input type="submit" class="btn btn-primary btn-block" name="daftar" value="Daftar Sekarang">
                            <div class="text-center text-error red-text">
								<p> <?php echo form_error('nama'); ?> </p>  
								<p> <?php echo form_error('email'); ?> </p>  
								<p> <?php echo form_error('nohp'); ?> </p>
								<p> <?php echo form_error('telrumah'); ?> </p>
								<p> <?php echo form_error('alamat'); ?> </p>
                            </div>
                        </fieldset>
                </div>