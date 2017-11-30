
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Lengkapi Profil Kamu</h1>
					<br/>
					<div class="col-md-3">
					</div>
					<div class="col-md-6">
					<div class="panel-body">
                    <?php echo form_open('tebakskor'); ?>
                    <form role="form" method="post">
                        <fieldset>
                            <div class="form-group">
								<input name="user_id" type="hidden" value="<?php echo $user['id']; ?>">
								<input name="username" type="hidden" value="<?php echo $user['username']; ?>">
                                <label style="padding-top:10px;">Username : <?php echo $user['username']; ?></label>
                            </div>
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
                            <input name="submit" value="Lanjut ke Tebak Skor" type="submit" class="btn btn-primary btn-block">
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
