
    <!-- Intro Section -->
    <section id="intro" class="intro-section" style="padding-top:100px">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Next Match</h1>
						<br/>
                        <div class="col-md-6">
                            <?php echo form_open('tebakskor/save/'.$hasil->id_match); ?>
                            <form role="form" method="post">
                                <div class="form-group" align="center">
									<div><img src="<?= $hasil->home_logo;?>" width="200px"/></div>
                                    </div>
                        </div>
                        <div class="col-md-6">
                                <div class="form-group" align="center">
									<div><img src="<?= $hasil->away_logo;?>" width="200px"/></div>
                                    </div>
                        </div>
                        <div class="col-md-12" align="center">
								<label><?php $datetime = date_create($hasil->match_date); echo date_format($datetime,'d-M-Y H:i'); ?></label>
								<p><br/></p>
                                
								<input type="hidden" name="pertandingan" value="<?= $hasil->id_match;?>"/>
								<input type="hidden" name="username" value="<?= $user['username']?>"/>
								<input type="hidden" name="id" value="<?= $user['id'];?>"/>
								<input type="hidden" name="tanggal_dibuat" value="<?php echo date('Y/m/d H:i:s'); ?>"/>
                            </div>
                        </form>
                        <?php echo form_close(); ?>
                </div>
            </div>
        </div>
    </section>