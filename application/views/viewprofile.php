
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Profil Kamu</h1>
					<br/>
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
					<div class="panel-body">
                    <?php echo form_open('profile'); ?>
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
								<input name="id" type="hidden" value="<?php echo $user['id']; ?>">
								<div width="30%" style="text-align:left;font-size:16px;">
                                <label style="padding-top:10px;text-align:right;width:200px">Username</label> <span style="padding-left:80px;"><?php echo $user['username']; ?></span><br/>
                                <label style="padding-top:0px;text-align:right;width:200px">Name</label> <span style="padding-left:80px;"><?php echo $hasil->name; ?></span><br/>
                                <label style="padding-top:0px;text-align:right;width:200px">Phone</label> <span style="padding-left:80px;"><?php echo $hasil->phone; ?></span><br/>
                                <label style="padding-top:0px;text-align:right;width:200px">Email</label> <span style="padding-left:80px;"><?php echo $hasil->email; ?></span>
								</div>
							<br/>
							<h3>Ubah Profil</h3>
                            <div class="form-group">
                                <input class="form-control" placeholder="Nama" name="name" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Phone Number" name="phone" type="text" autofocus="">
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Email" name="email" type="text" autofocus="">
                            </div>
							<input name="status" value="0" type="hidden">
                            <input name="submit" value="Perbarui Profil" type="submit" class="btn btn-primary btn-block">
                            <div class="text-center text-error">
								<p> <?php echo form_error('name'); ?> </p>  
								<p> <?php echo form_error('email'); ?> </p>
								<p> <?php echo form_error('phone'); ?> </p>
                            </div>
                        </fieldset>
                    </form>
                    <?php echo form_close(); ?>
					</div>
					</div>
                </div>
            </div>
        </div>
    </section>
